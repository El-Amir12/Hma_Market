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

/* emails/supplier_response_confirmation.html.twig */
class __TwigTemplate_c766234908279ee2948cddf96401740e extends Template
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
        return "base_email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base_email.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Confirmation de votre réponse - Avoir n°";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "creditNoteNumber", [], "any", false, false, false, 4), "html", null, true);
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
        yield "<table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;\">
    <tr>
        <td style=\"padding: 20px;\">
            <!-- En-tête -->
            <div style=\"text-align: center; padding-bottom: 20px; border-bottom: 2px solid #e9ecef;\">
                <h1 style=\"color: #28a745; margin: 0;\">
                    <i class=\"fas fa-check-circle\"></i> Confirmation
                </h1>
                <p style=\"color: #6c757d; margin: 10px 0 0;\">
                    Votre réponse a bien été enregistrée
                </p>
            </div>

            <div style=\"padding: 20px 0;\">
                <p style=\"font-size: 16px; line-height: 1.5;\">
                    Bonjour <strong>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "name", [], "any", false, false, false, 22), "html", null, true);
        yield "</strong>,
                </p>
                <p style=\"font-size: 16px; line-height: 1.5;\">
                    Nous accusons réception de votre réponse concernant l'avoir 
                    <strong>n°";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "creditNoteNumber", [], "any", false, false, false, 26), "html", null, true);
        yield "</strong>.
                </p>

                <!-- Récapitulatif de la réponse -->
                <div style=\"background-color: #e8f5e9; border-left: 4px solid #28a745; padding: 15px; margin: 20px 0; border-radius: 8px;\">
                    <h3 style=\"margin-top: 0; color: #28a745; font-size: 18px;\">
                        <i class=\"fas fa-reply-all\"></i> Récapitulatif de votre réponse
                    </h3>
                    <p style=\"margin: 10px 0;\">
                        <strong>Décision :</strong>
                        ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierDecision", [], "any", false, false, false, 36) == "accept_full")) {
            // line 37
            yield "                            <span style=\"color: #28a745;\">✅ Acceptation totale</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
($context["creditNote"] ?? null), "supplierDecision", [], "any", false, false, false, 38) == "accept_partial")) {
            // line 39
            yield "                            <span style=\"color: #fd7e14;\">🔄 Acceptation partielle</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 40
($context["creditNote"] ?? null), "supplierDecision", [], "any", false, false, false, 40) == "refuse")) {
            // line 41
            yield "                            <span style=\"color: #dc3545;\">❌ Refus</span>
                        ";
        } else {
            // line 43
            yield "                            <span style=\"color: #0d6efd;\">📝 Besoin d'informations</span>
                        ";
        }
        // line 45
        yield "                    </p>
                    ";
        // line 46
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierProposedAmount", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "                    <p style=\"margin: 10px 0;\">
                        <strong>Montant proposé :</strong>
                        ";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierProposedAmount", [], "any", false, false, false, 49), CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 49)), "html", null, true);
            yield "
                    </p>
                    ";
        }
        // line 52
        yield "                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierReference", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "                    <p style=\"margin: 10px 0;\">
                        <strong>Votre référence :</strong>
                        ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierReference", [], "any", false, false, false, 55), "html", null, true);
            yield "
                    </p>
                    ";
        }
        // line 58
        yield "                    <p style=\"margin: 10px 0;\">
                        <strong>Votre réponse :</strong><br>
                        ";
        // line 60
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "supplierResponse", [], "any", false, false, false, 60), "html", null, true));
        yield "
                    </p>
                </div>

                <!-- Prochaines étapes -->
                <div style=\"margin: 20px 0; padding: 15px; background-color: #f8f9fa; border-radius: 8px;\">
                    <h4 style=\"margin-top: 0;\">
                        <i class=\"fas fa-chart-line\"></i> Prochaines étapes
                    </h4>
                    <ul style=\"margin: 10px 0 0 20px; line-height: 1.8;\">
                        <li>Nos équipes vont analyser votre réponse</li>
                        <li>Nous vous contacterons si nécessaire pour finaliser l'accord</li>
                        <li>Un avoir sera émis selon la décision finale</li>
                    </ul>
                </div>

                <div style=\"margin: 20px 0; padding: 15px; text-align: center; border-top: 1px solid #e9ecef;\">
                    <p style=\"font-size: 12px; color: #6c757d;\">
                        Besoin d'aide ? Contactez-nous à 
                        <a href=\"mailto:";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["support_email"] ?? null), "html", null, true);
        yield "\" style=\"color: #0d6efd;\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["support_email"] ?? null), "html", null, true);
        yield "</a>
                    </p>
                </div>
            </div>
        </td>
    </tr>
</table>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/supplier_response_confirmation.html.twig";
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
        return array (  182 => 79,  160 => 60,  156 => 58,  150 => 55,  146 => 53,  143 => 52,  137 => 49,  133 => 47,  131 => 46,  128 => 45,  124 => 43,  120 => 41,  118 => 40,  115 => 39,  113 => 38,  110 => 37,  108 => 36,  95 => 26,  88 => 22,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/supplier_response_confirmation.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\supplier_response_confirmation.html.twig");
    }
}
