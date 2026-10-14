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

/* admin/product/show.html.twig */
class __TwigTemplate_fa2d57a3423054ef906c211edd518cc9 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        yield " - Détails du produit";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
        yield "<div class=\"container-fluid px-4\">
    <!-- En-tête avec navigation -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <div>
            <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\">
                        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"text-decoration-none\">
                            <i class=\"fas fa-boxes me-1\"></i> Produits
                        </a>
                    </li>
                    <li class=\"breadcrumb-item active\" aria-current=\"page\">
                        ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 20)), "truncate", [30, "..."], "method", false, false, false, 20), "html", null, true);
        yield "
                    </li>
                </ol>
            </nav>
            
            <div class=\"d-flex align-items-center\">
                <a href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_index");
        yield "\" class=\"btn btn-outline-secondary me-3 btn-hover-scale\">
                    <i class=\"fas fa-arrow-left me-1\"></i> Retour
                </a>
                <h1 class=\"h3 mb-0 text-gray-800 slide-in-left\">
                    <i class=\"fas fa-box me-2\"></i> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 30), "html", null, true);
        yield "
                </h1>
            </div>
        </div>
        <div class=\"float-up\">
            <i class=\"fas fa-box fa-3x text-primary opacity-75\"></i>
        </div>
    </div>

    <!-- Stats rapides -->
    <div class=\"row mb-4\">
        <!-- Carte 1 : Stock actuel (toujours visible) -->
        <div class=\"";
        // line 42
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "col-xl-4 col-md-6";
        } else {
            yield "col-xl-3 col-md-6";
        }
        yield " mb-3\">
            <div class=\"card border-0 bg-primary bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Stock actuel</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentStock"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 49), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "
                            </h3>
                        </div>
                        <div class=\"bg-primary bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-boxes fa-lg text-white\"></i>
                        </div>
                    </div>
                    ";
        // line 56
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 56) > 0)) {
            // line 57
            yield "                        <small class=\"text-white-50\">
                            <i class=\"fas fa-exclamation-circle me-1\"></i>
                            Seuil d'alerte: ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 59), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 59)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 59), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "
                            ";
            // line 60
            if ((($context["currentStock"] ?? null) <= CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 60))) {
                // line 61
                yield "                                <span class=\"badge bg-warning text-dark ms-2\">
                                    <i class=\"fas fa-exclamation-triangle me-1\"></i> Stock faible
                                </span>
                            ";
            }
            // line 65
            yield "                        </small>
                    ";
        }
        // line 67
        yield "                </div>
            </div>
        </div>
        
        <!-- Carte 2 : Valeur stock (basée sur les lots réels + stock initial) -->
        <div class=\"";
        // line 72
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "col-xl-4 col-md-6";
        } else {
            yield "col-xl-3 col-md-6";
        }
        yield " mb-3\">
            <div class=\"card border-0 bg-success bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Valeur stock</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                ";
        // line 79
        $context["totalStockValue"] = 0;
        // line 80
        yield "                                
                                ";
        // line 82
        yield "                                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 82) > 0)) {
            // line 83
            yield "                                    ";
            $context["totalStockValue"] = (($context["totalStockValue"] ?? null) + (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 83) * CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 83)));
            // line 84
            yield "                                ";
        }
        // line 85
        yield "                                
                                ";
        // line 87
        yield "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 88
            yield "                                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 88) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 88) > 0))) {
                // line 89
                yield "                                        ";
                $context["totalStockValue"] = (($context["totalStockValue"] ?? null) + (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 89) * CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 89)));
                // line 90
                yield "                                    ";
            }
            // line 91
            yield "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "                                
                                ";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["totalStockValue"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 93)), "html", null, true);
        yield "
                            </h3>
                        </div>
                        <div class=\"bg-success bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-coins fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-calculator me-1\"></i>
                        ";
        // line 102
        $context["activeBatches"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 102), function ($__b__) use ($context, $macros) { $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "isActive", [], "any", false, false, false, 102) && (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "currentQuantity", [], "any", false, false, false, 102) > 0)); });
        // line 103
        yield "                        ";
        if (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 103) > 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeBatches"] ?? null)) > 0))) {
            // line 104
            yield "                            Stock initial + ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeBatches"] ?? null)), "html", null, true);
            yield " lot(s) actif(s)
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 105
($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 105) > 0)) {
            // line 106
            yield "                            Stock initial uniquement
                        ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 107
($context["activeBatches"] ?? null)) > 0)) {
            // line 108
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeBatches"] ?? null)), "html", null, true);
            yield " lot(s) actif(s)
                        ";
        } else {
            // line 110
            yield "                            Aucun stock enregistré
                        ";
        }
        // line 112
        yield "                        ";
        if ((($context["companyType"] ?? null) == "restaurant")) {
            // line 113
            yield "                            <span class=\"d-block mt-1\">
                                <i class=\"fas fa-info-circle me-1\"></i>
                                Calculé à partir des prix d'achat
                            </span>
                        ";
        }
        // line 118
        yield "                    </small>
                </div>
            </div>
        </div>
        
        <!-- Carte 3 : Marge (uniquement pour non restaurant) -->
        ";
        // line 124
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 125
            yield "        <div class=\"col-xl-3 col-md-6 mb-3\">
            <div class=\"card border-0 bg-info bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Marge</h6>
                            <h3 class=\"mb-0 fw-bold text-white\">
                                ";
            // line 132
            $context["margin"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 132) - CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 132));
            // line 133
            yield "                                ";
            $context["marginPercentage"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 133) > 0)) ? (Twig\Extension\CoreExtension::round(((($context["margin"] ?? null) / CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 133)) * 100), 1)) : (0));
            // line 134
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["marginPercentage"] ?? null), "html", null, true);
            yield "%
                            </h3>
                        </div>
                        <div class=\"bg-info bg-opacity-25 p-3 rounded\">
                            <i class=\"fas fa-chart-line fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-arrow-up me-1\"></i>
                        ";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(($context["margin"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 143)), "html", null, true);
            yield " par unité
                    </small>
                </div>
            </div>
        </div>
        ";
        }
        // line 149
        yield "        
        <!-- Carte 4 : Statut et Visibilité -->
        <div class=\"";
        // line 151
        if ((($context["companyType"] ?? null) == "restaurant")) {
            yield "col-xl-4 col-md-6";
        } else {
            yield "col-xl-3 col-md-6";
        }
        yield " mb-3\">
            <div class=\"card border-0 ";
        // line 152
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 152)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " bg-opacity-10 shadow-sm h-100\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"flex-grow-1\">
                            <h6 class=\"text-white-50 mb-1\">Statut</h6>
                            <div>
                                <span class=\"badge ";
        // line 158
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 158)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " px-3 py-2\">
                                    ";
        // line 159
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 159)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("ACTIF") : ("INACTIF"));
        yield "
                                </span>
                                ";
        // line 162
        yield "                                ";
        if ((($context["companyType"] ?? null) == "pharmacy")) {
            // line 163
            yield "                                    <span class=\"badge ";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "companyPublic", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-primary") : ("bg-secondary"));
            yield " px-3 py-2 ms-1\">
                                        <i class=\"fas ";
            // line 164
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "companyPublic", [], "any", false, false, false, 164)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-eye") : ("fa-eye-slash"));
            yield " me-1\"></i>
                                        ";
            // line 165
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "companyPublic", [], "any", false, false, false, 165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Visible") : ("Masqué"));
            yield "
                                    </span>
                                ";
        }
        // line 168
        yield "                            </div>
                        </div>
                        <div class=\"";
        // line 170
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 170)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-danger"));
        yield " bg-opacity-25 p-3 rounded\">
                            <i class=\"fas ";
        // line 171
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 171)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
        yield " fa-lg text-white\"></i>
                        </div>
                    </div>
                    <small class=\"text-white-50\">
                        <i class=\"fas fa-calendar me-1\"></i>
                        Créé le ";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "createdAt", [], "any", false, false, false, 176), "d/m/Y"), "html", null, true);
        yield "
                    </small>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <!-- Colonne gauche: Informations produit -->
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <!-- Informations produit -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-info-circle me-2\"></i> Informations du produit
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <dl class=\"row mb-0\">
                                <dt class=\"col-sm-5 text-muted\">Nom</dt>
                                <dd class=\"col-sm-7 fw-bold\">";
        // line 198
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 198), "html", null, true);
        yield "</dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Code-barres</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-secondary\">";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "barcode", [], "any", false, false, false, 202), "html", null, true);
        yield "</span>
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Catégorie</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"badge bg-primary\">
                                        <i class=\"fas fa-folder me-1\"></i>";
        // line 208
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 208), "name", [], "any", false, false, false, 208), "html", null, true);
        yield "
                                    </span>
                                    ";
        // line 210
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 210), "parent", [], "any", false, false, false, 210)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 211
            yield "                                        <br>
                                        <small class=\"text-muted\">
                                            <i class=\"fas fa-level-up-alt me-1\"></i>
                                            Catégorie principale: ";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "category", [], "any", false, false, false, 214), "parent", [], "any", false, false, false, 214), "name", [], "any", false, false, false, 214), "html", null, true);
            yield "
                                        </small>
                                    ";
        }
        // line 217
        yield "                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Unité de mesure</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 221
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 221)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 221), "pièce")) : ("pièce"))), "html", null, true);
        yield "
                                </dd>
                                
                                <dt class=\"col-sm-5 text-muted\">Type de produit</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 226
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hasExpiryDate", [], "method", false, false, false, 226)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 227
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            <i class=\"fas fa-calendar-alt me-1\"></i> Périssable
                                        </span>
                                    ";
        } else {
            // line 231
            yield "                                        <span class=\"badge bg-secondary\">
                                            <i class=\"fas fa-infinity me-1\"></i> Non périssable
                                        </span>
                                    ";
        }
        // line 235
        yield "                                </dd>
                                
                                ";
        // line 237
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "dosage", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 238
            yield "                                    <dt class=\"col-sm-5 text-muted\">Dosage</dt>
                                    <dd class=\"col-sm-7\">";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "dosage", [], "any", false, false, false, 239), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 241
        yield "                                
                                ";
        // line 242
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 243
            yield "                                    <dt class=\"col-sm-5 text-muted\">Forme</dt>
                                    <dd class=\"col-sm-7\">";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "form", [], "any", false, false, false, 244), "html", null, true);
            yield "</dd>
                                ";
        }
        // line 246
        yield "                                
                                ";
        // line 247
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "prescriptionRequired", [], "any", false, false, false, 247)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 248
            yield "                                    <dt class=\"col-sm-5 text-muted\">Prescription</dt>
                                    <dd class=\"col-sm-7\">
                                        <span class=\"badge bg-warning text-dark\">Obligatoire</span>
                                    </dd>
                                ";
        }
        // line 253
        yield "                                
                                <dt class=\"col-sm-5 text-muted\">Prix d'achat</dt>
                                <dd class=\"col-sm-7\">
                                    <span class=\"text-primary fw-bold\">
                                        ";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchasePrice", [], "any", false, false, false, 257), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 257)), "html", null, true);
        yield "
                                    </span>
                                </dd>
                                
                                ";
        // line 261
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 262
            yield "                                    <dt class=\"col-sm-5 text-muted\">Prix de vente</dt>
                                    <dd class=\"col-sm-7\">
                                        <span class=\"text-success fw-bold\">
                                            ";
            // line 265
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "salePrice", [], "any", false, false, false, 265), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 265)), "html", null, true);
            yield "
                                        </span>
                                    </dd>
                                ";
        }
        // line 269
        yield "                                
                                <dt class=\"col-sm-5 text-muted\">Stock min.</dt>
                                <dd class=\"col-sm-7\">
                                    ";
        // line 272
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 272) > 0)) {
            // line 273
            yield "                                        <span class=\"badge bg-warning text-dark\">
                                            ";
            // line 274
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "minQuantity", [], "any", false, false, false, 274), "html", null, true);
            yield "
                                        </span>
                                    ";
        } else {
            // line 277
            yield "                                        <span class=\"text-muted\">Non défini</span>
                                    ";
        }
        // line 279
        yield "                                </dd>
                                
                                ";
        // line 282
        yield "                                ";
        if ((($context["companyType"] ?? null) == "pharmacy")) {
            // line 283
            yield "                                    <dt class=\"col-sm-5 text-muted\">Visibilité marketplace</dt>
                                    <dd class=\"col-sm-7\">
                                        ";
            // line 285
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "companyPublic", [], "any", false, false, false, 285)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 286
                yield "                                            <span class=\"badge bg-success\">
                                                <i class=\"fas fa-eye me-1\"></i> Visible
                                            </span>
                                        ";
            } else {
                // line 290
                yield "                                            <span class=\"badge bg-secondary\">
                                                <i class=\"fas fa-eye-slash me-1\"></i> Masqué
                                            </span>
                                        ";
            }
            // line 294
            yield "                                    </dd>
                                ";
        }
        // line 296
        yield "                            </dl>
                        </div>
                    </div>
                </div>
                
                <!-- Image du produit -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card border-0 shadow-sm h-100\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-image me-2\"></i> Image du produit
                            </h5>
                        </div>
                        <div class=\"card-body d-flex align-items-center justify-content-center\">
                            ";
        // line 310
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 310) && (CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 310) != "default-product.png"))) {
            // line 311
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 311))), "html", null, true);
            yield "\" 
                                     alt=\"";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 312), "html", null, true);
            yield "\" 
                                     class=\"img-fluid rounded shadow-lg\"
                                     style=\"max-height: 250px; object-fit: contain;\">
                            ";
        } else {
            // line 316
            yield "                                <div class=\"text-center text-muted py-5\">
                                    <i class=\"fas fa-box fa-5x mb-3\"></i>
                                    <p class=\"mb-0\">Aucune image disponible</p>
                                </div>
                            ";
        }
        // line 321
        yield "                        </div>
                    </div>
                </div>
                
                <!-- Description du produit -->
                ";
        // line 326
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 326)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 327
            yield "                <div class=\"col-12 mb-4\">
                    <div class=\"card border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-align-left me-2\"></i> Description du produit
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"product-description-container\" style=\"max-height: 300px; overflow-y: auto;\">
                                ";
            // line 336
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "description", [], "any", false, false, false, 336), "html", null, true));
            yield "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        }
        // line 342
        yield "                
                <!-- Timeline des mouvements récents -->
                <div class=\"col-12 mb-4\">
                    <div class=\"card border-0 shadow-sm\">
                        <div class=\"card-header bg-white py-3 d-flex justify-content-between align-items-center\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"fas fa-history me-2\"></i> Derniers mouvements de stock
                            </h5>
                            <a href=\"#\" class=\"btn btn-sm btn-outline-primary\">
                                <i class=\"fas fa-exchange-alt me-1\"></i> Voir tous
                            </a>
                        </div>
                        <div class=\"card-body\">
                            ";
        // line 355
        $context["sortedBatches"] = Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 355), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "createdAt", [], "any", false, false, false, 355) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "createdAt", [], "any", false, false, false, 355)); });
        // line 356
        yield "                            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["sortedBatches"] ?? null)) > 0)) {
            // line 357
            yield "                                <div class=\"timeline\">
                                    ";
            // line 358
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["sortedBatches"] ?? null), 0, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 359
                yield "                                        <div class=\"timeline-item\">
                                            <div class=\"timeline-date\">
                                                ";
                // line 361
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "createdAt", [], "any", false, false, false, 361), "d/m/Y H:i"), "html", null, true);
                yield "
                                            </div>
                                            <div class=\"timeline-content\">
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <div>
                                                        <h6 class=\"mb-1\">Lot ";
                // line 366
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 366), "html", null, true);
                yield "</h6>
                                                        <p class=\"mb-0 text-muted small\">
                                                            <i class=\"fas fa-box me-1\"></i>
                                                            Quantité: ";
                // line 369
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 369), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 369), "html", null, true);
                yield "
                                                            ";
                // line 370
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 370)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 371
                    yield "                                                                <span class=\"ms-2\">
                                                                    <i class=\"fas fa-calendar-alt me-1\"></i>
                                                                    Exp: ";
                    // line 373
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 373), "d/m/Y"), "html", null, true);
                    yield "
                                                                </span>
                                                            ";
                }
                // line 376
                yield "                                                        </p>
                                                    </div>
                                                    <div>
                                                        <span class=\"badge ";
                // line 379
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 379)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bg-success") : ("bg-secondary"));
                yield "\">
                                                            ";
                // line 380
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "isActive", [], "any", false, false, false, 380)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Actif") : ("Inactif"));
                yield "
                                                        </span>
                                                        ";
                // line 382
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 382) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 382) < $this->extensions['Twig\Extension\CoreExtension']->convertDate()))) {
                    // line 383
                    yield "                                                            <span class=\"badge bg-danger ms-1\">Expiré</span>
                                                        ";
                }
                // line 385
                yield "                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 390
            yield "                                </div>
                                ";
            // line 391
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["sortedBatches"] ?? null)) > 5)) {
                // line 392
                yield "                                    <div class=\"text-center mt-3\">
                                        <a href=\"";
                // line 393
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 393)]), "html", null, true);
                yield "\" 
                                            class=\"btn btn-sm btn-outline-info\">
                                            <i class=\"fas fa-boxes me-1\"></i> Voir tous les lots
                                        </a>
                                    </div>
                                ";
            }
            // line 399
            yield "                            ";
        } else {
            // line 400
            yield "                                <div class=\"text-center py-4\">
                                    <i class=\"fas fa-box-open fa-3x text-muted mb-3\"></i>
                                    <p class=\"text-muted mb-0\">Aucun mouvement de stock enregistré</p>
                                </div>
                            ";
        }
        // line 405
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Colonne droite: Actions et lots -->
        <div class=\"col-lg-4\">
            <!-- Actions rapides -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-bolt me-2\"></i> Actions rapides
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-grid gap-2\">
                        <a href=\"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 422)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-warning\">
                            <i class=\"fas fa-edit me-2\"></i> Modifier le produit
                        </a>

                        <div class=\"dropdown\">
                            <button class=\"btn btn-outline-primary dropdown-toggle w-100\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                <i class=\"fas fa-print me-2\"></i> Imprimer
                            </button>
                            <ul class=\"dropdown-menu w-100\">
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"window.open('";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_print_barcode", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 433)]), "html", null, true);
        yield "', '_blank'); return false;\">
                                        <i class=\"fas fa-barcode me-2\"></i> Étiquette code-barres
                                    </a>
                                </li>
                                <li>
                                    <a class=\"dropdown-item\" href=\"#\" onclick=\"window.open('";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_print_sheet", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 438)]), "html", null, true);
        yield "', '_blank'); return false;\">
                                        <i class=\"fas fa-file-alt me-2\"></i> Fiche produit
                                    </a>
                                </li>
                            </ul>
                        </div>
                        
                        <a href=\"";
        // line 445
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_cart");
        yield "\" 
                           class=\"btn btn-success\">
                            <i class=\"fas fa-plus me-2\"></i> Nouvel achat
                        </a>
                        
                        <!-- Lien vers les lots -->
                        <a href=\"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 451)]), "html", null, true);
        yield "\" 
                           class=\"btn btn-outline-info\">
                            <i class=\"fas fa-boxes me-2\"></i> Gérer les lots
                        </a>
                        
                        <!-- Lien vers les mouvements de stock -->
                        <a href=\"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_stock_movements", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 457)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"fas fa-exchange-alt me-2\"></i> Mouvements de stock
                        </a>
                        
                        <!-- Lien vers les commandes liées (si pas restaurant) -->
                        ";
        // line 462
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 463
            yield "                        <a href=\"#\" class=\"btn btn-outline-success\">
                            <i class=\"fas fa-shopping-cart me-2\"></i> Commandes liées
                        </a>
                        ";
        }
        // line 467
        yield "                        
                        ";
        // line 468
        if ((($context["companyType"] ?? null) != "restaurant")) {
            // line 469
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_promotions", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 469)]), "html", null, true);
            yield "\" 
                            class=\"btn btn-outline-warning\">
                                <i class=\"fas fa-tags me-2\"></i> Gérer les promotions
                            </a>
                        ";
        }
        // line 474
        yield "                        
                        <!-- Bouton toggle status (ouvre modal) -->
                        <button type=\"button\" 
                                class=\"btn btn-outline-secondary toggle-status-btn\"
                                data-bs-toggle=\"modal\" 
                                data-bs-target=\"#toggleStatusModal\"
                                data-product-id=\"";
        // line 480
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 480), "html", null, true);
        yield "\"
                                data-product-name=\"";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 481), "html", null, true);
        yield "\"
                                data-is-active=\"";
        // line 482
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 482)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
        yield "\"
                                data-token=\"";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 483))), "html", null, true);
        yield "\">
                            <i class=\"fas ";
        // line 484
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 484)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("fa-toggle-on") : ("fa-toggle-off"));
        yield " me-2\"></i>
                            ";
        // line 485
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "isActive", [], "any", false, false, false, 485)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver le produit") : ("Activer le produit"));
        yield "
                        </button>
                        
                        <!-- Bouton supprimer (visible pour admin) -->
                        ";
        // line 489
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 490
            yield "                            ";
            $context["hasDependencies"] = ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "purchaseItems", [], "any", false, false, false, 490)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 490)) > 0));
            // line 491
            yield "                            <button type=\"button\" 
                                    class=\"btn btn-outline-danger delete-product-btn\"
                                    data-bs-toggle=\"modal\" 
                                    data-bs-target=\"#deleteModal\"
                                    data-product-id=\"";
            // line 495
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 495), "html", null, true);
            yield "\"
                                    data-product-name=\"";
            // line 496
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 496), "html", null, true);
            yield "\"
                                    data-has-dependencies=\"";
            // line 497
            yield (((($tmp = ($context["hasDependencies"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("1") : ("0"));
            yield "\"
                                    data-token=\"";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 498))), "html", null, true);
            yield "\"
                                    ";
            // line 499
            if ((($tmp = ($context["hasDependencies"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "title=\"Ce produit a des dépendances\"";
            }
            yield ">
                                <i class=\"fas fa-trash me-2\"></i> Supprimer le produit
                            </button>
                        ";
        }
        // line 503
        yield "                    </div>
                </div>
            </div>
            
            <!-- Liste des lots actifs -->
            <div class=\"card border-0 shadow-sm mb-4\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-boxes me-2\"></i> Lots en stock
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 515
        $context["activeBatches"] = Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 515), function ($__b__) use ($context, $macros) { $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "isActive", [], "any", false, false, false, 515) && (CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "currentQuantity", [], "any", false, false, false, 515) > 0)); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "expiryDate", [], "any", false, false, false, 515) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "expiryDate", [], "any", false, false, false, 515)); });
        // line 516
        yield "                    
                    ";
        // line 517
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeBatches"] ?? null)) > 0)) {
            // line 518
            yield "                        <div class=\"list-group list-group-flush\">
                            ";
            // line 519
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ($context["activeBatches"] ?? null), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 520
                yield "                                <div class=\"list-group-item border-0 px-0 py-2\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"mb-1\">Lot ";
                // line 523
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "batchNumber", [], "any", false, false, false, 523), "html", null, true);
                yield "</h6>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-box me-1\"></i>
                                                ";
                // line 526
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 526), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "initialQuantity", [], "any", false, false, false, 526), "html", null, true);
                yield "
                                            </small>
                                            <br>
                                            <small class=\"text-muted\">
                                                <i class=\"fas fa-coins me-1\"></i>
                                                ";
                // line 531
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 531) * CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "unitPrice", [], "any", false, false, false, 531)), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "hmaService", [], "any", false, false, false, 531)), "html", null, true);
                yield "
                                            </small>
                                        </div>
                                        <div class=\"text-end\">
                                            ";
                // line 535
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 535)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 536
                    yield "                                                <div class=\"mb-1\">
                                                    <small class=\"";
                    // line 537
                    yield (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 537) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days"))) ? ("text-danger") : ("text-muted"));
                    yield "\">
                                                        <i class=\"fas fa-calendar-alt me-1\"></i>
                                                        ";
                    // line 539
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 539), "d/m/Y"), "html", null, true);
                    yield "
                                                    </small>
                                                </div>
                                            ";
                }
                // line 543
                yield "                                            <span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 543) <= 10)) ? ("bg-warning") : ("bg-success"));
                yield "\">
                                                ";
                // line 544
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "currentQuantity", [], "any", false, false, false, 544), "html", null, true);
                yield " restants
                                            </span>
                                        </div>
                                    </div>
                                    ";
                // line 548
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 548) && (CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 548) < $this->extensions['Twig\Extension\CoreExtension']->convertDate("+30 days")))) {
                    // line 549
                    yield "                                        <div class=\"mt-2\">
                                            <div class=\"progress\" style=\"height: 5px;\">
                                                ";
                    // line 551
                    $context["daysLeft"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["batch"], "expiryDate", [], "any", false, false, false, 551), "diff", [$this->extensions['Twig\Extension\CoreExtension']->convertDate()], "method", false, false, false, 551), "days", [], "any", false, false, false, 551);
                    // line 552
                    yield "                                                ";
                    $context["progress"] = ((($context["daysLeft"] ?? null) / 30) * 100);
                    // line 553
                    yield "                                                <div class=\"progress-bar bg-danger\" 
                                                     style=\"width: ";
                    // line 554
                    yield (((($context["progress"] ?? null) > 100)) ? (100) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["progress"] ?? null), "html", null, true)));
                    yield "%\"
                                                     role=\"progressbar\">
                                                </div>
                                            </div>
                                            <small class=\"text-danger\">
                                                <i class=\"fas fa-exclamation-triangle me-1\"></i>
                                                Expire dans ";
                    // line 560
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["daysLeft"] ?? null), "html", null, true);
                    yield " jour";
                    yield (((($context["daysLeft"] ?? null) > 1)) ? ("s") : (""));
                    yield "
                                            </small>
                                        </div>
                                    ";
                }
                // line 564
                yield "                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['batch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 566
            yield "                        </div>
                        
                        ";
            // line 568
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeBatches"] ?? null)) > 3)) {
                // line 569
                yield "                            <div class=\"text-center mt-3\">
                                <a href=\"";
                // line 570
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_batch_index", ["productId" => CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 570)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\">
                                    Voir tous les lots (";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["activeBatches"] ?? null)), "html", null, true);
                yield ")
                                </a>
                            </div>
                        ";
            }
            // line 575
            yield "                    ";
        } else {
            // line 576
            yield "                        <div class=\"text-center py-3\">
                            <i class=\"fas fa-box-open fa-2x text-muted mb-2\"></i>
                            <p class=\"text-muted mb-0\">Aucun lot actif en stock</p>
                            ";
            // line 579
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 579) > 0)) {
                // line 580
                yield "                                <small class=\"text-muted\">
                                    <i class=\"fas fa-info-circle me-1\"></i>
                                    Stock initial: ";
                // line 582
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 582), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 582)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 582), "pièce(s)")) : ("pièce(s)")), "html", null, true);
                yield "
                                </small>
                            ";
            }
            // line 585
            yield "                        </div>
                    ";
        }
        // line 587
        yield "                </div>
            </div>
            
            <!-- Informations dates et historique -->
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white py-3\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"fas fa-calendar-alt me-2 text-primary\"></i> Historique
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"list-group list-group-flush\">
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-plus-circle text-success me-2\"></i> Création</span>
                                <span>";
        // line 602
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "createdAt", [], "any", false, false, false, 602), "d/m/Y H:i"), "html", null, true);
        yield "</span>
                            </small>
                        </div>
                        
                        ";
        // line 606
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "updatedAt", [], "any", false, false, false, 606)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 607
            yield "                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-edit text-warning me-2\"></i> Dernière modification</span>
                                <span>";
            // line 610
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "updatedAt", [], "any", false, false, false, 610), "d/m/Y H:i"), "html", null, true);
            yield "</span>
                            </small>
                        </div>
                        ";
        }
        // line 614
        yield "                        
                        ";
        // line 615
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 615)) > 0)) {
            // line 616
            yield "                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-cart-plus text-info me-2\"></i> Dernier achat</span>
                                <span>";
            // line 619
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockBatches", [], "any", false, false, false, 619)), "createdAt", [], "any", false, false, false, 619), "d/m/Y"), "html", null, true);
            yield "</span>
                            </small>
                        </div>
                        ";
        }
        // line 623
        yield "                        
                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-boxes text-primary me-2\"></i> Stock total</span>
                                <span class=\"fw-bold\">";
        // line 627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["currentStock"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 627)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 627), "pièce(s)")) : ("pièce(s)")), "html", null, true);
        yield "</span>
                            </small>
                        </div>
                        
                        ";
        // line 631
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, false, false, 631)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 632
            yield "                        <div class=\"list-group-item border-0 px-0 py-2 bg-light rounded mt-1\">
                            <div class=\"d-flex justify-content-between align-items-start\">
                                <div>
                                    <i class=\"fas fa-history text-info me-2\"></i>
                                    <span class=\"small fw-semibold\">Dernière modification du stock</span>
                                </div>
                                <span class=\"badge bg-secondary\">";
            // line 638
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedAt", [], "any", false, false, false, 638), "d/m/Y H:i:s"), "html", null, true);
            yield "</span>
                            </div>
                            ";
            // line 640
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER"))) {
                // line 641
                yield "                            <div class=\"mt-2\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-user me-1\"></i> 
                                    <strong>Modifié par :</strong> ";
                // line 644
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, true, false, 644), "fullName", [], "any", true, true, false, 644)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, false, false, 644), "fullName", [], "any", false, false, false, 644), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, false, false, 644), "email", [], "any", false, false, false, 644))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "lastStockUpdatedBy", [], "any", false, false, false, 644), "email", [], "any", false, false, false, 644))), "html", null, true);
                yield "
                                </small>
                            </div>
                            ";
            }
            // line 648
            yield "                            <div class=\"mt-1\">
                                <small class=\"text-muted\">
                                    <i class=\"fas fa-chart-line me-1\"></i>
                                    <strong>Stock après modification :</strong> ";
            // line 651
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 651), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 651)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 651), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "
                                </small>
                            </div>
                        </div>
                        ";
        } else {
            // line 656
            yield "                        <div class=\"list-group-item border-0 px-0 py-2\">
                            <small class=\"text-muted d-flex justify-content-between align-items-center\">
                                <span><i class=\"fas fa-info-circle me-2\"></i> Stock initial</span>
                                <span>";
            // line 659
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "stockQuantity", [], "any", false, false, false, 659), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", true, true, false, 659)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["product"] ?? null), "unit", [], "any", false, false, false, 659), "pièce(s)")) : ("pièce(s)")), "html", null, true);
            yield "</span>
                            </small>
                        </div>
                        ";
        }
        // line 663
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour confirmer la désactivation/activation -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"toggleStatusModalLabel\">Confirmation</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <p id=\"toggleStatusModalMessage\">Êtes-vous sûr de vouloir modifier le statut de ce produit ?</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"toggleStatusForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\" value=\"\">
                    <button type=\"submit\" class=\"btn\" id=\"toggleStatusModalButton\">
                        <i class=\"fas fa-check me-2\"></i> Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour confirmer la suppression (avec vérification du nom si dépendances) -->
