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

/* marketplace/pharmacy/_pharmacy_list.html.twig */
class __TwigTemplate_139981766e8ca75b5e6616721225688e extends Template
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
<style>
    .pharmacy-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 1.5rem;
    }

    .pharmacy-card {
        background: white;
        border-radius: 16px;
        padding: 1.5rem;
        border: 1px solid var(--gray-200);
        transition: all 0.3s ease;
        cursor: pointer;
        height: 100%;
        position: relative;
        overflow: hidden;
    }

    .pharmacy-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color), #667eea);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .pharmacy-card:hover::before {
        opacity: 1;
    }

    .pharmacy-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        border-color: var(--primary-color);
    }

    .pharmacy-card .pharmacy-icon {
        width: 56px;
        height: 56px;
        border-radius: 14px;
        background: var(--primary-light);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--primary-color);
        flex-shrink: 0;
    }

    .pharmacy-card .pharmacy-name {
        font-weight: 700;
        font-size: 1.1rem;
        color: var(--dark-color);
        margin-bottom: 0.25rem;
    }

    .pharmacy-card .pharmacy-address {
        font-size: 0.85rem;
        color: var(--gray-500);
        margin-bottom: 0.2rem;
    }

    .pharmacy-card .pharmacy-address i {
        width: 18px;
        color: #94a3b8;
    }

    .pharmacy-card .pharmacy-actions {
        margin-top: 0.75rem;
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .pharmacy-card .pharmacy-actions .btn-sm {
        border-radius: 50px;
        font-size: 0.75rem;
        padding: 0.25rem 0.8rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .guard-badge {
        background: #dcfce7;
        color: #16a34a;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-size: 0.7rem;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
    }

    .pagination-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 2rem;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .pagination-container .page-link {
        border-radius: 8px;
        padding: 0.5rem 1rem;
        border: 1px solid var(--gray-200);
        color: var(--dark-color);
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        min-width: 40px;
        justify-content: center;
    }

    .pagination-container .page-link:hover {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        transform: translateY(-2px);
    }

    .pagination-container .page-link.active {
        background: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
        font-weight: 700;
    }

    .pagination-container .page-link.disabled {
        opacity: 0.5;
        cursor: not-allowed;
        pointer-events: none;
    }

    .pagination-container .page-info {
        color: var(--gray-500);
        font-size: 0.85rem;
        padding: 0 0.5rem;
    }

    .section-title {
        font-size: 1.2rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.5rem;
    }

    .section-title .badge-count {
        background: var(--gray-200);
        color: var(--gray-500);
        font-weight: 600;
        padding: 0.2rem 0.8rem;
        border-radius: 50px;
        font-size: 0.85rem;
    }

    .section-title i {
        color: var(--primary-color);
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        border: 2px dashed var(--gray-200);
    }

    .empty-state i {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }

    .empty-state h5 {
        color: var(--dark-color);
        font-weight: 700;
    }

    .empty-state .text-muted {
        color: var(--gray-500);
    }

    .empty-state .btn-primary {
        border-radius: 50px;
        padding: 0.6rem 2rem;
    }

    @media (max-width: 768px) {
        .pharmacy-grid { grid-template-columns: 1fr; }
        .pharmacy-card .pharmacy-actions { flex-direction: column; }
        .pharmacy-card .pharmacy-actions .btn-sm { width: 100%; text-align: center; }
        .pagination-container .page-link { padding: 0.4rem 0.8rem; font-size: 0.85rem; }
    }
</style>

";
        // line 214
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["pharmacies"] ?? null)) > 0)) {
            // line 215
            yield "    <div class=\"section-title\">
        <i class=\"fas fa-store me-2\"></i>
        Pharmacies à <span class=\"text-primary\">";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["selectedCity"] ?? null), "html", null, true);
            yield "</span>
        <span class=\"badge-count\">
            ";
            // line 219
            if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 220
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPharmacies"] ?? null), "html", null, true);
                yield " résultat(s) pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchPharmacy"] ?? null), "html", null, true);
                yield "\"
            ";
            } else {
                // line 222
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPharmacies"] ?? null), "html", null, true);
                yield " pharmacie(s)
            ";
            }
            // line 224
            yield "        </span>
    </div>

    <div class=\"pharmacy-grid\">
        ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pharmacies"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pharmacy"]) {
                // line 229
                yield "            <div class=\"pharmacy-card\">
                <div class=\"d-flex gap-3 align-items-start\">
                    <div class=\"pharmacy-icon\">
                        <i class=\"fas fa-hospital\"></i>
                    </div>
                    <div class=\"flex-grow-1\">
                        <div class=\"pharmacy-name\">";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "name", [], "any", false, false, false, 235), "html", null, true);
                yield "</div>
                        <div class=\"pharmacy-address\">
                            <i class=\"fas fa-map-marker-alt\"></i> ";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "address", [], "any", false, false, false, 237), "html", null, true);
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "city", [], "any", false, false, false, 237), "html", null, true);
                yield "
                        </div>
                        ";
                // line 239
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 240
                    yield "                            <div class=\"pharmacy-address\">
                                <i class=\"fas fa-phone\"></i> ";
                    // line 241
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pharmacy"], "phone", [], "any", false, false, false, 241), "html", null, true);
                    yield "
                            </div>
                        ";
                }
                // line 244
                yield "                        <div class=\"mt-2\">
                            <span class=\"guard-badge\">
                                <i class=\"fas fa-clock\"></i> Garde 24/7
                            </span>
                        </div>
                        <div class=\"pharmacy-actions\">
                            <a href=\"";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                 // line 252
