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

/* manager/team/show.html.twig */
class __TwigTemplate_b4679ba4ee2d45d505d2760573708ca6 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 3), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["company"] ?? null), "companyName", [], "any", false, false, false, 3), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<div class=\"container-fluid px-4\">
    <!-- Header amélioré -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card bg-gradient-primary border-0 shadow-lg position-relative overflow-hidden\">
                <!-- Éléments décoratifs -->
                <div class=\"floating-shapes-mini\">
                    <div class=\"shape-mini shape-1-mini\"></div>
                    <div class=\"shape-mini shape-2-mini\"></div>
                </div>
                
                <div class=\"card-body p-4 position-relative\" style=\"z-index: 2;\">
                    <div class=\"d-flex justify-content-between align-items-center flex-wrap gap-3\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"icon-circle bg-white bg-opacity-20 me-3\">
                                ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "photo", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "photo", [], "any", false, false, false, 22))), "html", null, true);
            yield "\" 
                                         alt=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 23), "html", null, true);
            yield "\" 
                                         class=\"rounded-circle\" width=\"50\" height=\"50\" style=\"object-fit: cover;\">
                                ";
        } else {
            // line 26
            yield "                                    <span class=\"text-white fs-3 fw-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 26))), "html", null, true);
            yield "</span>
                                ";
        }
        // line 28
        yield "                            </div>
                            <div>
                                <h1 class=\"h2 text-white mb-1 fw-bold\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 30), "html", null, true);
        yield "</h1>
                                <div class=\"d-flex align-items-center gap-2 flex-wrap\">
                                    ";
        // line 32
        $context["roleConfig"] = ["ROLE_ADMIN" => ["bg" => "danger-gradient", "icon" => "bi-shield-shaded", "label" => "Administrateur"], "ROLE_MANAGER" => ["bg" => "primary-gradient", "icon" => "bi-graph-up", "label" => "Gestionnaire"], "ROLE_STOCK_MANAGER" => ["bg" => "warning-gradient", "icon" => "bi-box-seam", "label" => "Responsable Stock"], "ROLE_CASHIER" => ["bg" => "success-gradient", "icon" => "bi-cash-coin", "label" => "Caissier"]];
        // line 38
        yield "                                    
                                    ";
        // line 39
        $context["role"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "roles", [], "any", false, false, false, 39), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (($context["r"] ?? null) != "ROLE_USER"); }));
        // line 40
        yield "                                    ";
        $context["config"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["roleConfig"] ?? null), ($context["role"] ?? null), [], "array", true, true, false, 40) &&  !(null === (($_v0 = ($context["roleConfig"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess ? ($_v0[($context["role"] ?? null)] ?? null) : null)))) ? ((($_v1 = ($context["roleConfig"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess ? ($_v1[($context["role"] ?? null)] ?? null) : null)) : (["bg" => "secondary-gradient", "icon" => "bi-person", "label" => "Utilisateur"]));
        // line 41
        yield "                                    
                                    <span class=\"role-badge ";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "bg", [], "any", false, false, false, 42), "html", null, true);
        yield " py-2 px-3\">
                                        <i class=\"bi ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "icon", [], "any", false, false, false, 43), "html", null, true);
        yield " me-1\"></i>
                                        ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "label", [], "any", false, false, false, 44), "html", null, true);
        yield "
                                    </span>
                                    
                                    ";
        // line 47
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 48
            yield "                                        <span class=\"status-badge status-active py-2 px-3\">
                                            <i class=\"bi bi-check-circle-fill me-1\"></i>Actif
                                        </span>
                                    ";
        } else {
            // line 52
            yield "                                        <span class=\"status-badge status-inactive py-2 px-3\">
                                            <i class=\"bi bi-x-circle-fill me-1\"></i>Inactif
                                        </span>
                                    ";
        }
        // line 56
        yield "                                    
                                    ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isHmaOwner", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "                                        <span class=\"status-badge\" style=\"background: linear-gradient(135deg, #fbbf24, #d97706); color: white; border: none;\">
                                            <i class=\"bi bi-crown-fill me-1\"></i>Propriétaire
                                        </span>
                                    ";
        }
        // line 62
        yield "                                </div>
                            </div>
                        </div>
                        <div>
                            <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_index");
        yield "\" class=\"btn btn-light btn-lg me-2\">
                                <i class=\"bi bi-arrow-left me-2\"></i>Retour
                            </a>
                            ";
        // line 69
        if ((((CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "id", [], "any", false, false, false, 69) == CoreExtension::getAttribute($this->env, $this->source, ($context["current_user"] ?? null), "id", [], "any", false, false, false, 69)) || CoreExtension::getAttribute($this->env, $this->source,         // line 70
($context["current_user"] ?? null), "hasRole", ["ROLE_ADMIN"], "method", false, false, false, 70)) || ((CoreExtension::getAttribute($this->env, $this->source,         // line 71
($context["current_user"] ?? null), "hasRole", ["ROLE_MANAGER"], "method", false, false, false, 71) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hasRole", ["ROLE_ADMIN"], "method", false, false, false, 71)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hasRole", ["ROLE_MANAGER"], "method", false, false, false, 71)))) {
            // line 72
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_manager_team_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "id", [], "any", false, false, false, 72)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-lg\">
                                    <i class=\"bi bi-pencil-fill me-2\"></i>Modifier
                                </a>
                            ";
        }
        // line 76
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Profil amélioré -->
    <div class=\"row\">
        <!-- Colonne de gauche - Photo et infos rapides -->
        <div class=\"col-lg-4 mb-4\">
            <div class=\"card shadow-lg border-0 h-100\">
                <div class=\"card-body text-center p-4\">
                    <!-- Photo -->
                    <div class=\"position-relative d-inline-block mb-4\">
                        ";
        // line 91
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "photo", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "photo", [], "any", false, false, false, 92))), "html", null, true);
            yield "\" 
                                 alt=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 93), "html", null, true);
            yield "\" 
                                 class=\"rounded-circle shadow-lg\"
                                 style=\"width: 180px; height: 180px; object-fit: cover; border: 5px solid #667eea;\">
                        ";
        } else {
            // line 97
            yield "                            <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                 style=\"width: 180px; height: 180px; border: 5px solid #667eea;\">
                                <span class=\"display-2 fw-bold\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 99))), "html", null, true);
            yield "</span>
                            </div>
                        ";
        }
        // line 102
        yield "                        
                        <!-- Badge de statut en temps réel -->
                        <span class=\"position-absolute bottom-0 end-0 bg-";
        // line 104
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("success") : ("danger"));
        yield " rounded-circle p-2 border border-3 border-white shadow\"
                              style=\"width: 30px; height: 30px;\"
                              title=\"";
        // line 106
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 106)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Compte actif") : ("Compte inactif"));
        yield "\"></span>
                    </div>
                    
                    <h3 class=\"mb-1\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 109), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-3\">";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "email", [], "any", false, false, false, 110), "html", null, true);
        yield "</p>
                    
                    <!-- Actions rapides -->
                    <div class=\"d-grid gap-2 mb-4\">
                        <a href=\"tel:";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "phone", [], "any", false, false, false, 114), "html", null, true);
        yield "\" class=\"btn btn-outline-primary btn-lg\">
                            <i class=\"bi bi-telephone-fill me-2\"></i>";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "phone", [], "any", false, false, false, 115), "html", null, true);
        yield "
                        </a>
                        <a href=\"mailto:";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "email", [], "any", false, false, false, 117), "html", null, true);
        yield "\" class=\"btn btn-outline-info btn-lg\">
                            <i class=\"bi bi-envelope-fill me-2\"></i>Envoyer un email
                        </a>
                    </div>
                    
                    <hr>
                    
                    <!-- Dates importantes -->
                    <div class=\"text-start mt-3\">
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"icon-box bg-primary bg-opacity-10 rounded-3 p-2 me-3\">
                                <i class=\"bi bi-calendar-plus text-primary\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\">Date d'embauche</small>
                                <strong>";
        // line 132
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "employmentDate", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "employmentDate", [], "any", false, false, false, 132), "d/m/Y"), "html", null, true)) : ("Non renseignée"));
        yield "</strong>
                            </div>
                        </div>
                        <div class=\"d-flex align-items-center mb-3\">
                            <div class=\"icon-box bg-success bg-opacity-10 rounded-3 p-2 me-3\">
                                <i class=\"bi bi-calendar-check text-success\"></i>
                            </div>
                            <div>
                                <small class=\"text-muted d-block\">Membre depuis</small>
                                <strong>";
        // line 141
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "createdAt", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "createdAt", [], "any", false, false, false, 141), "d/m/Y"), "html", null, true)) : ("N/A"));
        yield "</strong>
                            </div>
                        </div>
                        ";
        // line 144
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "updatedAt", [], "any", false, false, false, 144)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 145
            yield "                            <div class=\"d-flex align-items-center\">
                                <div class=\"icon-box bg-info bg-opacity-10 rounded-3 p-2 me-3\">
                                    <i class=\"bi bi-clock-history text-info\"></i>
                                </div>
                                <div>
                                    <small class=\"text-muted d-block\">Dernière modification</small>
                                    <strong>";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "updatedAt", [], "any", false, false, false, 151), "d/m/Y H:i"), "html", null, true);
            yield "</strong>
                                </div>
                            </div>
                        ";
        }
        // line 155
        yield "                    </div>
                </div>
            </div>
        </div>
        
        <!-- Colonne de droite - Informations détaillées -->
        <div class=\"col-lg-8 mb-4\">
            <div class=\"row\">
                <!-- Informations personnelles -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-0 h-100\">
                        <div class=\"card-header bg-gradient-info text-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-person-badge me-2\"></i>Informations personnelles
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-borderless\">
                                <tr>
                                    <td class=\"text-muted ps-0\">Email</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        <a href=\"mailto:";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "email", [], "any", false, false, false, 176), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                            ";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "email", [], "any", false, false, false, 177), "html", null, true);
        yield "
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Téléphone</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        <a href=\"tel:";
        // line 184
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "phone", [], "any", false, false, false, 184), "html", null, true);
        yield "\" class=\"text-decoration-none\">
                                            ";
        // line 185
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "phone", [], "any", false, false, false, 185), "html", null, true);
        yield "
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Date d'embauche</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        ";
        // line 192
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "employmentDate", [], "any", false, false, false, 192)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "employmentDate", [], "any", false, false, false, 192), "d/m/Y"), "html", null, true)) : ("Non renseignée"));
        yield "
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Informations système -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-0 h-100\">
                        <div class=\"card-header bg-gradient-secondary text-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-gear me-2\"></i>Informations système
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <table class=\"table table-borderless\">
                                <tr>
                                    <td class=\"text-muted ps-0\">Rôle</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        <span class=\"role-badge ";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "bg", [], "any", false, false, false, 213), "html", null, true);
        yield " py-1 px-2\" style=\"font-size: 0.8rem;\">
                                            <i class=\"bi ";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "icon", [], "any", false, false, false, 214), "html", null, true);
        yield " me-1\"></i>
                                            ";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["config"] ?? null), "label", [], "any", false, false, false, 215), "html", null, true);
        yield "
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">Statut compte</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        ";
        // line 222
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 222)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 223
            yield "                                            <span class=\"badge bg-success\">Actif</span>
                                        ";
        } else {
            // line 225
            yield "                                            <span class=\"badge bg-danger\">Inactif</span>
                                        ";
        }
        // line 227
        yield "                                    </td>
                                </tr>
                                <tr>
                                    <td class=\"text-muted ps-0\">1ère connexion</td>
                                    <td class=\"fw-semibold pe-0 text-end\">
                                        ";
        // line 232
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "passwordChanged", [], "any", false, false, false, 232) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isHmaOwner", [], "any", false, false, false, 232))) {
            // line 233
            yield "                                            <span class=\"badge bg-warning text-dark\">En attente</span>
                                        ";
        } else {
            // line 235
            yield "                                            <span class=\"badge bg-success\">Effectuée</span>
                                        ";
        }
        // line 237
        yield "                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <!-- Statistiques d'activité -->
                <div class=\"col-12\">
                    <div class=\"card shadow-lg border-0\">
                        <div class=\"card-header bg-gradient-warning text-white py-3\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-bar-chart-steps me-2\"></i>Statistiques d'activité
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row g-4\">
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card-modern text-center\">
                                        <div class=\"stat-icon bg-primary bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-box-seam text-primary fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "products", [], "any", false, false, false, 259)), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-muted small\">Produits</div>
                                    </div>
                                </div>
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card-modern text-center\">
                                        <div class=\"stat-icon bg-success bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-cart-check text-success fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">";
        // line 268
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "orders", [], "any", false, false, false, 268)), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-muted small\">Commandes</div>
                                    </div>
                                </div>
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card-modern text-center\">
                                        <div class=\"stat-icon bg-info bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-arrow-left-right text-info fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "stockMovements", [], "any", false, false, false, 277)), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-muted small\">Mouvements</div>
                                    </div>
                                </div>
                                <div class=\"col-6 col-md-3\">
                                    <div class=\"stat-card-modern text-center\">
                                        <div class=\"stat-icon bg-warning bg-opacity-10 rounded-circle p-3 mb-3 d-inline-block\">
                                            <i class=\"bi bi-tags text-warning fs-3\"></i>
                                        </div>
                                        <div class=\"stat-value h3 mb-1 fw-bold\">";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "categories", [], "any", false, false, false, 286)), "html", null, true);
        yield "</div>
                                        <div class=\"stat-label text-muted small\">Catégories</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
