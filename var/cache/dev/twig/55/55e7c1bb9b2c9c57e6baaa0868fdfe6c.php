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

/* reset_password/email.html.twig */
class __TwigTemplate_c16ef704ef18e1d7f59897aae5ed9d06 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        // line 1
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<div style=\"font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;\">
    <div style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%); padding: 30px; text-align: center; border-radius: 10px 10px 0 0;\">
        <h1 style=\"color: white; margin: 0;\">HMA Market</h1>
        <p style=\"color: rgba(255,255,255,0.8); margin: 10px 0 0 0;\">Réinitialisation de mot de passe</p>
    </div>
    
    <div style=\"background: white; padding: 40px 30px; border-radius: 0 0 10px 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);\">
        <h2 style=\"color: #333; margin-top: 0;\">Bonjour,</h2>
        
        <p style=\"color: #666; line-height: 1.6; margin-bottom: 25px;\">
            Vous avez demandé la réinitialisation de votre mot de passe pour votre compte HMA Market.
        </p>
        
        <p style=\"color: #666; line-height: 1.6; margin-bottom: 30px;\">
            Pour créer un nouveau mot de passe, cliquez sur le bouton ci-dessous :
        </p>
        
        <div style=\"text-align: center; margin: 40px 0;\">
            <a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 20, $this->source); })()), "token", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\" 
               style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%); 
                      color: white; 
                      padding: 15px 30px; 
                      text-decoration: none; 
                      border-radius: 8px; 
                      font-weight: bold; 
                      display: inline-block;
                      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);\">
                Réinitialiser mon mot de passe
            </a>
        </div>
        
        <p style=\"color: #666; line-height: 1.6; margin-bottom: 10px;\">
            Ce lien expirera dans ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 34, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 34), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 34, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 34), "ResetPasswordBundle"), "html", null, true);
        yield ".
        </p>
        
        <p style=\"color: #999; font-size: 14px; margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px;\">
            Si vous n'avez pas demandé cette réinitialisation, veuillez ignorer cet email.
        </p>
    </div>
    
    <div style=\"text-align: center; color: #999; font-size: 12px; margin-top: 20px; padding: 20px;\">
        <p>© ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market. Tous droits réservés.</p>
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/email.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  121 => 43,  109 => 34,  92 => 20,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<div style=\"font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto;\">
    <div style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%); padding: 30px; text-align: center; border-radius: 10px 10px 0 0;\">
        <h1 style=\"color: white; margin: 0;\">HMA Market</h1>
        <p style=\"color: rgba(255,255,255,0.8); margin: 10px 0 0 0;\">Réinitialisation de mot de passe</p>
    </div>
    
    <div style=\"background: white; padding: 40px 30px; border-radius: 0 0 10px 10px; box-shadow: 0 4px 20px rgba(0,0,0,0.1);\">
        <h2 style=\"color: #333; margin-top: 0;\">Bonjour,</h2>
        
        <p style=\"color: #666; line-height: 1.6; margin-bottom: 25px;\">
            Vous avez demandé la réinitialisation de votre mot de passe pour votre compte HMA Market.
        </p>
        
        <p style=\"color: #666; line-height: 1.6; margin-bottom: 30px;\">
            Pour créer un nouveau mot de passe, cliquez sur le bouton ci-dessous :
        </p>
        
        <div style=\"text-align: center; margin: 40px 0;\">
            <a href=\"{{ url('app_reset_password', {token: resetToken.token}) }}\" 
               style=\"background: linear-gradient(135deg, #667eea 0%, #0463f1 100%); 
                      color: white; 
                      padding: 15px 30px; 
                      text-decoration: none; 
                      border-radius: 8px; 
                      font-weight: bold; 
                      display: inline-block;
                      box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);\">
                Réinitialiser mon mot de passe
            </a>
        </div>
        
        <p style=\"color: #666; line-height: 1.6; margin-bottom: 10px;\">
            Ce lien expirera dans {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.
        </p>
        
        <p style=\"color: #999; font-size: 14px; margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px;\">
            Si vous n'avez pas demandé cette réinitialisation, veuillez ignorer cet email.
        </p>
    </div>
    
    <div style=\"text-align: center; color: #999; font-size: 12px; margin-top: 20px; padding: 20px;\">
        <p>© {{ \"now\"|date(\"Y\") }} HMA Market. Tous droits réservés.</p>
        <p>Cet email a été envoyé automatiquement, merci de ne pas y répondre.</p>
    </div>
</div>
{% endblock %}", "reset_password/email.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\reset_password\\email.html.twig");
    }
}
