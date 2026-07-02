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

/* super_admin/analysis/payment_link.html.twig */
class __TwigTemplate_21fd25408bbca27384f523a5791c7e9a extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis/payment_link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "super_admin/analysis/payment_link.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Paiement requis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #0463f1;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f8fafc;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .payment-link {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            word-break: break-all;
            border: 1px solid #e2e8f0;
        }
        .button {
            display: inline-block;
            background: #0463f1;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            margin: 15px 0;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h2>💳 Paiement requis</h2>
        </div>
        <div class=\"content\">
            <p>Bonjour <strong>";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["company"]) || array_key_exists("company", $context) ? $context["company"] : (function () { throw new RuntimeError('Variable "company" does not exist.', 61, $this->source); })()), "companyName", [], "any", false, false, false, 61), "html", null, true);
        yield "</strong>,</p>
            
            <p>Votre demande d'analyse <strong>#";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 63, $this->source); })()), "requestNumber", [], "any", false, false, false, 63), "html", null, true);
        yield "</strong> a été enregistrée.</p>
            
            <div style=\"background: #fef3c7; padding: 15px; border-radius: 8px; margin: 15px 0;\">
                <strong>📊 Récapitulatif :</strong><br>
                • Type : ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 67, $this->source); })()), "typeLabel", [], "any", false, false, false, 67), "html", null, true);
        yield "<br>
                • Période : ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 68, $this->source); })()), "periodStart", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 68, $this->source); })()), "periodEnd", [], "any", false, false, false, 68), "d/m/Y"), "html", null, true);
        yield "<br>
                • Montant : ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["analysis"]) || array_key_exists("analysis", $context) ? $context["analysis"] : (function () { throw new RuntimeError('Variable "analysis" does not exist.', 69, $this->source); })()), "amountFormatted", [], "any", false, false, false, 69), "html", null, true);
        yield "
            </div>
            
            <p>Pour finaliser votre commande, veuillez procéder au paiement en cliquant sur le lien ci-dessous :</p>
            
            <div class=\"payment-link\">
                <strong>🔗 Lien de paiement :</strong><br>
                <a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["payment_link"]) || array_key_exists("payment_link", $context) ? $context["payment_link"] : (function () { throw new RuntimeError('Variable "payment_link" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["payment_link"]) || array_key_exists("payment_link", $context) ? $context["payment_link"] : (function () { throw new RuntimeError('Variable "payment_link" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "</a>
            </div>
            
            <div style=\"text-align: center;\">
                <a href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["payment_link"]) || array_key_exists("payment_link", $context) ? $context["payment_link"] : (function () { throw new RuntimeError('Variable "payment_link" does not exist.', 80, $this->source); })()), "html", null, true);
        yield "\" class=\"button\">
                    💳 Payer maintenant
                </a>
            </div>
            
            <div class=\"alert alert-warning\" style=\"background: #fef3c7; padding: 10px; border-radius: 5px;\">
                ⚠️ Ce lien expirera le <strong>";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["expires_at"]) || array_key_exists("expires_at", $context) ? $context["expires_at"] : (function () { throw new RuntimeError('Variable "expires_at" does not exist.', 86, $this->source); })()), "d/m/Y H:i"), "html", null, true);
        yield "</strong>.
            </div>
            
            <p>Si vous avez des questions, n'hésitez pas à contacter notre support.</p>
            
            <p>Cordialement,<br>
            <strong>L'équipe HMA Market</strong></p>
        </div>
        <div class=\"footer\">
            © ";
        // line 95
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HMA Market - Tous droits réservés
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "super_admin/analysis/payment_link.html.twig";
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
        return array (  171 => 95,  159 => 86,  150 => 80,  141 => 76,  131 => 69,  125 => 68,  121 => 67,  114 => 63,  109 => 61,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/super_admin/payment_link.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Paiement requis</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #0463f1;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f8fafc;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .payment-link {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
            word-break: break-all;
            border: 1px solid #e2e8f0;
        }
        .button {
            display: inline-block;
            background: #0463f1;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            margin: 15px 0;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <div class=\"header\">
            <h2>💳 Paiement requis</h2>
        </div>
        <div class=\"content\">
            <p>Bonjour <strong>{{ company.companyName }}</strong>,</p>
            
            <p>Votre demande d'analyse <strong>#{{ analysis.requestNumber }}</strong> a été enregistrée.</p>
            
            <div style=\"background: #fef3c7; padding: 15px; border-radius: 8px; margin: 15px 0;\">
                <strong>📊 Récapitulatif :</strong><br>
                • Type : {{ analysis.typeLabel }}<br>
                • Période : {{ analysis.periodStart|date('d/m/Y') }} au {{ analysis.periodEnd|date('d/m/Y') }}<br>
                • Montant : {{ analysis.amountFormatted }}
            </div>
            
            <p>Pour finaliser votre commande, veuillez procéder au paiement en cliquant sur le lien ci-dessous :</p>
            
            <div class=\"payment-link\">
                <strong>🔗 Lien de paiement :</strong><br>
                <a href=\"{{ payment_link }}\">{{ payment_link }}</a>
            </div>
            
            <div style=\"text-align: center;\">
                <a href=\"{{ payment_link }}\" class=\"button\">
                    💳 Payer maintenant
                </a>
            </div>
            
            <div class=\"alert alert-warning\" style=\"background: #fef3c7; padding: 10px; border-radius: 5px;\">
                ⚠️ Ce lien expirera le <strong>{{ expires_at|date('d/m/Y H:i') }}</strong>.
            </div>
            
            <p>Si vous avez des questions, n'hésitez pas à contacter notre support.</p>
            
            <p>Cordialement,<br>
            <strong>L'équipe HMA Market</strong></p>
        </div>
        <div class=\"footer\">
            © {{ \"now\"|date(\"Y\") }} HMA Market - Tous droits réservés
        </div>
    </div>
</body>
</html>", "super_admin/analysis/payment_link.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\super_admin\\analysis\\payment_link.html.twig");
    }
}