:root {
    --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    --danger-gradient: linear-gradient(135deg, #f87171 0%, #dc2626 100%);
    --success-gradient: linear-gradient(135deg, #48bb78 0%, #38a169 100%);
    --warning-gradient: linear-gradient(135deg, #fbbf24 0%, #d97706 100%);
    --info-gradient: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
    --secondary-gradient: linear-gradient(135deg, #9ca3af 0%, #6b7280 100%);
}

/* Header */
.bg-gradient-primary {
    background: var(--primary-gradient) !important;
}

.floating-shapes-mini {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
    opacity: 0.3;
}

.shape-mini {
    position: absolute;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
}

.shape-1-mini {
    width: 150px;
    height: 150px;
    top: -50px;
    right: -30px;
    animation: floatMini 8s ease-in-out infinite;
}

.shape-2-mini {
    width: 100px;
    height: 100px;
    bottom: -30px;
    left: -20px;
    animation: floatMini 12s ease-in-out infinite reverse;
}

@keyframes floatMini {
    0%, 100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(5deg); }
}

/* Badges */
.role-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 14px;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 600;
    color: white;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
    border: 1px solid rgba(255,255,255,0.2);
}

.danger-gradient { background: var(--danger-gradient); }
.primary-gradient { background: var(--primary-gradient); }
.warning-gradient { background: var(--warning-gradient); }
.success-gradient { background: var(--success-gradient); }
.info-gradient { background: var(--info-gradient); }
.secondary-gradient { background: var(--secondary-gradient); }

.status-badge {
    display: inline-flex;
    align-items: center;
    padding: 8px 14px;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 500;
}

.status-active {
    background: green;
    color: white;
    border: 1px solid withe;
}

.status-inactive {
    background: rgba(220, 38, 38, 0.1);
    color: #dc2626;
    border: 1px solid #dc2626;
}

/* Icon circle */
.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.bg-opacity-20 {
    background-color: rgba(255, 255, 255, 0.2) !important;
}

/* Icon box */
.icon-box {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Statistiques modernes */
.stat-card-modern {
    padding: 1.5rem;
    background: white;
    border-radius: 15px;
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.05);
}

.stat-card-modern:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
    border-color: transparent;
}

.stat-icon {
    transition: all 0.3s ease;
}

.stat-card-modern:hover .stat-icon {
    transform: scale(1.1);
}

/* Table */
.table-borderless td {
    padding: 0.75rem 0;
    border: none;
}

/* Boutons */
.btn {
    border-radius: 12px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.btn-outline-primary:hover {
    background: var(--primary-gradient);
    border-color: transparent;
}

.btn-outline-info:hover {
    background: var(--info-gradient);
    border-color: transparent;
    color: white;
}

/* Cartes */
.card {
    border-radius: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
}

.card-header {
    border-bottom: none;
}

.bg-gradient-info {
    background: var(--info-gradient) !important;
}

.bg-gradient-secondary {
    background: var(--secondary-gradient) !important;
}

.bg-gradient-warning {
    background: var(--warning-gradient) !important;
}

/* Animation */
@keyframes pulse {
    0% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0.7); }
    70% { box-shadow: 0 0 0 10px rgba(102, 126, 234, 0); }
    100% { box-shadow: 0 0 0 0 rgba(102, 126, 234, 0); }
}

