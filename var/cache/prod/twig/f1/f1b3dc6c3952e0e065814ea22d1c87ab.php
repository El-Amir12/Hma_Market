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

/* emails/supplier_credit_note_notification.html.twig */
class __TwigTemplate_bd784b10b055710210683179fc104a5e extends Template
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
        yield "Action requise - Avoir fournisseur n°";
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
                <h1 style=\"color: #dc3545; margin: 0;\">
                    ⚠️ Action requise
                </h1>
                <p style=\"color: #6c757d; margin: 10px 0 0;\">
                    Avoir fournisseur n° <strong style=\"color: #dc3545;\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "creditNoteNumber", [], "any", false, false, false, 16), "html", null, true);
        yield "</strong>
                </p>
            </div>

            <!-- Message principal -->
            <div style=\"padding: 20px 0;\">
                <p style=\"font-size: 16px; line-height: 1.5;\">
                    Bonjour <strong>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["supplier"] ?? null), "name", [], "any", false, false, false, 23), "html", null, true);
        yield "</strong>,
                </p>
                <p style=\"font-size: 16px; line-height: 1.5;\">
                    Un problème a été signalé concernant un lot que vous avez livré à 
                    <strong>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 27), "companyName", [], "any", false, false, false, 27), "html", null, true);
        yield "</strong>.
                </p>
                
                <!-- Détails du problème -->
                <div style=\"background-color: #f8f9fa; border-left: 4px solid #dc3545; padding: 15px; margin: 20px 0; border-radius: 8px;\">
                    <h3 style=\"margin-top: 0; color: #dc3545; font-size: 18px;\">
                        📦 Détails du lot concerné
                    </h3>
                    <table width=\"100%\" style=\"font-size: 14px;\">
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>N° commande :</strong></td>
                            <td style=\"padding: 5px 0;\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "purchaseNumber", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Date commande :</strong></td>
                            <td style=\"padding: 5px 0;\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["purchase"] ?? null), "createdAt", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Numéro de lot :</strong></td>
                            <td style=\"padding: 5px 0;\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 46), "batchNumber", [], "any", false, false, false, 46), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Produit :</strong></td>
                            <td style=\"padding: 5px 0;\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 50), "product", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Quantité concernée :</strong></td>
                            <td style=\"padding: 5px 0;\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "affectedQuantity", [], "any", false, false, false, 54), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 54), "currentQuantity", [], "any", false, false, false, 54))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 54), "currentQuantity", [], "any", false, false, false, 54))), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, true, false, 54), "product", [], "any", false, true, false, 54), "unit", [], "any", true, true, false, 54)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 54), "product", [], "any", false, false, false, 54), "unit", [], "any", false, false, false, 54), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Prix unitaire :</strong></td>
                            <td style=\"padding: 5px 0;\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "stockBatch", [], "any", false, false, false, 58), "unitPrice", [], "any", false, false, false, 58), CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 58)), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <td style=\"padding: 5px 0;\"><strong>Montant total :</strong></td>
                            <td style=\"padding: 5px 0; font-weight: bold; color: #dc3545;\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "declaredAmount", [], "any", false, false, false, 62), CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 62)), "html", null, true);
        yield "</td>
                        </tr>
                    </table>
                </div>

                <!-- Type de problème -->
                <div style=\"background-color: #fff3cd; border-left: 4px solid #ffc107; padding: 15px; margin: 20px 0; border-radius: 8px;\">
                    <h3 style=\"margin-top: 0; color: #856404; font-size: 18px;\">
                        ❓ Nature du problème
                    </h3>
                    <p style=\"margin: 10px 0;\">
                        <strong>Type :</strong> 
                        ";
        // line 74
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "issueType", [], "any", false, false, false, 74) == "quality")) {
            // line 75
            yield "                            Défaut de qualité
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 76
($context["creditNote"] ?? null), "issueType", [], "any", false, false, false, 76) == "quantity_missing")) {
            // line 77
            yield "                            Quantité manquante
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 78
($context["creditNote"] ?? null), "issueType", [], "any", false, false, false, 78) == "damaged")) {
            // line 79
            yield "                            Produit abîmé
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 80
($context["creditNote"] ?? null), "issueType", [], "any", false, false, false, 80) == "wrong_product")) {
            // line 81
            yield "                            Erreur de produit
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 82
($context["creditNote"] ?? null), "issueType", [], "any", false, false, false, 82) == "short_shelf_life")) {
            // line 83
            yield "                            Durée de vie courte
                        ";
        } else {
            // line 85
            yield "                            Autre
                        ";
        }
        // line 87
        yield "                    </p>
                    <p style=\"margin: 10px 0;\">
                        <strong>Description détaillée :</strong><br>
                        ";
        // line 90
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "description", [], "any", false, false, false, 90), "html", null, true));
        yield "
                    </p>
                    <p style=\"margin: 10px 0;\">
                        <strong>Priorité :</strong>
                        ";
        // line 94
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "priority", [], "any", false, false, false, 94) == "critical")) {
            // line 95
            yield "                            <span style=\"color: #dc3545; font-weight: bold;\">⚠️ CRITIQUE</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 96
($context["creditNote"] ?? null), "priority", [], "any", false, false, false, 96) == "high")) {
            // line 97
            yield "                            <span style=\"color: #fd7e14; font-weight: bold;\">Haute</span>
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 98
($context["creditNote"] ?? null), "priority", [], "any", false, false, false, 98) == "medium")) {
            // line 99
            yield "                            <span style=\"color: #ffc107; font-weight: bold;\">Moyenne</span>
                        ";
        } else {
            // line 101
            yield "                            <span style=\"color: #6c757d;\">Basse</span>
                        ";
        }
        // line 103
        yield "                    </p>
                </div>

                <!-- 🔥 PIÈCES JOINTES - AVEC AFFICHAGE DES IMAGES -->
                ";
        // line 107
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "attachments", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                <div style=\"background-color: #e8f4f8; border-left: 4px solid #17a2b8; padding: 15px; margin: 20px 0; border-radius: 8px;\">
                    <h3 style=\"margin-top: 0; color: #0c5460; font-size: 18px;\">
                        📎 Pièces jointes
                    </h3>
                    <p>Des fichiers ont été joints pour illustrer le problème :</p>
                    
                    ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "attachments", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 115
                yield "                        ";
                $context["extension"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::last($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), $context["attachment"], ".")));
                // line 116
                yield "                        <div style=\"margin: 15px 0; padding: 10px; background: white; border-radius: 8px; border: 1px solid #e0e0e0;\">
                            ";
                // line 117
                if (CoreExtension::inFilter(($context["extension"] ?? null), ["jpg", "jpeg", "png", "gif", "webp"])) {
                    // line 118
                    yield "                                <div style=\"margin-bottom: 8px;\">
                                    <strong>📷 Image :</strong> ";
                    // line 119
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attachment"], "html", null, true);
                    yield "
                                </div>
                                <div>
                                    <img src=\"";
                    // line 122
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/credit_notes_attachments/" . $context["attachment"]))), "html", null, true);
                    yield "\" 
                                         alt=\"Pièce jointe\"
                                         style=\"max-width: 100%; max-height: 300px; border-radius: 8px; border: 1px solid #ddd;\">
                                </div>
                            ";
                } elseif (CoreExtension::inFilter(                // line 126
($context["extension"] ?? null), ["mp4", "mov", "avi", "mkv", "webm"])) {
                    // line 127
                    yield "                                <div style=\"margin-bottom: 8px;\">
                                    <strong>🎥 Vidéo :</strong> ";
                    // line 128
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attachment"], "html", null, true);
                    yield "
                                </div>
                                <div>
                                    <video controls style=\"max-width: 100%; max-height: 300px; border-radius: 8px;\">
                                        <source src=\"";
                    // line 132
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/credit_notes_attachments/" . $context["attachment"]))), "html", null, true);
                    yield "\" type=\"video/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extension"] ?? null), "html", null, true);
                    yield "\">
                                        Votre navigateur ne supporte pas la lecture de vidéos.
                                    </video>
                                </div>
                            ";
                } else {
                    // line 137
                    yield "                                <div>
                                    <strong>📄 Fichier :</strong> 
                                    <a href=\"";
                    // line 139
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/credit_notes_attachments/" . $context["attachment"]))), "html", null, true);
                    yield "\" 
                                       style=\"color: #0d6efd; text-decoration: none;\"
                                       target=\"_blank\">
                                        ";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attachment"], "html", null, true);
                    yield "
                                    </a>
                                </div>
                            ";
                }
                // line 146
                yield "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['attachment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            yield "                    
                    <p style=\"margin-top: 15px; font-size: 12px; color: #6c757d;\">
                        Ces fichiers sont également accessibles dans l'espace client.
                    </p>
                </div>
                ";
        }
        // line 154
        yield "
                <!-- Action requise -->
                <div style=\"background-color: #e7f1ff; border-left: 4px solid #0d6efd; padding: 20px; margin: 20px 0; border-radius: 8px; text-align: center;\">
                    <h3 style=\"margin-top: 0; color: #0d6efd;\">
                        ⏰ Action requise
                    </h3>
                    <p style=\"font-size: 16px;\">
                        Merci de répondre à ce problème dans les plus brefs délais.
                    </p>
                    <p style=\"font-size: 14px; color: #6c757d;\">
                        Ce lien est valable <strong>30 jours</strong>.
                    </p>
                    <a href=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
        yield "\" 
                       style=\"display: inline-block; background-color: #0d6efd; color: white; padding: 12px 30px; text-decoration: none; border-radius: 50px; margin: 15px 0; font-weight: bold;\">
                        📩 Répondre à ce problème
                    </a>
                    <p style=\"font-size: 12px; color: #6c757d; margin: 10px 0 0; word-break: break-all;\">
                        Ou copiez ce lien : <span style=\"color: #0d6efd;\">";
        // line 171
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["link"] ?? null), "html", null, true);
        yield "</span>
                    </p>
                </div>

                <!-- Informations pratiques -->
                <div style=\"margin: 20px 0; padding: 15px; background-color: #f8f9fa; border-radius: 8px;\">
                    <h4 style=\"margin-top: 0; color: #6c757d;\">
                        ℹ️ Comment répondre ?
                    </h4>
                    <ol style=\"margin: 10px 0 0 20px; line-height: 1.8;\">
                        <li>Cliquez sur le lien ci-dessus</li>
                        <li>Consultez les détails du problème</li>
                        <li>Choisissez votre décision (accepter, accepter partiellement, refuser)</li>
                        <li>Proposez un montant de remboursement si nécessaire</li>
                        <li>Ajoutez votre réponse et vos références internes</li>
                        <li>Soumettez le formulaire</li>
                    </ol>
                </div>

                <!-- Contact -->
                <div style=\"margin: 20px 0; padding: 15px; text-align: center; border-top: 1px solid #e9ecef;\">
                    <p style=\"font-size: 12px; color: #6c757d;\">
                        Si vous avez des questions, contactez-nous à 
                        <a href=\"mailto:";
        // line 194
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("support_email", $context)) ? (Twig\Extension\CoreExtension::default(($context["support_email"] ?? null), "support@hma-market.com")) : ("support@hma-market.com")), "html", null, true);
        yield "\" style=\"color: #0d6efd;\">
                            ";
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("support_email", $context)) ? (Twig\Extension\CoreExtension::default(($context["support_email"] ?? null), "support@hma-market.com")) : ("support@hma-market.com")), "html", null, true);
        yield "
                        </a>
                    </p>
                    <p style=\"font-size: 12px; color: #6c757d;\">
                        &copy; ";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, true, false, 199), "companyName", [], "any", true, true, false, 199)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["creditNote"] ?? null), "hmaService", [], "any", false, false, false, 199), "companyName", [], "any", false, false, false, 199), "HMA Market")) : ("HMA Market")), "html", null, true);
        yield ". Tous droits réservés.
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
        return "emails/supplier_credit_note_notification.html.twig";
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
        return array (  391 => 199,  384 => 195,  380 => 194,  354 => 171,  346 => 166,  332 => 154,  324 => 148,  317 => 146,  310 => 142,  304 => 139,  300 => 137,  290 => 132,  283 => 128,  280 => 127,  278 => 126,  271 => 122,  265 => 119,  262 => 118,  260 => 117,  257 => 116,  254 => 115,  250 => 114,  242 => 108,  240 => 107,  234 => 103,  230 => 101,  226 => 99,  224 => 98,  221 => 97,  219 => 96,  216 => 95,  214 => 94,  207 => 90,  202 => 87,  198 => 85,  194 => 83,  192 => 82,  189 => 81,  187 => 80,  184 => 79,  182 => 78,  179 => 77,  177 => 76,  174 => 75,  172 => 74,  157 => 62,  150 => 58,  141 => 54,  134 => 50,  127 => 46,  120 => 42,  113 => 38,  99 => 27,  92 => 23,  82 => 16,  71 => 7,  64 => 6,  52 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "emails/supplier_credit_note_notification.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\emails\\supplier_credit_note_notification.html.twig");
    }
}
