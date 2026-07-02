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

/* invoice/pdf.html.twig */
class __TwigTemplate_1c9e920d58bf024bc1fa712f348a0628 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invoice/pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Facture ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 5, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'DejaVu Sans', sans-serif;
            background: #f5f7fa;
            padding: 20px;
        }
        .invoice-box {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header {
            background: #667eea;
            color: white;
            padding: 20px 30px;
            overflow: hidden;
        }
        .header-left {
            float: left;
            width: 60%;
        }
        .header-right {
            float: right;
            width: 40%;
            text-align: right;
        }
        .logo {
            float: left;
            margin-right: 15px;
        }
        .logo img {
            width: 70px;
            height: 70px;
            border-radius: 8px;
            background: white;
            padding: 5px;
        }
        .company-details {
            float: left;
        }
        .company-details h1 {
            margin: 0;
            font-size: 1.8rem;
        }
        .company-details p {
            margin: 5px 0 0;
            opacity: 0.9;
        }
        .invoice-title h2 {
            margin: 0;
            font-size: 2.2rem;
        }
        .invoice-title p {
            margin: 5px 0 0;
            opacity: 0.9;
        }
        .billing-info {
            padding: 20px 30px;
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            overflow: hidden;
        }
        .billing-address {
            float: left;
            width: 50%;
        }
        .invoice-dates {
            float: right;
            width: 50%;
            text-align: right;
        }
        .billing-address h3, .invoice-dates h3 {
            margin: 0 0 10px;
            font-size: 1.1rem;
            color: #475569;
        }
        .billing-address p, .invoice-dates p {
            margin: 5px 0;
            color: #334155;
        }
        .items-table {
            padding: 20px 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #667eea;
            color: white;
            padding: 10px;
            text-align: left;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #e2e8f0;
        }
        .text-right {
            text-align: right;
        }
        .summary {
            padding: 20px 30px;
            text-align: right;
        }
        .summary-item {
            margin: 5px 0;
        }
        .summary-total {
            font-size: 1.4rem;
            font-weight: bold;
            border-top: 2px dashed #cbd5e1;
            padding-top: 10px;
        }
        .footer {
            background: #1e293b;
            color: white;
            padding: 20px 30px;
            text-align: center;
        }
        .footer p {
            margin: 5px 0;
            opacity: 0.9;
        }
        .clearfix::after {
            content: \"\";
            clear: both;
            display: table;
        }
        @media print {
            body { background: white; padding: 0; }
            .invoice-box { box-shadow: none; }
        }
    </style>
</head>
<body>
    <div class=\"invoice-box\">
        <!-- En-tête -->
        <div class=\"header clearfix\">
            <div class=\"header-left\">
                <div class=\"company-details\">
                    <h1>";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 154, $this->source); })()), "hmaService", [], "any", false, false, false, 154), "companyName", [], "any", false, false, false, 154), "html", null, true);
        yield "</h1>
                    <p>";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 155, $this->source); })()), "hmaService", [], "any", false, false, false, 155), "email", [], "any", false, false, false, 155), "html", null, true);
        yield "</p>
                    ";
        // line 156
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 156, $this->source); })()), "hmaService", [], "any", false, false, false, 156), "phone", [], "any", false, false, false, 156)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 157
            yield "                        <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 157, $this->source); })()), "hmaService", [], "any", false, false, false, 157), "phone", [], "any", false, false, false, 157), "html", null, true);
            yield "</p>
                    ";
        }
        // line 159
        yield "                </div>
            </div>
            <div class=\"header-right\">
                <div class=\"invoice-title\">
                    <h2>";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 163, $this->source); })()), "invoiceNumber", [], "any", false, false, false, 163), "html", null, true);
        yield "</h2>
                    <p>Facture</p>
                </div>
            </div>
        </div>

        <!-- Informations facturation -->
        <div class=\"billing-info clearfix\">
            <div class=\"billing-address\">
                <h3>Facturé à</h3>
                <p><strong>";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 173, $this->source); })()), "hmaService", [], "any", false, false, false, 173), "companyName", [], "any", false, false, false, 173), "html", null, true);
        yield "</strong></p>
                <p>";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 174, $this->source); })()), "hmaService", [], "any", false, false, false, 174), "address", [], "any", false, false, false, 174), "html", null, true);
        yield "</p>
                <p>";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 175, $this->source); })()), "hmaService", [], "any", false, false, false, 175), "city", [], "any", false, false, false, 175), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 175, $this->source); })()), "hmaService", [], "any", false, false, false, 175), "country", [], "any", false, false, false, 175), "html", null, true);
        yield "</p>
            </div>
            <div class=\"invoice-dates\">
                <h3>Détails</h3>
                <p><strong>Période :</strong> du ";
        // line 179
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 179, $this->source); })()), "periodStart", [], "any", false, false, false, 179), "d/m/Y"), "html", null, true);
        yield " au ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 179, $this->source); })()), "periodEnd", [], "any", false, false, false, 179), "d/m/Y"), "html", null, true);
        yield "</p>
                <p><strong>Échéance :</strong> ";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 180, $this->source); })()), "dueDate", [], "any", false, false, false, 180), "d/m/Y"), "html", null, true);
        yield "</p>
                <p><strong>Statut :</strong> ";
        // line 181
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 181, $this->source); })()), "status", [], "any", false, false, false, 181), "html", null, true);
        yield "</p>
            </div>
        </div>

        <!-- Détails -->
        <div class=\"items-table\">
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th class=\"text-right\">Montant (FCFA)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Abonnement ";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 196, $this->source); })()), "subscription", [], "any", false, false, false, 196), "subscriptionPlan", [], "any", false, false, false, 196), "displayName", [], "any", false, false, false, 196), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 196, $this->source); })()), "subscription", [], "any", false, false, false, 196), "billingPeriod", [], "any", false, false, false, 196), "html", null, true);
        yield "</td>
                        <td class=\"text-right\">";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 197, $this->source); })()), "amountFcfa", [], "any", false, false, false, 197), 0, ",", " "), "html", null, true);
        yield "</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Résumé -->
        <div class=\"summary\">
            <div class=\"summary-item\">Sous-total : ";
        // line 205
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 205, $this->source); })()), "amountFcfa", [], "any", false, false, false, 205), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
            <div class=\"summary-total\">Total : ";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 206, $this->source); })()), "amountFcfa", [], "any", false, false, false, 206), 0, ",", " "), "html", null, true);
        yield " FCFA</div>
        </div>

        <!-- Footer -->
        <div class=\"footer\">
            <p>Merci pour votre confiance. Pour toute question, contactez notre support.</p>
            <p>";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 212, $this->source); })()), "hmaService", [], "any", false, false, false, 212), "email", [], "any", false, false, false, 212), "html", null, true);
        yield " ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 212, $this->source); })()), "hmaService", [], "any", false, false, false, 212), "phone", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invoice"]) || array_key_exists("invoice", $context) ? $context["invoice"] : (function () { throw new RuntimeError('Variable "invoice" does not exist.', 212, $this->source); })()), "hmaService", [], "any", false, false, false, 212), "phone", [], "any", false, false, false, 212), "html", null, true);
        }
        yield "</p>
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
        return "invoice/pdf.html.twig";
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
        return array (  316 => 212,  307 => 206,  303 => 205,  292 => 197,  286 => 196,  268 => 181,  264 => 180,  258 => 179,  249 => 175,  245 => 174,  241 => 173,  228 => 163,  222 => 159,  216 => 157,  214 => 156,  210 => 155,  206 => 154,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Facture {{ invoice.invoiceNumber }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'DejaVu Sans', sans-serif;
            background: #f5f7fa;
            padding: 20px;
        }
        .invoice-box {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        .header {
            background: #667eea;
            color: white;
            padding: 20px 30px;
            overflow: hidden;
        }
        .header-left {
            float: left;
            width: 60%;
        }
        .header-right {
            float: right;
            width: 40%;
            text-align: right;
        }
        .logo {
            float: left;
            margin-right: 15px;
        }
        .logo img {
            width: 70px;
            height: 70px;
            border-radius: 8px;
            background: white;
            padding: 5px;
        }
        .company-details {
            float: left;
        }
        .company-details h1 {
            margin: 0;
            font-size: 1.8rem;
        }
        .company-details p {
            margin: 5px 0 0;
            opacity: 0.9;
        }
        .invoice-title h2 {
            margin: 0;
            font-size: 2.2rem;
        }
        .invoice-title p {
            margin: 5px 0 0;
            opacity: 0.9;
        }
        .billing-info {
            padding: 20px 30px;
            background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
            overflow: hidden;
        }
        .billing-address {
            float: left;
            width: 50%;
        }
        .invoice-dates {
            float: right;
            width: 50%;
            text-align: right;
        }
        .billing-address h3, .invoice-dates h3 {
            margin: 0 0 10px;
            font-size: 1.1rem;
            color: #475569;
        }
        .billing-address p, .invoice-dates p {
            margin: 5px 0;
            color: #334155;
        }
        .items-table {
            padding: 20px 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #667eea;
            color: white;
            padding: 10px;
            text-align: left;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #e2e8f0;
        }
        .text-right {
            text-align: right;
        }
        .summary {
            padding: 20px 30px;
            text-align: right;
        }
        .summary-item {
            margin: 5px 0;
        }
        .summary-total {
            font-size: 1.4rem;
            font-weight: bold;
            border-top: 2px dashed #cbd5e1;
            padding-top: 10px;
        }
        .footer {
            background: #1e293b;
            color: white;
            padding: 20px 30px;
            text-align: center;
        }
        .footer p {
            margin: 5px 0;
            opacity: 0.9;
        }
        .clearfix::after {
            content: \"\";
            clear: both;
            display: table;
        }
        @media print {
            body { background: white; padding: 0; }
            .invoice-box { box-shadow: none; }
        }
    </style>
</head>
<body>
    <div class=\"invoice-box\">
        <!-- En-tête -->
        <div class=\"header clearfix\">
            <div class=\"header-left\">
                <div class=\"company-details\">
                    <h1>{{ invoice.hmaService.companyName }}</h1>
                    <p>{{ invoice.hmaService.email }}</p>
                    {% if invoice.hmaService.phone %}
                        <p>{{ invoice.hmaService.phone }}</p>
                    {% endif %}
                </div>
            </div>
            <div class=\"header-right\">
                <div class=\"invoice-title\">
                    <h2>{{ invoice.invoiceNumber }}</h2>
                    <p>Facture</p>
                </div>
            </div>
        </div>

        <!-- Informations facturation -->
        <div class=\"billing-info clearfix\">
            <div class=\"billing-address\">
                <h3>Facturé à</h3>
                <p><strong>{{ invoice.hmaService.companyName }}</strong></p>
                <p>{{ invoice.hmaService.address }}</p>
                <p>{{ invoice.hmaService.city }} - {{ invoice.hmaService.country }}</p>
            </div>
            <div class=\"invoice-dates\">
                <h3>Détails</h3>
                <p><strong>Période :</strong> du {{ invoice.periodStart|date('d/m/Y') }} au {{ invoice.periodEnd|date('d/m/Y') }}</p>
                <p><strong>Échéance :</strong> {{ invoice.dueDate|date('d/m/Y') }}</p>
                <p><strong>Statut :</strong> {{ invoice.status }}</p>
            </div>
        </div>

        <!-- Détails -->
        <div class=\"items-table\">
            <table>
                <thead>
                    <tr>
                        <th>Description</th>
                        <th class=\"text-right\">Montant (FCFA)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Abonnement {{ invoice.subscription.subscriptionPlan.displayName }} - {{ invoice.subscription.billingPeriod }}</td>
                        <td class=\"text-right\">{{ invoice.amountFcfa|number_format(0, ',', ' ') }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Résumé -->
        <div class=\"summary\">
            <div class=\"summary-item\">Sous-total : {{ invoice.amountFcfa|number_format(0, ',', ' ') }} FCFA</div>
            <div class=\"summary-total\">Total : {{ invoice.amountFcfa|number_format(0, ',', ' ') }} FCFA</div>
        </div>

        <!-- Footer -->
        <div class=\"footer\">
            <p>Merci pour votre confiance. Pour toute question, contactez notre support.</p>
            <p>{{ invoice.hmaService.email }} {% if invoice.hmaService.phone %} - {{ invoice.hmaService.phone }}{% endif %}</p>
        </div>
    </div>
</body>
</html>", "invoice/pdf.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\invoice\\pdf.html.twig");
    }
}