<div class=\"modal fade\" id=\"deleteModal\" tabindex=\"-1\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\">
                    <i class=\"fas fa-exclamation-triangle me-2\"></i> Confirmation de suppression
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div id=\"deleteModalContent\"></div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Annuler</button>
                <form id=\"deleteForm\" method=\"post\" action=\"\">
                    <input type=\"hidden\" name=\"_token\" id=\"deleteToken\" value=\"\">
                    <button type=\"submit\" class=\"btn btn-danger\" id=\"deleteConfirmBtn\">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 719
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 720
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.slide-in-left {
    animation: slideInLeft 0.5s ease-out;
}

@keyframes slideInLeft {
    from { transform: translateX(-20px); opacity: 0; }
    to { transform: translateX(0); opacity: 1; }
}

.float-up {
    animation: floatUp 3s ease-in-out infinite;
}

@keyframes floatUp {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.btn-hover-scale {
    transition: all 0.2s ease;
}

.btn-hover-scale:hover {
    transform: scale(1.05);
}

/* Timeline styles */
.timeline {
    position: relative;
    padding-left: 30px;
}

.timeline::before {
    content: '';
    position: absolute;
    left: 15px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #e9ecef;
}

.timeline-item {
    position: relative;
    margin-bottom: 20px;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -30px;
    top: 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #667eea;
    border: 2px solid white;
    box-shadow: 0 0 0 3px #667eea33;
}

.timeline-date {
    font-size: 0.8rem;
    color: #6c757d;
    margin-bottom: 5px;
}

.timeline-content {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 8px;
    border-left: 3px solid #667eea;
}

/* Card hover effects */
.card {
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.1) !important;
}

