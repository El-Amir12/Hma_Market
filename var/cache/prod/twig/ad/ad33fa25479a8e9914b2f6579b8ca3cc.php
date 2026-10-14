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

/* marketplace/pharmacy/_pharmacy_mode.html.twig */
class __TwigTemplate_8bca9b5c5f897719d0dd180efac3e333 extends Template
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
        // line 2
        yield "
";
        // line 3
        if ((($tmp = ($context["selectedPharmacyData"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 4
            yield "    ";
            // line 5
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "marketplace/pharmacy/_pharmacy_detail.html.twig", ["selectedPharmacyData" =>             // line 6
($context["selectedPharmacyData"] ?? null), "selectedCountry" =>             // line 7
($context["selectedCountry"] ?? null), "selectedCity" =>             // line 8
($context["selectedCity"] ?? null), "searchPharmacy" => ((            // line 9
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]);
            // line 10
            yield "

";
        } elseif ((        // line 12
($context["selectedCountry"] ?? null) && ($context["selectedCity"] ?? null))) {
            // line 13
            yield "    ";
            // line 14
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pharmacies"] ?? null)) > 0)) {
                // line 15
                yield "        <div class=\"section-title\">
            <i class=\"fas fa-clock me-2\" style=\"color: var(--success-color);\"></i>
            Pharmacies de garde à <span class=\"text-primary\">";
                // line 17
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCity"] ?? null), "html", null, true);
                yield "</span>
            <span class=\"badge-count\" style=\"background: #dcfce7; color: #16a34a;\">
                <i class=\"fas fa-check-circle me-1\"></i>
                ";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPharmacies"] ?? null), "html", null, true);
                yield " pharmacie(s) de garde
            </span>
        </div>

        <div class=\"pharmacy-grid\">
            ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["pharmacies"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["pharmacy"]) {
                    // line 26
                    yield "                <div class=\"pharmacy-card\">
                    <div class=\"d-flex gap-3 align-items-start\">
                        <div class=\"pharmacy-icon\" style=\"background: #dcfce7; color: #16a34a;\">
                            <i class=\"fas fa-shield-alt\"></i>
                        </div>
                        <div class=\"flex-grow-1\">
                            <div class=\"pharmacy-name\">";
                    // line 32
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "name", [], "any", false, false, false, 32), "html", null, true);
                    yield "</div>
                            <div class=\"pharmacy-address\">
                                <i class=\"fas fa-map-marker-alt\"></i> ";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "address", [], "any", false, false, false, 34), "html", null, true);
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "city", [], "any", false, false, false, 34), "html", null, true);
                    yield "
                            </div>
                            ";
                    // line 36
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 37
                        yield "                                <div class=\"pharmacy-address\">
                                    <i class=\"fas fa-phone\"></i> ";
                        // line 38
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 38), "html", null, true);
                        yield "
                                </div>
                            ";
                    }
                    // line 41
                    yield "                            <div class=\"mt-2\">
                                <span class=\"guard-badge active\" style=\"background: #dcfce7; color: #16a34a; animation: pulse-guard 2s infinite;\">
                                    <i class=\"fas fa-clock\"></i> En garde maintenant
                                </span>
                                ";
                    // line 45
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "guardDays", [], "any", true, true, false, 45) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "guardDays", [], "any", false, false, false, 45)) > 0))) {
                        // line 46
                        yield "                                    <span class=\"text-muted ms-2\" style=\"font-size: 0.75rem;\">
                                        ";
                        // line 47
                        $context["daysList"] = [];
                        // line 48
                        yield "                                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "guardDays", [], "any", false, false, false, 48));
                        foreach ($context['_seq'] as $context["dayKey"] => $context["dayData"]) {
                            // line 49
                            yield "                                            ";
                            $context["daysList"] = Twig\Extension\CoreExtension::merge(($context["daysList"] ?? null), [(((((CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "day", [], "any", false, false, false, 49) . " (") . CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "start", [], "any", false, false, false, 49)) . "-") . CoreExtension::getAttribute($this->env, $this->source, $context["dayData"], "end", [], "any", false, false, false, 49)) . ")")]);
                            // line 50
                            yield "                                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['dayKey'], $context['dayData'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        yield "                                        ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(($context["daysList"] ?? null), ", "), "html", null, true);
                        yield "
                                    </span>
                                ";
                    }
                    // line 54
                    yield "                            </div>
                            <div class=\"pharmacy-actions\">
                                <a href=\"";
                    // line 56
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 58
($context["selectedCountry"] ?? null), "city" =>                     // line 59
($context["selectedCity"] ?? null), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                     // line 60
$context["pharmacy"], "id", [], "any", false, false, false, 60), "search_pharmacy" => ((                    // line 61
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                    // line 62
                    yield "\" class=\"btn btn-sm btn-primary\">
                                    <i class=\"fas fa-info-circle me-1\"></i> Détails
                                </a>
                                <a href=\"";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                     // line 67
($context["selectedCountry"] ?? null), "city" =>                     // line 68
($context["selectedCity"] ?? null), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                     // line 69
$context["pharmacy"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                    // line 70
                    yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    <i class=\"fas fa-box me-1\"></i> Voir produits
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['pharmacy'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 78
                yield "        </div>

        ";
                // line 81
                yield "        ";
                if ((($context["totalPages"] ?? null) > 1)) {
                    // line 82
                    yield "            <div class=\"pagination-container\">
                ";
                    // line 83
                    if ((($context["currentPage"] ?? null) > 1)) {
                        // line 84
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 86
($context["selectedCountry"] ?? null), "city" =>                         // line 87
($context["selectedCity"] ?? null), "page" => (                        // line 88
($context["currentPage"] ?? null) - 1), "search_pharmacy" => ((                        // line 89
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                        // line 90
                        yield "\" class=\"page-link\">
                        <i class=\"fas fa-chevron-left\"></i>
                    </a>
                ";
                    } else {
                        // line 94
                        yield "                    <span class=\"page-link disabled\"><i class=\"fas fa-chevron-left\"></i></span>
                ";
                    }
                    // line 96
                    yield "
                ";
                    // line 97
                    $context["startPage"] = max(1, (($context["currentPage"] ?? null) - 2));
                    // line 98
                    yield "                ";
                    $context["endPage"] = min(($context["totalPages"] ?? null), (($context["currentPage"] ?? null) + 2));
                    // line 99
                    yield "                
                ";
                    // line 100
                    if ((($context["startPage"] ?? null) > 1)) {
                        // line 101
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 103
($context["selectedCountry"] ?? null), "city" =>                         // line 104
($context["selectedCity"] ?? null), "page" => 1, "search_pharmacy" => ((                        // line 106
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                        // line 107
                        yield "\" class=\"page-link\">1</a>
                    ";
                        // line 108
                        if ((($context["startPage"] ?? null) > 2)) {
                            // line 109
                            yield "                        <span class=\"page-link disabled\">…</span>
                    ";
                        }
                        // line 111
                        yield "                ";
                    }
                    // line 112
                    yield "
                ";
                    // line 113
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
                    foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                        // line 114
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 116
($context["selectedCountry"] ?? null), "city" =>                         // line 117
($context["selectedCity"] ?? null), "page" =>                         // line 118
$context["page"], "search_pharmacy" => ((                        // line 119
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                        // line 120
                        yield "\" class=\"page-link ";
                        yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                        yield "\">
                        ";
                        // line 121
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "
                    </a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 124
                    yield "
                ";
                    // line 125
                    if ((($context["endPage"] ?? null) < ($context["totalPages"] ?? null))) {
                        // line 126
                        yield "                    ";
                        if ((($context["endPage"] ?? null) < (($context["totalPages"] ?? null) - 1))) {
                            // line 127
                            yield "                        <span class=\"page-link disabled\">…</span>
                    ";
                        }
                        // line 129
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 131
($context["selectedCountry"] ?? null), "city" =>                         // line 132
($context["selectedCity"] ?? null), "page" =>                         // line 133
($context["totalPages"] ?? null), "search_pharmacy" => ((                        // line 134
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                        // line 135
                        yield "\" class=\"page-link\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                        yield "</a>
                ";
                    }
                    // line 137
                    yield "
                ";
                    // line 138
                    if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                        // line 139
                        yield "                    <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                         // line 141
($context["selectedCountry"] ?? null), "city" =>                         // line 142
($context["selectedCity"] ?? null), "page" => (                        // line 143
($context["currentPage"] ?? null) + 1), "search_pharmacy" => ((                        // line 144
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                        // line 145
                        yield "\" class=\"page-link\">
                        <i class=\"fas fa-chevron-right\"></i>
                    </a>
                ";
                    } else {
                        // line 149
                        yield "                    <span class=\"page-link disabled\"><i class=\"fas fa-chevron-right\"></i></span>
                ";
                    }
                    // line 151
                    yield "
                <span class=\"page-info\">Page ";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
                    yield " sur ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                    yield "</span>
            </div>
        ";
                }
                // line 155
                yield "
    ";
            } else {
                // line 157
                yield "        <div class=\"empty-state\">
            <i class=\"fas fa-clock\" style=\"color: #f59e0b;\"></i>
            <h4>Aucune pharmacie de garde trouvée</h4>
            <p class=\"text-muted\">
                ";
                // line 161
                if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 162
                    yield "                    Aucune pharmacie de garde ne correspond à \"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchPharmacy"] ?? null), "html", null, true);
                    yield "\" dans cette ville.
                ";
                } else {
                    // line 164
                    yield "                    Aucune pharmacie de garde disponible dans cette ville pour le moment.
                ";
                }
                // line 166
                yield "            </p>
            <div class=\"mt-3\">
                <small class=\"text-muted d-block mb-2\">
                    <i class=\"fas fa-info-circle me-1\"></i>
                    Les pharmacies de garde sont affichées automatiquement en fonction de l'heure actuelle.
                </small>
                ";
                // line 172
                if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 173
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 175
($context["selectedCountry"] ?? null), "city" =>                     // line 176
($context["selectedCity"] ?? null)]), "html", null, true);
                    // line 177
                    yield "\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-undo me-1\"></i> Voir toutes les pharmacies de garde
                    </a>
                ";
                } else {
                    // line 181
                    yield "                    <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy"]);
                    yield "\" class=\"btn btn-primary mt-2\">
                        <i class=\"fas fa-undo me-1\"></i> Nouvelle recherche
                    </a>
                ";
                }
                // line 185
                yield "            </div>
        </div>
    ";
            }
            // line 188
            yield "
";
        } else {
            // line 190
            yield "    ";
            // line 191
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-search-location\"></i>
        <h4>Sélectionnez un pays et une ville</h4>
        <p class=\"text-muted\">Choisissez un pays puis une ville pour voir les pharmacies de garde disponibles.</p>
    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/_pharmacy_mode.html.twig";
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
        return array (  395 => 191,  393 => 190,  389 => 188,  384 => 185,  376 => 181,  370 => 177,  368 => 176,  367 => 175,  365 => 173,  363 => 172,  355 => 166,  351 => 164,  345 => 162,  343 => 161,  337 => 157,  333 => 155,  325 => 152,  322 => 151,  318 => 149,  312 => 145,  310 => 144,  309 => 143,  308 => 142,  307 => 141,  305 => 139,  303 => 138,  300 => 137,  294 => 135,  292 => 134,  291 => 133,  290 => 132,  289 => 131,  287 => 129,  283 => 127,  280 => 126,  278 => 125,  275 => 124,  266 => 121,  261 => 120,  259 => 119,  258 => 118,  257 => 117,  256 => 116,  254 => 114,  250 => 113,  247 => 112,  244 => 111,  240 => 109,  238 => 108,  235 => 107,  233 => 106,  232 => 104,  231 => 103,  229 => 101,  227 => 100,  224 => 99,  221 => 98,  219 => 97,  216 => 96,  212 => 94,  206 => 90,  204 => 89,  203 => 88,  202 => 87,  201 => 86,  199 => 84,  197 => 83,  194 => 82,  191 => 81,  187 => 78,  174 => 70,  172 => 69,  171 => 68,  170 => 67,  169 => 65,  164 => 62,  162 => 61,  161 => 60,  160 => 59,  159 => 58,  158 => 56,  154 => 54,  147 => 51,  141 => 50,  138 => 49,  133 => 48,  131 => 47,  128 => 46,  126 => 45,  120 => 41,  114 => 38,  111 => 37,  109 => 36,  102 => 34,  97 => 32,  89 => 26,  85 => 25,  77 => 20,  71 => 17,  67 => 15,  64 => 14,  62 => 13,  60 => 12,  56 => 10,  54 => 9,  53 => 8,  52 => 7,  51 => 6,  49 => 5,  47 => 4,  45 => 3,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/_pharmacy_mode.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_pharmacy_mode.html.twig");
    }
}
