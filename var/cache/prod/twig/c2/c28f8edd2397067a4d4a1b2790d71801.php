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

/* emails/super_admin_activation.html.twig */
class __TwigTemplate_710a211157134d1999fbbc45b658eb3e extends Template
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
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>✅ Activation entreprise - ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield "</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            border: 1px solid #e9ecef;
        }
        .header {
            background: linear-gradient(135deg, #28a745, #20c997);
            padding: 35px 30px;
            text-align: center;
        }
        .header h1 {
            color: white;
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }
        .header .badge {
            display: inline-block;
            background: rgba(255,255,255,0.2);
            color: white;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 14px;
            margin-top: 15px;
            font-weight: 600;
        }
        .content {
            padding: 40px;
        }
        .success-icon {
            text-align: center;
            margin-bottom: 25px;
        }
        .success-icon span {
            font-size: 64px;
            background: #d4edda;
            padding: 20px;
            border-radius: 50%;
            display: inline-block;
            width: 64px;
            height: 64px;
            line-height: 64px;
        }
        .company-card {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 25px;
            margin: 25px 0;
            border: 1px solid #e9ecef;
        }
        .company-card h3 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #212529;
            font-size: 18px;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 12px;
        }
        .detail-row {
            display: flex;
            margin-bottom: 12px;
        }
        .detail-label {
            font-weight: 600;
            width: 140px;
            color: #495057;
        }
        .detail-value {
            color: #212529;
            flex: 1;
        }
        .subscription-number {
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: white;
            padding: 15px 20px;
            border-radius: 8px;
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
            letter-spacing: 2px;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #007bff, #6610f2);
            color: white;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            margin-top: 10px;
            transition: all 0.3s ease;
        }
        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,123,255,0.3);
        }
        .button.secondary {
            background: linear-gradient(135deg, #6c757d, #495057);
        }
        .button.secondary:hover {
            box-shadow: 0 4px 15px rgba(108,117,125,0.3);
        }
        .stats {
            display: flex;
            justify-content: space-around;
            margin: 30px 0;
            padding: 20px;
            background: #e8f5e9;
            border-radius: 12px;
        }
        .stat-item {
            text-align: center;
        }
        .stat-value {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
        }
        .stat-label {
            font-size: 12px;
            color: #6c757d;
            margin-top: 5px;
        }
        .button-group {
            text-align: center;
            margin: 30px 0;
        }
        .button-group .button {
            margin: 5px;
        }
        .footer {
            text-align: center;
            padding: 30px;
            background-color: #f8f9fa;
            color: #6c757d;
            font-size: 13px;
            border-top: 1px solid #e9ecef;
        }
        .warning-box {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin-top: 25px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class=\"email-container\">
        <!-- En-tête -->
        <div class=\"header\">
            <h1>🚀 ";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield "</h1>
            <div class=\"badge\">ACTIVATION ENTREPRISE</div>
        </div>
        
        <!-- Contenu -->
        <div class=\"content\">
            <div class=\"success-icon\">
                <span>✅</span>
            </div>
            
            <h2 style=\"text-align: center; color: #28a745; margin-top: 0; margin-bottom: 10px;\">
                Nouvelle entreprise activée !
            </h2>
            
            <p style=\"text-align: center; color: #6c757d; font-size: 16px; margin-bottom: 30px;\">
                Une entreprise a validé son compte et commence sa période d'essai.
            </p>
            
            <!-- Numéro d'abonnement -->
            <div class=\"subscription-number\">
                ";
        // line 191
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["subscription_number"] ?? null), "html", null, true);
        yield "
            </div>
            
            <!-- Carte entreprise -->
            <div class=\"company-card\">
                <h3>🏢 Détails de l'entreprise</h3>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Raison sociale</span>
                    <span class=\"detail-value\"><strong>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 200), "html", null, true);
        yield "</strong></span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Email</span>
                    <span class=\"detail-value\">";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "email", [], "any", false, false, false, 205), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Téléphone</span>
                    <span class=\"detail-value\">";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", true, true, false, 210)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "phone", [], "any", false, false, false, 210), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Type</span>
                    <span class=\"detail-value\">";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyType", [], "any", true, true, false, 215)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyType", [], "any", false, false, false, 215), "Non spécifié")) : ("Non spécifié")), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Adresse</span>
                    <span class=\"detail-value\">";
        // line 220
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", true, true, false, 220)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "address", [], "any", false, false, false, 220), "Non spécifiée")) : ("Non spécifiée")), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date inscription</span>
                    <span class=\"detail-value\">";
        // line 225
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "createdAt", [], "any", false, false, false, 225), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                </div>
                
                <div class=\"detail-row\">
                    <span class=\"detail-label\">Date activation</span>
                    <span class=\"detail-value\"><strong style=\"color: #28a745;\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["activation_date"] ?? null), "d/m/Y H:i"), "html", null, true);
        yield "</strong></span>
                </div>
            </div>
            
            <!-- Statistiques -->
            <div class=\"stats\">
                <div class=\"stat-item\">
                    <div class=\"stat-value\">14</div>
                    <div class=\"stat-label\">Jours d'essai</div>
                </div>
                <div class=\"stat-item\">
                    <div class=\"stat-value\">";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "trialEndsAt", [], "any", false, false, false, 241), "d/m"), "html", null, true);
        yield "</div>
                    <div class=\"stat-label\">Fin essai</div>
                </div>
                <div class=\"stat-item\">
                    <div class=\"stat-value\">0</div>
                    <div class=\"stat-label\">Utilisateurs</div>
                </div>
            </div>
            
            <!-- ✅ BOUTONS D'ACTION AMÉLIORÉS -->
            <div class=\"button-group\">
                <!-- ✅ BOUTON PRINCIPAL VERS LA PAGE SHOW DE L'ENTREPRISE -->
                <a href=\"";
        // line 253
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["company_show_url"] ?? null), "html", null, true);
        yield "\" class=\"button\" style=\"background: linear-gradient(135deg, #28a745, #20c997);\">
                    👁️ Voir les détails de l'entreprise
                </a>
                
                <!-- ✅ BOUTON SECONDAIRE VERS LA LISTE DES ENTREPRISES -->
                <a href=\"";
        // line 258
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["admin_url"] ?? null), "html", null, true);
        yield "\" class=\"button secondary\">
                    📋 Voir toutes les entreprises
                </a>
            </div>
            
            <!-- Note importante -->
            <div class=\"warning-box\">
                <p style=\"margin: 0; color: #856404;\">
                    <strong>📌 À faire :</strong> L'entreprise est maintenant en période d'essai de 14 jours. 
                    Un suivi est recommandé avant la fin de cette période pour discuter de l'abonnement.
                </p>
                <p style=\"margin: 10px 0 0 0; color: #856404; font-size: 14px;\">
                    🔍 <strong>Lien direct :</strong> <a href=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["company_show_url"] ?? null), "html", null, true);
        yield "\" style=\"color: #856404;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 270), "html", null, true);
        yield "</a>
                </p>
            </div>
            
            <p style=\"margin-top: 25px; font-size: 14px; color: #6c757d; text-align: center;\">
                L'administrateur de l'entreprise a reçu ses identifiants par email.<br>
                Il devra changer son mot de passe à la première connexion.
            </p>
        </div>
        
        <!-- Pied de page -->
        <div class=\"footer\">
            <p>
                <strong>";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield "</strong> - Plateforme de gestion d'entreprise
            </p>
            <p style=\"margin: 10px 0 0 0; font-size: 11px;\">
                Cet email est envoyé automatiquement lors de l'activation d'un compte entreprise.<br>
                © ";
        // line 287
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["app_name"] ?? null), "html", null, true);
        yield ". Tous droits réservés.
            </p>
        </div>
    </div>
</body>
</html>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/super_admin_activation.html.twig";
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
        return array (  377 => 287,  370 => 283,  352 => 270,  337 => 258,  329 => 253,  314 => 241,  300 => 230,  292 => 225,  284 => 220,  276 => 215,  268 => 210,  260 => 205,  252 => 200,  240 => 191,  217 => 171,  49 => 6,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/super_admin_activation.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\super_admin_activation.html.twig");
    }
}