/* Progress bar for expiry */
.progress {
    border-radius: 10px;
    overflow: hidden;
}

.progress-bar {
    border-radius: 10px;
}

/* Description container with scroll */
.product-description-container {
    line-height: 1.6;
    padding: 10px;
    background-color: #f8f9fa;
    border-radius: 8px;
    border: 1px solid #e9ecef;
}

.product-description-container::-webkit-scrollbar {
    width: 8px;
}

.product-description-container::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 4px;
}

.product-description-container::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 4px;
}

.product-description-container::-webkit-scrollbar-thumb:hover {
    background: #555;
}

/* Badge colors */
.badge.bg-warning {
    background-color: #ffc107 !important;
    color: #000 !important;
}

.badge.bg-secondary {
    background-color: #6c757d !important;
}

/* Modal button styles */
#toggleStatusModalButton.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
}

#toggleStatusModalButton.btn-success {
    background-color: #198754;
    border-color: #198754;
}

#toggleStatusModalButton:hover {
    opacity: 0.9;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .d-flex.align-items-center {
        flex-direction: column;
        align-items: flex-start !important;
    }
    
    .btn-hover-scale {
        margin-top: 10px;
    }
}
</style>
";
        yield from [];
    }

    // line 881
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 882
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gestion du modal de désactivation/activation
    const toggleStatusModal = document.getElementById('toggleStatusModal');
    if (toggleStatusModal) {
        toggleStatusModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const productId = button.getAttribute('data-product-id');
            const productName = button.getAttribute('data-product-name');
            const isActive = button.getAttribute('data-is-active') === '1';
            const token = button.getAttribute('data-token');
            
            const modalTitle = toggleStatusModal.querySelector('.modal-title');
            const modalMessage = toggleStatusModal.querySelector('#toggleStatusModalMessage');
            const modalButton = toggleStatusModal.querySelector('#toggleStatusModalButton');
            const modalForm = toggleStatusModal.querySelector('#toggleStatusForm');
            const tokenInput = document.getElementById('toggleStatusToken');
            
            if (isActive) {
                modalTitle.textContent = 'Désactiver le produit';
                modalMessage.textContent = `Êtes-vous sûr de vouloir désactiver le produit \"\${productName}\" ?`;
                modalButton.textContent = 'Désactiver';
                modalButton.className = 'btn btn-danger';
            } else {
                modalTitle.textContent = 'Activer le produit';
                modalMessage.textContent = `Êtes-vous sûr de vouloir activer le produit \"\${productName}\" ?`;
                modalButton.textContent = 'Activer';
                modalButton.className = 'btn btn-success';
            }
            
            modalForm.action = `/admin/product/\${productId}/toggle-status`;
            tokenInput.value = token;
        });
    }

    // Gestion du modal de suppression
    const deleteModal = document.getElementById('deleteModal');
    if (deleteModal) {
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            const productId = button.getAttribute('data-product-id');
            const productName = button.getAttribute('data-product-name');
            const hasDependencies = button.getAttribute('data-has-dependencies') === '1';
            const token = button.getAttribute('data-token');
            
            const modalContent = deleteModal.querySelector('#deleteModalContent');
            const deleteForm = deleteModal.querySelector('#deleteForm');
            const deleteToken = deleteModal.querySelector('#deleteToken');
            const deleteConfirmBtn = deleteModal.querySelector('#deleteConfirmBtn');
            
            deleteForm.action = `/admin/product/\${productId}`;
            deleteToken.value = token;
            
            if (hasDependencies) {
                modalContent.innerHTML = `
                    <div class=\"alert alert-warning\">
                        <i class=\"fas fa-exclamation-triangle me-2\"></i>
                        <strong>Attention !</strong> Ce produit est lié à des achats ou des lots de stock.
                    </div>
                    <p>Pour confirmer la suppression, veuillez taper le nom du produit :</p>
                    <input type=\"text\" id=\"confirmProductName\" class=\"form-control\" placeholder=\"Nom du produit\">
                `;
                deleteConfirmBtn.disabled = true;
                
                const confirmInput = deleteModal.querySelector('#confirmProductName');
                confirmInput.addEventListener('input', function() {
                    deleteConfirmBtn.disabled = (this.value.trim() !== productName);
                });
            } else {
                modalContent.innerHTML = `
                    <p>Êtes-vous sûr de vouloir supprimer le produit <strong>\"\${productName}\"</strong> ?</p>
                    <p class=\"text-danger\"><i class=\"fas fa-exclamation-circle me-1\"></i>Cette action est irréversible.</p>
                `;
                deleteConfirmBtn.disabled = false;
            }
        });
    }

    // Ajouter un indicateur de chargement lors de la soumission des formulaires modaux
    const toggleStatusForm = document.getElementById('toggleStatusForm');
    if (toggleStatusForm) {
        toggleStatusForm.addEventListener('submit', function(event) {
            const submitButton = this.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Traitement...';
        });
    }

    const deleteForm = document.getElementById('deleteForm');
    if (deleteForm) {
        deleteForm.addEventListener('submit', function(event) {
            const submitButton = this.querySelector('button[type=\"submit\"]');
            submitButton.disabled = true;
            submitButton.innerHTML = '<span class=\"spinner-border spinner-border-sm me-2\"></span>Suppression...';
        });
    }
    
    // Fermer automatiquement les alertes après 5 secondes
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            if (alert && alert.style.display !== 'none') {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            }
        }, 5000);
    });
});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/product/show.html.twig";
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
        return array (  1485 => 882,  1478 => 881,  1313 => 720,  1306 => 719,  1247 => 663,  1238 => 659,  1233 => 656,  1223 => 651,  1218 => 648,  1211 => 644,  1206 => 641,  1204 => 640,  1199 => 638,  1191 => 632,  1189 => 631,  1180 => 627,  1174 => 623,  1167 => 619,  1162 => 616,  1160 => 615,  1157 => 614,  1150 => 610,  1145 => 607,  1143 => 606,  1136 => 602,  1119 => 587,  1115 => 585,  1107 => 582,  1103 => 580,  1101 => 579,  1096 => 576,  1093 => 575,  1086 => 571,  1082 => 570,  1079 => 569,  1077 => 568,  1073 => 566,  1066 => 564,  1057 => 560,  1048 => 554,  1045 => 553,  1042 => 552,  1040 => 551,  1036 => 549,  1034 => 548,  1027 => 544,  1022 => 543,  1015 => 539,  1010 => 537,  1007 => 536,  1005 => 535,  998 => 531,  988 => 526,  982 => 523,  977 => 520,  973 => 519,  970 => 518,  968 => 517,  965 => 516,  963 => 515,  949 => 503,  940 => 499,  936 => 498,  932 => 497,  928 => 496,  924 => 495,  918 => 491,  915 => 490,  913 => 489,  906 => 485,  902 => 484,  898 => 483,  894 => 482,  890 => 481,  886 => 480,  878 => 474,  869 => 469,  867 => 468,  864 => 467,  858 => 463,  856 => 462,  848 => 457,  839 => 451,  830 => 445,  820 => 438,  812 => 433,  798 => 422,  779 => 405,  772 => 400,  769 => 399,  760 => 393,  757 => 392,  755 => 391,  752 => 390,  742 => 385,  738 => 383,  736 => 382,  731 => 380,  727 => 379,  722 => 376,  716 => 373,  712 => 371,  710 => 370,  704 => 369,  698 => 366,  690 => 361,  686 => 359,  682 => 358,  679 => 357,  676 => 356,  674 => 355,  659 => 342,  650 => 336,  639 => 327,  637 => 326,  630 => 321,  623 => 316,  616 => 312,  611 => 311,  609 => 310,  593 => 296,  589 => 294,  583 => 290,  577 => 286,  575 => 285,  571 => 283,  568 => 282,  564 => 279,  560 => 277,  554 => 274,  551 => 273,  549 => 272,  544 => 269,  537 => 265,  532 => 262,  530 => 261,  523 => 257,  517 => 253,  510 => 248,  508 => 247,  505 => 246,  500 => 244,  497 => 243,  495 => 242,  492 => 241,  487 => 239,  484 => 238,  482 => 237,  478 => 235,  472 => 231,  466 => 227,  464 => 226,  456 => 221,  450 => 217,  444 => 214,  439 => 211,  437 => 210,  432 => 208,  423 => 202,  416 => 198,  391 => 176,  383 => 171,  379 => 170,  375 => 168,  369 => 165,  365 => 164,  360 => 163,  357 => 162,  352 => 159,  348 => 158,  339 => 152,  331 => 151,  327 => 149,  318 => 143,  305 => 134,  302 => 133,  300 => 132,  291 => 125,  289 => 124,  281 => 118,  274 => 113,  271 => 112,  267 => 110,  261 => 108,  259 => 107,  256 => 106,  254 => 105,  249 => 104,  246 => 103,  244 => 102,  232 => 93,  229 => 92,  223 => 91,  220 => 90,  217 => 89,  214 => 88,  209 => 87,  206 => 85,  203 => 84,  200 => 83,  197 => 82,  194 => 80,  192 => 79,  178 => 72,  171 => 67,  167 => 65,  161 => 61,  159 => 60,  153 => 59,  149 => 57,  147 => 56,  135 => 49,  121 => 42,  106 => 30,  99 => 26,  90 => 20,  82 => 15,  73 => 8,  66 => 7,  54 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/product/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\product\\show.html.twig");
    }
}