.position-absolute.bottom-0.end-0 {
    animation: pulse 2s infinite;
}
</style>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "manager/team/show.html.twig";
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
        return array (  502 => 286,  490 => 277,  478 => 268,  466 => 259,  442 => 237,  438 => 235,  434 => 233,  432 => 232,  425 => 227,  421 => 225,  417 => 223,  415 => 222,  405 => 215,  401 => 214,  397 => 213,  373 => 192,  363 => 185,  359 => 184,  349 => 177,  345 => 176,  322 => 155,  315 => 151,  307 => 145,  305 => 144,  299 => 141,  287 => 132,  269 => 117,  264 => 115,  260 => 114,  253 => 110,  249 => 109,  243 => 106,  238 => 104,  234 => 102,  228 => 99,  224 => 97,  217 => 93,  212 => 92,  210 => 91,  193 => 76,  185 => 72,  183 => 71,  182 => 70,  181 => 69,  175 => 66,  169 => 62,  163 => 58,  161 => 57,  158 => 56,  152 => 52,  146 => 48,  144 => 47,  138 => 44,  134 => 43,  130 => 42,  127 => 41,  124 => 40,  122 => 39,  119 => 38,  117 => 32,  112 => 30,  108 => 28,  102 => 26,  96 => 23,  91 => 22,  89 => 21,  72 => 6,  65 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "manager/team/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\manager\\team\\show.html.twig");
    }
}
