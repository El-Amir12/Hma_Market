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

/* admin/user/show.html.twig */
class __TwigTemplate_10478f5e4832fd7483141639c7a67c7b extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        yield "Détails - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 5), "html", null, true);
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
    <!-- Header avec actions -->
    <div class=\"row mb-4\">
        <div class=\"col-12\">
            <div class=\"card bg-gradient-primary border-0 shadow-lg\">
                <div class=\"card-body p-4\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex align-items-center\">
                            <div class=\"icon-circle bg-white bg-opacity-20 me-3\">
                                <i class=\"bi bi-person-circle fs-2 text-white\"></i>
                            </div>
                            <div>
                                <h1 class=\"h2 text-white mb-1 fw-bold\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 20), "html", null, true);
        yield "</h1>
                                <div class=\"d-flex align-items-center gap-2\">
                                    <span class=\"badge ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "roleBadgeClass", [], "any", false, false, false, 22), "html", null, true);
        yield " py-2 px-3\">
                                        <i class=\"bi ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "roleIcon", [], "any", false, false, false, 23), "html", null, true);
        yield " me-1\"></i>
                                        ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "roleLabel", [], "any", false, false, false, 24), "html", null, true);
        yield "
                                    </span>
                                    ";
        // line 26
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isHmaOwner", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "                                        <span class=\"badge bg-danger py-2 px-3\">
                                            <i class=\"bi bi-crown me-1\"></i>Propriétaire
                                        </span>
                                    ";
        }
        // line 31
        yield "                                    <span class=\"badge ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "statusBadgeClass", [], "any", false, false, false, 31), "html", null, true);
        yield " py-2 px-3\">
                                        <i class=\"bi ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "statusIcon", [], "any", false, false, false, 32), "html", null, true);
        yield " me-1\"></i>
                                        ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "statusLabel", [], "any", false, false, false, 33), "html", null, true);
        yield "
                                    </span>
                                    ";
        // line 36
        yield "                                    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "online", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                        <span class=\"badge bg-success py-2 px-3\">
                                            <i class=\"bi bi-circle-fill me-1\" style=\"font-size: 0.6rem;\"></i>En ligne
                                        </span>
                                    ";
        } else {
            // line 41
            yield "                                        <span class=\"badge bg-secondary py-2 px-3\">
                                            <i class=\"bi bi-circle me-1\" style=\"font-size: 0.6rem;\"></i>Hors ligne
                                        </span>
                                    ";
        }
        // line 45
        yield "                                </div>
                            </div>
                        </div>
                        <!-- Boutons d'action (inchangés) -->
                        <div class=\"btn-group\">
                            <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        yield "\" class=\"btn btn-light\">
                                <i class=\"bi bi-arrow-left me-2\"></i>Retour
                            </a>
                            ";
        // line 53
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isEditableBy", [($context["current_user"] ?? null)], "method", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 54
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">
                                    <i class=\"bi bi-pencil me-2\"></i>Modifier
                                </a>
                            ";
        }
        // line 58
        yield "                            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "canToggleStatusBy", [($context["current_user"] ?? null)], "method", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "                                <button type=\"button\" 
                                        class=\"btn btn-";
            // line 60
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("danger") : ("success"));
            yield " toggle-status-btn\"
                                        data-user-id=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "id", [], "any", false, false, false, 61), "html", null, true);
            yield "\"
                                        data-user-name=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 62), "html", null, true);
            yield "\"
                                        data-current-status=\"";
            // line 63
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("inactive"));
            yield "\"
                                        data-csrf-token=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("toggle-status" . CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "id", [], "any", false, false, false, 64))), "html", null, true);
            yield "\">
                                    <i class=\"bi bi-";
            // line 65
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("toggle-off") : ("toggle-on"));
            yield " me-2\"></i>
                                    ";
            // line 66
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Désactiver") : ("Activer"));
            yield "
                                </button>
                            ";
        }
        // line 69
        yield "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contenu principal -->
    <div class=\"row\">
        <!-- Colonne de gauche - Profil -->
        <div class=\"col-lg-4 mb-4\">
            <!-- Carte photo -->
            <div class=\"card shadow-lg border-0 mb-4\">
                <div class=\"card-body text-center p-4\">
                    ";
        // line 83
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "photo", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 84
            yield "                        <div class=\"position-relative d-inline-block\">
                            <img src=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "photo", [], "any", false, false, false, 85))), "html", null, true);
            yield "\" 
                                alt=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 86), "html", null, true);
            yield "\" 
                                class=\"rounded-circle shadow-lg\"
                                style=\"width: 180px; height: 180px; object-fit: cover; border: 5px solid #0463f1;\">
                            <span class=\"position-absolute bottom-0 end-0 
                                ";
            // line 90
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "online", [], "any", false, false, false, 90)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-success";
            } else {
                yield "bg-secondary";
            }
            yield " 
                                rounded-circle p-2 border border-2 border-white status-indicator\"
                                style=\"width: 25px; height: 25px;\"
                                data-bs-toggle=\"tooltip\" 
                                title=\"";
            // line 94
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "online", [], "any", false, false, false, 94)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("En ligne") : ("Hors ligne"));
            yield "\"></span>
                        </div>
                    ";
        } else {
            // line 97
            yield "                        <div class=\"position-relative d-inline-block\">
                            <div class=\"rounded-circle d-flex align-items-center justify-content-center mx-auto bg-gradient-primary text-white shadow-lg\"
                                style=\"width: 180px; height: 180px; border: 5px solid #0463f1;\">
                                <span class=\"display-2 fw-bold\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 100))), "html", null, true);
            yield "</span>
                            </div>
                            <span class=\"position-absolute bottom-0 end-0 
                                ";
            // line 103
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "online", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "bg-success";
            } else {
                yield "bg-secondary";
            }
            yield " 
                                rounded-circle p-2 border border-2 border-white status-indicator\"
                                style=\"width: 25px; height: 25px;\"
                                data-bs-toggle=\"tooltip\" 
                                title=\"";
            // line 107
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "online", [], "any", false, false, false, 107)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("En ligne") : ("Hors ligne"));
            yield "\"></span>
                        </div>
                    ";
        }
        // line 110
        yield "                    
                    <h3 class=\"mt-3 mb-1\">";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 111), "html", null, true);
        yield "</h3>
                    <p class=\"text-muted mb-3\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "email", [], "any", false, false, false, 112), "html", null, true);
        yield "</p>
                    
                    <div class=\"d-grid gap-2\">
                        <a href=\"tel:";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "phone", [], "any", false, false, false, 115), "html", null, true);
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"bi bi-telephone me-2\"></i>";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "phone", [], "any", false, false, false, 116), "html", null, true);
        yield "
                        </a>
                        <a href=\"mailto:";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "email", [], "any", false, false, false, 118), "html", null, true);
        yield "\" class=\"btn btn-outline-info\">
                            <i class=\"bi bi-envelope me-2\"></i>Envoyer un email
                        </a>
                    </div>
                </div>
                <div class=\"card-footer bg-light text-center\">
                    <small class=\"text-muted\">
                        <i class=\"bi bi-calendar-plus me-1\"></i>
                        Membre depuis ";
        // line 126
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "createdAt", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "createdAt", [], "any", false, false, false, 126), "d/m/Y à H:i"), "html", null, true)) : ("N/A"));
        yield "
                    </small>
                </div>
            </div>
            
            <!-- Carte entreprise -->
            <div class=\"card shadow-lg border-0\">
                <div class=\"card-header bg-gradient-success text-white\">
                    <h5 class=\"card-title mb-0\">
                        <i class=\"bi bi-building me-2\"></i>Entreprise
                    </h5>
                </div>
                <div class=\"card-body\">
                    ";
        // line 139
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 140
            yield "                        <div class=\"d-flex align-items-center mb-3\">
                            ";
            // line 141
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 141), "logo", [], "any", false, false, false, 141)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 142
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/logos/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 142), "logo", [], "any", false, false, false, 142))), "html", null, true);
                yield "\" 
                                     alt=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 143), "companyName", [], "any", false, false, false, 143), "html", null, true);
                yield "\" 
                                     class=\"rounded me-3\"
                                     style=\"width: 50px; height: 50px; object-fit: cover;\">
                            ";
            } else {
                // line 147
                yield "                                <div class=\"rounded-circle bg-gradient-primary text-white d-flex align-items-center justify-content-center me-3\"
                                     style=\"width: 50px; height: 50px;\">
                                    <span class=\"fw-bold\">";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 149), "companyName", [], "any", false, false, false, 149))), "html", null, true);
                yield "</span>
                                </div>
                            ";
            }
            // line 152
            yield "                            <div>
                                <h6 class=\"mb-1\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 153), "companyName", [], "any", false, false, false, 153), "html", null, true);
            yield "</h6>
                                <span class=\"badge plan-";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 154), "currentPlan", [], "any", false, false, false, 154), "html", null, true);
            yield "\">
                                    ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 155), "currentPlanLabel", [], "any", false, false, false, 155), "html", null, true);
            yield "
                                </span>
                            </div>
                        </div>
                        <hr>
                        <div class=\"small\">
                            <div class=\"d-flex justify-content-between mb-2\">
                                <span class=\"text-muted\">Statut entreprise</span>
                                ";
            // line 163
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 163), "hmaActive", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 164
                yield "                                    <span class=\"badge bg-success\">Active</span>
                                ";
            } else {
                // line 166
                yield "                                    <span class=\"badge bg-dark\">Bloquée</span>
                                ";
            }
            // line 168
            yield "                            </div>
                            <div class=\"d-flex justify-content-between\">
                                <span class=\"text-muted\">Utilisateurs</span>
                                <span class=\"fw-semibold\">";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "hmaServiceId", [], "any", false, false, false, 171), "users", [], "any", false, false, false, 171)), "html", null, true);
            yield "</span>
                            </div>
                        </div>
                    ";
        } else {
            // line 175
            yield "                        <div class=\"text-center py-4\">
                            <i class=\"bi bi-building-x display-4 text-muted mb-3\"></i>
                            <p class=\"text-muted\">Utilisateur indépendant</p>
                        </div>
                    ";
        }
        // line 180
        yield "                </div>
            </div>
        </div>
        
        <!-- Colonne de droite - Informations détaillées -->
        <div class=\"col-lg-8\">
            <div class=\"row\">
                <!-- Informations personnelles -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-0 h-100\">
                        <div class=\"card-header bg-gradient-info text-white\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-info-circle me-2\"></i>Informations personnelles
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">Nom complet</span>
                                    <span class=\"fw-semibold\">";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "fullName", [], "any", false, false, false, 199), "html", null, true);
        yield "</span>
                                </li>
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">Email</span>
                                    <a href=\"mailto:";
        // line 203
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "email", [], "any", false, false, false, 203), "html", null, true);
        yield "\" class=\"fw-semibold text-decoration-none\">
                                        ";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "email", [], "any", false, false, false, 204), "html", null, true);
        yield "
                                        <i class=\"bi bi-box-arrow-up-right ms-1 small\"></i>
                                    </a>
                                </li>
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">Téléphone</span>
                                    <a href=\"tel:";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "phone", [], "any", false, false, false, 210), "html", null, true);
        yield "\" class=\"fw-semibold text-decoration-none\">
                                        ";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "phone", [], "any", false, false, false, 211), "html", null, true);
        yield "
                                        <i class=\"bi bi-box-arrow-up-right ms-1 small\"></i>
                                    </a>
                                </li>
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">Date d'embauche</span>
                                    <span class=\"fw-semibold\">
                                        ";
        // line 218
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "employmentDate", [], "any", false, false, false, 218)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 219
            yield "                                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "employmentDate", [], "any", false, false, false, 219), "d/m/Y"), "html", null, true);
            yield "
                                        ";
        } else {
            // line 221
            yield "                                            <span class=\"text-muted\">Non renseignée</span>
                                        ";
        }
        // line 223
        yield "                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Informations système -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-0 h-100\">
                        <div class=\"card-header bg-gradient-secondary text-white\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-gear me-2\"></i>Informations système
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">ID Utilisateur</span>
                                    <span class=\"badge bg-primary\">#";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "id", [], "any", false, false, false, 242), "html", null, true);
        yield "</span>
                                </li>
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">Rôles</span>
                                    <div>
                                        ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "roles", [], "any", false, false, false, 247));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 248
            yield "                                            ";
            if (($context["role"] != "ROLE_USER")) {
                // line 249
                yield "                                                <span class=\"badge bg-info me-1\">
                                                    ";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::lower($this->env->getCharset(), Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => ""]))), "html", null, true);
                yield "
                                                </span>
                                            ";
            }
            // line 253
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        yield "                                    </div>
                                </li>
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">Statut admin</span>
                                    ";
        // line 258
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isActive", [], "any", false, false, false, 258)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 259
            yield "                                        <span class=\"badge bg-success\">Actif</span>
                                    ";
        } else {
            // line 261
            yield "                                        <span class=\"badge bg-danger\">Inactif</span>
                                    ";
        }
        // line 263
        yield "                                </li>
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">Statut quota</span>
                                    ";
        // line 266
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "subscriptionActive", [], "any", false, false, false, 266)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 267
            yield "                                        <span class=\"badge bg-success\">Inclus</span>
                                    ";
        } else {
            // line 269
            yield "                                        <span class=\"badge bg-warning\">Hors quota</span>
                                    ";
        }
        // line 271
        yield "                                </li>
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">1ère connexion</span>
                                    ";
        // line 274
        if (( !CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "passwordChanged", [], "any", false, false, false, 274) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "isHmaOwner", [], "any", false, false, false, 274))) {
            // line 275
            yield "                                        <span class=\"badge bg-warning text-dark\">En attente</span>
                                    ";
        } else {
            // line 277
            yield "                                        <span class=\"badge bg-success\">Effectuée</span>
                                    ";
        }
        // line 279
        yield "                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Statistiques -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-0 h-100\">
                        <div class=\"card-header bg-gradient-warning text-white\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-bar-chart me-2\"></i>Statistiques d'activité
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"row g-3\">
                                <div class=\"col-4\">
                                    <div class=\"stat-box bg-light rounded-3 p-3 text-center\">
                                        <div class=\"h3 mb-1 fw-bold text-primary\">";
        // line 297
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "products", [], "any", false, false, false, 297)), "html", null, true);
        yield "</div>
                                        <small class=\"text-muted\">Produits</small>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"stat-box bg-light rounded-3 p-3 text-center\">
                                        <div class=\"h3 mb-1 fw-bold text-success\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "orders", [], "any", false, false, false, 303)), "html", null, true);
        yield "</div>
                                        <small class=\"text-muted\">Commandes</small>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"stat-box bg-light rounded-3 p-3 text-center\">
                                        <div class=\"h3 mb-1 fw-bold text-info\">";
        // line 309
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "stockMovements", [], "any", false, false, false, 309)), "html", null, true);
        yield "</div>
                                        <small class=\"text-muted\">Mouvements</small>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"stat-box bg-light rounded-3 p-3 text-center\">
                                        <div class=\"h3 mb-1 fw-bold text-warning\">";
        // line 315
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "categories", [], "any", false, false, false, 315)), "html", null, true);
        yield "</div>
                                        <small class=\"text-muted\">Catégories</small>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"stat-box bg-light rounded-3 p-3 text-center\">
                                        <div class=\"h3 mb-1 fw-bold text-danger\">";
        // line 321
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "purchases", [], "any", false, false, false, 321)), "html", null, true);
        yield "</div>
                                        <small class=\"text-muted\">Achats</small>
                                    </div>
                                </div>
                                <div class=\"col-4\">
                                    <div class=\"stat-box bg-light rounded-3 p-3 text-center\">
                                        <div class=\"h3 mb-1 fw-bold text-secondary\">";
        // line 327
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "stockMovements", [], "any", false, false, false, 327)), "html", null, true);
        yield "</div>
                                        <small class=\"text-muted\">Stock</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dates importantes -->
                <div class=\"col-md-6 mb-4\">
                    <div class=\"card shadow-lg border-0 h-100\">
                        <div class=\"card-header bg-gradient-info text-white\">
                            <h5 class=\"card-title mb-0\">
                                <i class=\"bi bi-calendar me-2\"></i>Dates importantes
                            </h5>
                        </div>
                        <div class=\"card-body\">
                            <ul class=\"list-group list-group-flush\">
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">
                                        <i class=\"bi bi-plus-circle me-2\"></i>Date de création
                                    </span>
                                    <span class=\"fw-semibold\">
                                        ";
        // line 351
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "createdAt", [], "any", false, false, false, 351)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "createdAt", [], "any", false, false, false, 351), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "
                                    </span>
                                </li>
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">
                                        <i class=\"bi bi-pencil me-2\"></i>Dernière modification
                                    </span>
                                    <span class=\"fw-semibold\">
                                        ";
        // line 359
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "updatedAt", [], "any", false, false, false, 359)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "updatedAt", [], "any", false, false, false, 359), "d/m/Y H:i"), "html", null, true)) : ("N/A"));
        yield "
                                    </span>
                                </li>
                                <li class=\"list-group-item d-flex justify-content-between align-items-center px-0\">
                                    <span class=\"text-muted\">
                                        <i class=\"bi bi-briefcase me-2\"></i>Date d'embauche
                                    </span>
                                    <span class=\"fw-semibold\">
                                        ";
        // line 367
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "employmentDate", [], "any", false, false, false, 367)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["target_user"] ?? null), "employmentDate", [], "any", false, false, false, 367), "d/m/Y"), "html", null, true)) : ("Non renseignée"));
        yield "
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal de confirmation pour toggle status -->
<div class=\"modal fade\" id=\"toggleStatusModal\" tabindex=\"-1\" aria-labelledby=\"toggleStatusModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-0\">
            <div class=\"modal-header bg-warning border-0\">
                <h5 class=\"modal-title text-white\" id=\"toggleStatusModalLabel\">
                    <i class=\"bi bi-exclamation-triangle me-2\"></i>
                    Confirmation
                </h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body text-center py-4\">
                <div class=\"mb-4\">
                    <i class=\"bi bi-question-circle-fill text-warning\" style=\"font-size: 4rem;\"></i>
                </div>
                <h4 id=\"toggleStatusMessage\" class=\"mb-3\"></h4>
                <p class=\"text-muted mb-0\">Cette action peut être annulée à tout moment.</p>
            </div>
            <div class=\"modal-footer border-0 justify-content-center\">
                <button type=\"button\" class=\"btn btn-outline-secondary px-4\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x me-2\"></i>Annuler
                </button>
                <form id=\"toggleStatusForm\" method=\"post\" class=\"d-inline\">
                    <input type=\"hidden\" name=\"_token\" id=\"toggleStatusToken\">
                    <button type=\"submit\" class=\"btn btn-warning px-4\">
                        <i class=\"bi bi-check me-2\"></i>Confirmer
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
";
        yield from [];
    }

    // line 413
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 414
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialiser tous les tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    });
    
    // Gestion du toggle status
    const toggleButtons = document.querySelectorAll('.toggle-status-btn');
    const toggleModal = new bootstrap.Modal(document.getElementById('toggleStatusModal'));
    const toggleForm = document.getElementById('toggleStatusForm');
    const toggleToken = document.getElementById('toggleStatusToken');
    const toggleMessage = document.getElementById('toggleStatusMessage');
    
    toggleButtons.forEach(button => {
        button.addEventListener('click', function() {
            const userId = this.dataset.userId;
            const userName = this.dataset.userName;
            const currentStatus = this.dataset.currentStatus;
            const csrfToken = this.dataset.csrfToken;
            
            const action = currentStatus === 'active' ? 'désactiver' : 'activer';
            const actionColor = currentStatus === 'active' ? 'danger' : 'success';
            
            toggleMessage.innerHTML = `Êtes-vous sûr de vouloir <strong class=\"text-\${actionColor}\">\${action}</strong> l'utilisateur <strong>\${userName}</strong> ?`;
            
            toggleForm.action = `/admin/user/\${userId}/toggle-status`;
            toggleToken.value = csrfToken;
            
            toggleModal.show();
        });
    });
});
</script>
";
        yield from [];
    }

    // line 452
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 453
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #667eea 0%, #0463f1 100%) !important;
}
.bg-gradient-success {
    background: linear-gradient(135deg, #48bb78 0%, #38a169 100%) !important;
}
.bg-gradient-info {
    background: linear-gradient(135deg, #4299e1 0%, #3182ce 100%) !important;
}
.bg-gradient-warning {
    background: linear-gradient(135deg, #ecc94b 0%, #d69e2e 100%) !important;
}
.bg-gradient-secondary {
    background: linear-gradient(135deg, #a0aec0 0%, #718096 100%) !important;
}
.bg-gradient-danger {
    background: linear-gradient(135deg, #f56565 0%, #e53e3e 100%) !important;
}

.plan-premium {
    background: linear-gradient(135deg, #f6ad55 0%, #dd6b20 100%);
    color: white;
}
.plan-basic {
    background: linear-gradient(135deg, #4299e1 0%, #3182ce 100%);
    color: white;
}
.plan-freemium {
    background: linear-gradient(135deg, #a0aec0 0%, #718096 100%);
    color: white;
}
.plan-trial {
    background: linear-gradient(135deg, #9f7aea 0%, #805ad5 100%);
    color: white;
}

.icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

.bg-opacity-20 {
    background-color: rgba(255, 255, 255, 0.2) !important;
}

.list-group-item {
    border: none;
    border-bottom: 1px solid rgba(0,0,0,0.05);
    background: transparent;
    padding: 12px 0;
}

.list-group-item:last-child {
    border-bottom: none;
}

.stat-box {
    transition: all 0.3s ease;
    border: 1px solid transparent;
}

.stat-box:hover {
    transform: translateY(-5px);
    border-color: #0463f1;
    box-shadow: 0 10px 20px rgba(4, 99, 241, 0.1);
}

.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px;
    overflow: hidden;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15) !important;
}

.card-header {
    border-bottom: none;
}

.btn {
    border-radius: 10px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.15);
}

.modal-content {
    border-radius: 20px;
    overflow: hidden;
}

.modal-header {
    padding: 1.5rem;
}

.modal-header.bg-warning {
    background: linear-gradient(135deg, #ecc94b 0%, #d69e2e 100%) !important;
}

.btn-close-white {
    filter: brightness(0) invert(1);
}

/* Animation pour les statistiques */
@keyframes countUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.stat-box .h3 {
    animation: countUp 0.5s ease-out;
}

/* Badge de statut en temps réel */
.position-absolute.bottom-0.end-0 {
    box-shadow: 0 0 0 3px white;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

/* Indicateur de statut en ligne */
.status-indicator {
    box-shadow: 0 0 0 3px white;
    transition: all 0.3s ease;
}
.status-indicator.bg-success {
    animation: pulse-green 2s infinite;
}
.status-indicator.bg-secondary {
    animation: pulse-gray 2s infinite;
}
@keyframes pulse-green {
    0% { box-shadow: 0 0 0 0 rgba(40, 167, 69, 0.7), 0 0 0 3px white; }
    70% { box-shadow: 0 0 0 10px rgba(40, 167, 69, 0), 0 0 0 3px white; }
    100% { box-shadow: 0 0 0 0 rgba(40, 167, 69, 0), 0 0 0 3px white; }
}
@keyframes pulse-gray {
    0% { box-shadow: 0 0 0 0 rgba(108, 117, 125, 0.7), 0 0 0 3px white; }
    70% { box-shadow: 0 0 0 10px rgba(108, 117, 125, 0), 0 0 0 3px white; }
    100% { box-shadow: 0 0 0 0 rgba(108, 117, 125, 0), 0 0 0 3px white; }
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
        return "admin/user/show.html.twig";
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
        return array (  791 => 453,  784 => 452,  742 => 414,  735 => 413,  685 => 367,  674 => 359,  663 => 351,  636 => 327,  627 => 321,  618 => 315,  609 => 309,  600 => 303,  591 => 297,  571 => 279,  567 => 277,  563 => 275,  561 => 274,  556 => 271,  552 => 269,  548 => 267,  546 => 266,  541 => 263,  537 => 261,  533 => 259,  531 => 258,  525 => 254,  519 => 253,  513 => 250,  510 => 249,  507 => 248,  503 => 247,  495 => 242,  474 => 223,  470 => 221,  464 => 219,  462 => 218,  452 => 211,  448 => 210,  439 => 204,  435 => 203,  428 => 199,  407 => 180,  400 => 175,  393 => 171,  388 => 168,  384 => 166,  380 => 164,  378 => 163,  367 => 155,  363 => 154,  359 => 153,  356 => 152,  350 => 149,  346 => 147,  339 => 143,  334 => 142,  332 => 141,  329 => 140,  327 => 139,  311 => 126,  300 => 118,  295 => 116,  291 => 115,  285 => 112,  281 => 111,  278 => 110,  272 => 107,  261 => 103,  255 => 100,  250 => 97,  244 => 94,  233 => 90,  226 => 86,  222 => 85,  219 => 84,  217 => 83,  201 => 69,  195 => 66,  191 => 65,  187 => 64,  183 => 63,  179 => 62,  175 => 61,  171 => 60,  168 => 59,  165 => 58,  157 => 54,  155 => 53,  149 => 50,  142 => 45,  136 => 41,  130 => 37,  127 => 36,  122 => 33,  118 => 32,  113 => 31,  107 => 27,  105 => 26,  100 => 24,  96 => 23,  92 => 22,  87 => 20,  73 => 8,  66 => 7,  54 => 5,  43 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "admin/user/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\user\\show.html.twig");
    }
}