($context["selectedCountry"] ?? null), "city" =>                 // line 253
($context["selectedCity"] ?? null), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                 // line 254
$context["pharmacy"], "id", [], "any", false, false, false, 254), "search_pharmacy" => ((                // line 255
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                // line 256
                yield "\" class=\"btn btn-sm btn-primary\">
                                <i class=\"fas fa-info-circle me-1\"></i> Détails
                            </a>
                            <a href=\"";
                // line 259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "product", "country" =>                 // line 261
($context["selectedCountry"] ?? null), "city" =>                 // line 262
($context["selectedCity"] ?? null), "pharmacy" => CoreExtension::getAttribute($this->env, $this->source,                 // line 263
$context["pharmacy"], "id", [], "any", false, false, false, 263)]), "html", null, true);
                // line 264
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
            // line 272
            yield "    </div>

    ";
            // line 275
            yield "    ";
            if ((($context["totalPages"] ?? null) > 1)) {
                // line 276
                yield "        <div class=\"pagination-container\">
            ";
                // line 277
                if ((($context["currentPage"] ?? null) > 1)) {
                    // line 278
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 280
($context["selectedCountry"] ?? null), "city" =>                     // line 281
($context["selectedCity"] ?? null), "page" => (                    // line 282
($context["currentPage"] ?? null) - 1), "search_pharmacy" => ((                    // line 283
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                    // line 284
                    yield "\" class=\"page-link\">
                    <i class=\"fas fa-chevron-left\"></i>
                </a>
            ";
                } else {
                    // line 288
                    yield "                <span class=\"page-link disabled\">
                    <i class=\"fas fa-chevron-left\"></i>
                </span>
            ";
                }
                // line 292
                yield "
            ";
                // line 293
                $context["startPage"] = max(1, (($context["currentPage"] ?? null) - 2));
                // line 294
                yield "            ";
                $context["endPage"] = min(($context["totalPages"] ?? null), (($context["currentPage"] ?? null) + 2));
                // line 295
                yield "            
            ";
                // line 296
                if ((($context["startPage"] ?? null) > 1)) {
                    // line 297
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 299
($context["selectedCountry"] ?? null), "city" =>                     // line 300
($context["selectedCity"] ?? null), "page" => 1, "search_pharmacy" => ((                    // line 302
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                    // line 303
                    yield "\" class=\"page-link\">1</a>
                ";
                    // line 304
                    if ((($context["startPage"] ?? null) > 2)) {
                        // line 305
                        yield "                    <span class=\"page-link disabled\">…</span>
                ";
                    }
                    // line 307
                    yield "            ";
                }
                // line 308
                yield "
            ";
                // line 309
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(($context["startPage"] ?? null), ($context["endPage"] ?? null)));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 310
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 312
($context["selectedCountry"] ?? null), "city" =>                     // line 313
($context["selectedCity"] ?? null), "page" =>                     // line 314
$context["page"], "search_pharmacy" => ((                    // line 315
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                    // line 316
                    yield "\" class=\"page-link ";
                    yield ((($context["page"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                    yield "\">
                    ";
                    // line 317
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                    yield "
                </a>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 320
                yield "
            ";
                // line 321
                if ((($context["endPage"] ?? null) < ($context["totalPages"] ?? null))) {
                    // line 322
                    yield "                ";
                    if ((($context["endPage"] ?? null) < (($context["totalPages"] ?? null) - 1))) {
                        // line 323
                        yield "                    <span class=\"page-link disabled\">…</span>
                ";
                    }
                    // line 325
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 327
($context["selectedCountry"] ?? null), "city" =>                     // line 328
($context["selectedCity"] ?? null), "page" =>                     // line 329
($context["totalPages"] ?? null), "search_pharmacy" => ((                    // line 330
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                    // line 331
                    yield "\" class=\"page-link\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                    yield "</a>
            ";
                }
                // line 333
                yield "
            ";
                // line 334
                if ((($context["currentPage"] ?? null) < ($context["totalPages"] ?? null))) {
                    // line 335
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                     // line 337
($context["selectedCountry"] ?? null), "city" =>                     // line 338
($context["selectedCity"] ?? null), "page" => (                    // line 339
($context["currentPage"] ?? null) + 1), "search_pharmacy" => ((                    // line 340
array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))]), "html", null, true);
                    // line 341
                    yield "\" class=\"page-link\">
                    <i class=\"fas fa-chevron-right\"></i>
                </a>
            ";
                } else {
                    // line 345
                    yield "                <span class=\"page-link disabled\">
                    <i class=\"fas fa-chevron-right\"></i>
                </span>
            ";
                }
                // line 349
                yield "
            <span class=\"page-info\">
                Page ";
                // line 351
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentPage"] ?? null), "html", null, true);
                yield " sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["totalPages"] ?? null), "html", null, true);
                yield "
            </span>
        </div>
    ";
            }
            // line 355
            yield "
";
        } else {
            // line 357
            yield "    <div class=\"empty-state\">
        <i class=\"fas fa-hospital\"></i>
        <h5>Aucune pharmacie trouvée</h5>
        <p class=\"text-muted\">
            ";
            // line 361
            if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 362
                yield "                Aucune pharmacie ne correspond à \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["searchPharmacy"] ?? null), "html", null, true);
                yield "\" dans cette ville.
            ";
            } else {
                // line 364
                yield "                Aucune pharmacie disponible dans cette ville pour le moment.
            ";
            }
            // line 366
            yield "        </p>
        ";
            // line 367
            if ((($tmp = ((array_key_exists("searchPharmacy", $context)) ? (Twig\Extension\CoreExtension::default(($context["searchPharmacy"] ?? null), "")) : (""))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 368
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy", "country" =>                 // line 370
($context["selectedCountry"] ?? null), "city" =>                 // line 371
($context["selectedCity"] ?? null)]), "html", null, true);
                // line 372
                yield "\" class=\"btn btn-primary mt-3\">
                <i class=\"fas fa-undo me-1\"></i>Voir toutes les pharmacies
            </a>
        ";
            } else {
                // line 376
                yield "            <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("marketplace_pharmacy_search", ["mode" => "pharmacy"]);
                yield "\" 
               class=\"btn btn-primary mt-3\">
                <i class=\"fas fa-undo me-1\"></i>Nouvelle recherche
            </a>
        ";
            }
            // line 381
            yield "    </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "marketplace/pharmacy/_pharmacy_list.html.twig";
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
        return array (  557 => 381,  548 => 376,  542 => 372,  540 => 371,  539 => 370,  537 => 368,  535 => 367,  532 => 366,  528 => 364,  522 => 362,  520 => 361,  514 => 357,  510 => 355,  501 => 351,  497 => 349,  491 => 345,  485 => 341,  483 => 340,  482 => 339,  481 => 338,  480 => 337,  478 => 335,  476 => 334,  473 => 333,  467 => 331,  465 => 330,  464 => 329,  463 => 328,  462 => 327,  460 => 325,  456 => 323,  453 => 322,  451 => 321,  448 => 320,  439 => 317,  434 => 316,  432 => 315,  431 => 314,  430 => 313,  429 => 312,  427 => 310,  423 => 309,  420 => 308,  417 => 307,  413 => 305,  411 => 304,  408 => 303,  406 => 302,  405 => 300,  404 => 299,  402 => 297,  400 => 296,  397 => 295,  394 => 294,  392 => 293,  389 => 292,  383 => 288,  377 => 284,  375 => 283,  374 => 282,  373 => 281,  372 => 280,  370 => 278,  368 => 277,  365 => 276,  362 => 275,  358 => 272,  345 => 264,  343 => 263,  342 => 262,  341 => 261,  340 => 259,  335 => 256,  333 => 255,  332 => 254,  331 => 253,  330 => 252,  329 => 250,  321 => 244,  315 => 241,  312 => 240,  310 => 239,  303 => 237,  298 => 235,  290 => 229,  286 => 228,  280 => 224,  274 => 222,  266 => 220,  264 => 219,  259 => 217,  255 => 215,  253 => 214,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "marketplace/pharmacy/_pharmacy_list.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\marketplace\\pharmacy\\_pharmacy_list.html.twig");
    }
}
