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

/* admin/stock_movement/show.html.twig */
class __TwigTemplate_07318256dc850866658da5c6fafc35e7 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_movement/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/stock_movement/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Détail mouvement - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 4, $this->source); })()), "movementTypeLabel", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    :root {
        --primary: #0463f1;
        --primary-dark: #0350c4;
        --success: #10b981;
        --success-dark: #059669;
        --warning: #f59e0b;
        --warning-dark: #d97706;
        --danger: #ef4444;
        --danger-dark: #dc2626;
        --info: #0ea5e9;
        --info-dark: #0284c7;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-400: #9ca3af;
        --gray-500: #6b7280;
        --gray-600: #4b5563;
        --gray-700: #374151;
        --gray-900: #111827;
        --radius-lg: 16px;
        --radius-md: 12px;
        --radius-sm: 8px;
    }

    /* ============================================
       PAGE HERO — DÉGRADÉ SELON TYPE
    ============================================ */
    .page-hero {
        border-radius: var(--radius-lg);
        padding: 1.75rem 1.5rem;
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        color: #fff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }
    .page-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 280px;
        height: 280px;
        background: rgba(255,255,255,0.08);
        border-radius: 50%;
        pointer-events: none;
    }
    .page-hero::after {
        content: '';
        position: absolute;
        bottom: -40%;
        right: 15%;
        width: 180px;
        height: 180px;
        background: rgba(255,255,255,0.06);
        border-radius: 50%;
        pointer-events: none;
    }
    .page-hero.hero-primary { background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%); }
    .page-hero.hero-success { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
    .page-hero.hero-danger  { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); }
    .page-hero.hero-warning { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }
    .page-hero.hero-info    { background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); }
    .page-hero.hero-secondary { background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%); }

    .page-hero .hero-content {
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    .page-hero .hero-icon {
        width: 64px;
        height: 64px;
        border-radius: var(--radius-md);
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        color: #fff;
        flex-shrink: 0;
        backdrop-filter: blur(6px);
    }
    .page-hero .hero-icon i {
        color: #fff !important;
    }
    .page-hero .hero-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0;
        color: #fff;
        line-height: 1.2;
    }
    .page-hero .hero-subtitle {
        font-size: 0.88rem;
        opacity: 0.92;
        margin: 0.25rem 0 0 0;
        color: #fff;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .page-hero .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.3rem 0.7rem;
        border-radius: 999px;
        background: rgba(255,255,255,0.22);
        backdrop-filter: blur(4px);
        font-size: 0.78rem;
        font-weight: 600;
        color: #fff;
    }
    .page-hero .hero-badge i {
        color: #fff !important;
    }
    .page-hero .hero-back-btn {
        background: rgba(255,255,255,0.18);
        color: #fff !important;
        border: 1px solid rgba(255,255,255,0.3);
        padding: 0.55rem 1.1rem;
        border-radius: var(--radius-sm);
        font-weight: 600;
        font-size: 0.85rem;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        text-decoration: none;
        transition: all 0.2s ease;
        backdrop-filter: blur(4px);
        white-space: nowrap;
    }
    .page-hero .hero-back-btn:hover {
        background: rgba(255,255,255,0.3);
        color: #fff !important;
        transform: translateX(-2px);
    }
    .page-hero .hero-back-btn i {
        color: #fff !important;
    }

    .breadcrumb-simple {
        list-style: none;
        padding: 0;
        margin: 0 0 0.75rem 0;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.78rem;
        opacity: 0.9;
    }
    .breadcrumb-simple li {
        color: #fff;
        display: flex;
        align-items: center;
    }
    .breadcrumb-simple li a {
        color: #fff !important;
        text-decoration: none;
        opacity: 0.85;
        transition: opacity 0.15s;
    }
    .breadcrumb-simple li a:hover {
        opacity: 1;
        text-decoration: underline;
    }
    .breadcrumb-simple li + li::before {
        content: '/';
        color: rgba(255,255,255,0.7) !important;
        margin-right: 0.4rem;
    }
    .breadcrumb-simple li.active {
        opacity: 1;
        font-weight: 600;
    }

    /* ============================================
       CARDS
    ============================================ */
    .card-clean {
        background: #fff;
        border-radius: var(--radius-lg);
        border: 1px solid #eef2f7;
        box-shadow: 0 2px 12px rgba(15, 23, 42, 0.04);
        transition: box-shadow 0.2s ease, transform 0.2s ease;
        overflow: hidden;
        margin-bottom: 1.25rem;
    }
    .card-clean:hover {
        box-shadow: 0 6px 20px rgba(15, 23, 42, 0.08);
    }
    .card-clean-header {
        padding: 1rem 1.25rem;
        border-bottom: 1px solid #eef2f7;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 0.75rem;
        flex-wrap: wrap;
        background: linear-gradient(180deg, #fafbfc 0%, #ffffff 100%);
    }
    .card-clean-header h5 {
        margin: 0;
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--gray-700);
        display: flex;
        align-items: center;
        gap: 0.55rem;
    }
    .card-clean-header h5 .header-icon {
        width: 30px;
        height: 30px;
        border-radius: var(--radius-sm);
        background: #eff6ff;
        color: var(--primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
    }
    .card-clean-body {
        padding: 1.25rem;
    }

    /* ============================================
       INFO GRID
    ============================================ */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.9rem 1.5rem;
    }
    .info-item {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
        min-width: 0;
    }
    .info-item .info-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--gray-500);
        letter-spacing: 0.6px;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }
    .info-item .info-label i {
        color: var(--gray-400);
        font-size: 0.75rem;
    }
    .info-item .info-value {
        font-size: 0.92rem;
        font-weight: 600;
        color: var(--gray-900);
        word-break: break-word;
        line-height: 1.35;
    }
    .info-item.full-width {
        grid-column: 1 / -1;
    }

    /* ============================================
       USER CARD — HORIZONTAL
    ============================================ */
    .user-profile-horizontal {
        display: flex;
        align-items: center;
        gap: 1.25rem;
        padding: 0.5rem 0;
        flex-wrap: wrap;
    }
    .user-avatar-wrapper {
        position: relative;
        flex-shrink: 0;
    }
    .user-avatar-lg {
        width: 84px;
        height: 84px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        box-shadow: 0 6px 18px rgba(15, 23, 42, 0.14);
        display: block;
    }
    .user-avatar-placeholder-lg {
        width: 84px;
        height: 84px;
        border-radius: 50%;
        background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
        color: #4338ca;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        border: 4px solid #fff;
        box-shadow: 0 6px 18px rgba(15, 23, 42, 0.14);
    }
    .user-profile-horizontal .user-meta {
        min-width: 0;
        flex: 1;
    }
    .user-profile-horizontal .user-name {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--gray-900);
        margin: 0 0 0.35rem 0;
        word-break: break-word;
        line-height: 1.2;
    }
    .user-profile-horizontal .user-email {
        font-size: 0.9rem;
        color: var(--gray-600);
        word-break: break-word;
        display: flex;
        align-items: center;
        gap: 0.4rem;
        margin-bottom: 0.5rem;
    }
    .user-profile-horizontal .user-email i {
        color: var(--gray-400);
        font-size: 0.85rem;
        flex-shrink: 0;
    }
    .user-profile-horizontal .user-role-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.3rem 0.75rem;
        border-radius: 999px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    /* ============================================
       BADGES
    ============================================ */
    .badge-clean {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.35rem 0.75rem;
        border-radius: 999px;
        font-size: 0.78rem;
        font-weight: 600;
        white-space: nowrap;
    }
    .badge-clean i {
        color: inherit !important;
        font-size: 0.75rem;
    }

    /* ============================================
       ASSOCIATED ELEMENT CARD
    ============================================ */
    .linked-card {
        text-align: center;
        padding: 0.75rem 0;
    }
    .linked-icon-circle {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.85rem;
        margin-bottom: 0.85rem;
        color: #fff !important;
        box-shadow: 0 8px 20px rgba(15, 23, 42, 0.1);
    }
    .linked-icon-circle i {
        color: #fff !important;
    }
    .linked-icon-circle.bg-primary { background: linear-gradient(135deg, #0463f1, #0350c4); }
    .linked-icon-circle.bg-success { background: linear-gradient(135deg, #10b981, #059669); }
    .linked-icon-circle.bg-danger  { background: linear-gradient(135deg, #ef4444, #dc2626); }
    .linked-icon-circle.bg-warning { background: linear-gradient(135deg, #f59e0b, #d97706); }
    .linked-icon-circle.bg-info    { background: linear-gradient(135deg, #0ea5e9, #0284c7); }

    .linked-title {
        font-size: 1rem;
        font-weight: 700;
        color: var(--gray-900);
        margin: 0 0 0.75rem 0;
    }
    .linked-summary {
        background: var(--gray-50);
        border-radius: var(--radius-md);
        padding: 0.85rem 1rem;
        text-align: left;
        margin-bottom: 0.85rem;
        max-width: 480px;
        margin-left: auto;
        margin-right: auto;
    }
    .linked-summary .row-line {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0.75rem;
        padding: 0.35rem 0;
        font-size: 0.85rem;
    }
    .linked-summary .row-line:not(:last-child) {
        border-bottom: 1px dashed var(--gray-200);
    }
    .linked-summary .row-line .label {
        color: var(--gray-500);
        font-weight: 500;
        flex-shrink: 0;
    }
    .linked-summary .row-line .value {
        color: var(--gray-900);
        font-weight: 700;
        text-align: right;
        word-break: break-word;
    }

    /* ============================================
       HISTORY TABLE
    ============================================ */
    .history-table {
        width: 100%;
        margin: 0;
        border-collapse: separate;
        border-spacing: 0;
    }
    .history-table thead th {
        background: #f8fafc;
        color: var(--gray-600);
        font-size: 0.72rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 0.75rem 1rem;
        border-bottom: 1px solid var(--gray-200);
        white-space: nowrap;
    }
    .history-table tbody td {
        padding: 0.85rem 1rem;
        font-size: 0.85rem;
        color: var(--gray-700);
        border-bottom: 1px solid #f1f5f9;
        vertical-align: middle;
    }
    .history-table tbody tr:last-child td {
        border-bottom: none;
    }
    .history-table tbody tr:hover td {
        background: #fafbfc;
    }
    .history-table tbody tr.is-current {
        background: #eff6ff;
    }
    .history-table tbody tr.is-current:hover td {
        background: #e0edff;
    }

    /* Mobile history cards */
    .history-cards-mobile {
        display: none;
        padding: 0.75rem;
        gap: 0.65rem;
        flex-direction: column;
    }
    .history-card-item {
        background: #fff;
        border: 1px solid #eef2f7;
        border-radius: var(--radius-md);
        padding: 0.85rem;
        transition: box-shadow 0.2s;
    }
    .history-card-item:hover {
        box-shadow: 0 4px 14px rgba(15, 23, 42, 0.06);
    }
    .history-card-item.is-current {
        background: #eff6ff;
        border-color: #bfdbfe;
    }
    .history-card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 0.5rem;
        margin-bottom: 0.6rem;
        padding-bottom: 0.6rem;
        border-bottom: 1px dashed var(--gray-200);
    }
    .history-card-date {
        font-weight: 700;
        font-size: 0.85rem;
        color: var(--gray-900);
    }
    .history-card-time {
        font-size: 0.72rem;
        color: var(--gray-500);
    }
    .history-card-rows {
        display: flex;
        flex-direction: column;
        gap: 0.35rem;
        margin-bottom: 0.65rem;
    }
    .history-card-row {
        display: flex;
        justify-content: space-between;
        gap: 0.5rem;
        font-size: 0.82rem;
    }
    .history-card-row .label {
        color: var(--gray-500);
        flex-shrink: 0;
    }
    .history-card-row .value {
        color: var(--gray-900);
        font-weight: 600;
        text-align: right;
        word-break: break-word;
    }
    .history-card-actions {
        display: flex;
        justify-content: flex-end;
    }

    /* ============================================
       ALERTS
    ============================================ */
    .alert-clean {
        display: flex;
        gap: 0.65rem;
        align-items: flex-start;
        padding: 0.85rem 1rem;
        border-radius: var(--radius-md);
        font-size: 0.85rem;
        border: none;
        max-width: 480px;
        margin-left: auto;
        margin-right: auto;
    }
    .alert-clean i {
        font-size: 1rem;
        flex-shrink: 0;
        margin-top: 0.1rem;
        color: inherit !important;
    }

    /* ============================================
       RESPONSIVE
    ============================================ */
    @media (max-width: 991px) {
        .info-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            padding-top: 0.75rem !important;
        }
        .page-hero {
            padding: 1.25rem 1.15rem;
            border-radius: var(--radius-md);
        }
        .page-hero .hero-content {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        .page-hero .hero-actions {
            width: 100%;
        }
        .page-hero .hero-back-btn {
            width: 100%;
            justify-content: center;
        }
        .page-hero .hero-icon {
            width: 52px;
            height: 52px;
            font-size: 1.4rem;
        }
        .page-hero .hero-title {
            font-size: 1.2rem;
        }
        .page-hero .hero-subtitle {
            font-size: 0.8rem;
        }

        .card-clean-header {
            padding: 0.85rem 1rem;
        }
        .card-clean-header h5 {
            font-size: 0.88rem;
        }
        .card-clean-body {
            padding: 1rem;
        }

        .history-table-wrapper {
            display: none;
        }
        .history-cards-mobile {
            display: flex;
        }

        .user-avatar-lg,
        .user-avatar-placeholder-lg {
            width: 68px;
            height: 68px;
            font-size: 1.6rem;
        }
        .user-profile-horizontal {
            gap: 1rem;
        }
        .user-profile-horizontal .user-name {
            font-size: 1.05rem;
        }
        .user-profile-horizontal .user-email {
            font-size: 0.82rem;
        }

        .linked-icon-circle {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }
    }

    @media (max-width: 480px) {
        .info-item .info-value {
            font-size: 0.88rem;
        }
        .user-profile-horizontal {
            gap: 0.85rem;
        }
        .user-avatar-lg,
        .user-avatar-placeholder-lg {
            width: 58px;
            height: 58px;
            font-size: 1.3rem;
            border-width: 3px;
        }
        .user-profile-horizontal .user-name {
            font-size: 0.98rem;
        }
        .user-profile-horizontal .user-email {
            font-size: 0.78rem;
        }
        .linked-summary {
            padding: 0.75rem 0.85rem;
        }
        .linked-summary .row-line {
            font-size: 0.8rem;
        }
    }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 678
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 680
        $context["movementType"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 680, $this->source); })()), "movementType", [], "any", false, false, false, 680);
        // line 681
        $context["heroClass"] = "hero-secondary";
        // line 682
        if (((isset($context["movementType"]) || array_key_exists("movementType", $context) ? $context["movementType"] : (function () { throw new RuntimeError('Variable "movementType" does not exist.', 682, $this->source); })()) == "purchase_in")) {
            // line 683
            yield "    ";
            $context["heroClass"] = "hero-success";
        } elseif ((        // line 684
(isset($context["movementType"]) || array_key_exists("movementType", $context) ? $context["movementType"] : (function () { throw new RuntimeError('Variable "movementType" does not exist.', 684, $this->source); })()) == "sale_out")) {
            // line 685
            yield "    ";
            $context["heroClass"] = "hero-danger";
        } elseif (CoreExtension::inFilter(        // line 686
(isset($context["movementType"]) || array_key_exists("movementType", $context) ? $context["movementType"] : (function () { throw new RuntimeError('Variable "movementType" does not exist.', 686, $this->source); })()), ["return_in", "return_out"])) {
            // line 687
            yield "    ";
            $context["heroClass"] = "hero-info";
        } elseif (CoreExtension::inFilter(        // line 688
(isset($context["movementType"]) || array_key_exists("movementType", $context) ? $context["movementType"] : (function () { throw new RuntimeError('Variable "movementType" does not exist.', 688, $this->source); })()), ["adjustment_in", "adjustment_out"])) {
            // line 689
            yield "    ";
            $context["heroClass"] = "hero-warning";
        } elseif (CoreExtension::inFilter(        // line 690
(isset($context["movementType"]) || array_key_exists("movementType", $context) ? $context["movementType"] : (function () { throw new RuntimeError('Variable "movementType" does not exist.', 690, $this->source); })()), ["transfer_in", "transfer_out"])) {
            // line 691
            yield "    ";
            $context["heroClass"] = "hero-primary";
        }
        // line 693
        yield "
<div class=\"container-fluid px-4 py-3\">
    <div class=\"row\">
        <div class=\"col-12 col-xl-11 mx-auto\">

            <!-- ==========================================
                 HERO — EN-TÊTE DÉGRADÉ
            ========================================== -->
            <div class=\"page-hero ";
        // line 701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["heroClass"]) || array_key_exists("heroClass", $context) ? $context["heroClass"] : (function () { throw new RuntimeError('Variable "heroClass" does not exist.', 701, $this->source); })()), "html", null, true);
        yield "\">
                <ul class=\"breadcrumb-simple\">
                    <li><a href=\"";
        // line 703
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_dashboard");
        yield "\"><i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord</a></li>
                    <li><a href=\"";
        // line 704
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index");
        yield "\"><i class=\"fas fa-exchange-alt me-1\"></i> Mouvements</a></li>
                    <li class=\"active\">";
        // line 705
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 705, $this->source); })()), "movementTypeLabel", [], "any", false, false, false, 705), "html", null, true);
        yield "</li>
                </ul>

                <div class=\"hero-content\">
                    <div class=\"d-flex align-items-center gap-3 flex-grow-1\">
                        <div class=\"hero-icon\">
                            <i class=\"";
        // line 711
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 711, $this->source); })()), "movementTypeIcon", [], "any", false, false, false, 711), "html", null, true);
        yield "\"></i>
                        </div>
                        <div>
                            <h1 class=\"hero-title\">Détail du mouvement</h1>
                            <p class=\"hero-subtitle\">
                                <span class=\"hero-badge\">
                                    <i class=\"";
        // line 717
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 717, $this->source); })()), "movementTypeIcon", [], "any", false, false, false, 717), "html", null, true);
        yield "\"></i>
                                    ";
        // line 718
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 718, $this->source); })()), "movementTypeLabel", [], "any", false, false, false, 718), "html", null, true);
        yield "
                                </span>
                                <span class=\"hero-badge\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                    ";
        // line 722
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 722, $this->source); })()), "createdAt", [], "any", false, false, false, 722), "d/m/Y H:i"), "html", null, true);
        yield "
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class=\"hero-actions\">
                        <a href=\"";
        // line 729
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_index", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 729, $this->source); })()), "request", [], "any", false, false, false, 729), "query", [], "any", false, false, false, 729), "all", [], "any", false, false, false, 729)), "html", null, true);
        yield "\" class=\"hero-back-btn\">
                            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                        </a>
                    </div>
                </div>
            </div>

            <!-- ==========================================
                 BLOC UTILISATEUR (pleine largeur, horizontal)
            ========================================== -->
            <div class=\"card-clean\">
                <div class=\"card-clean-header\">
                    <h5>
                        <span class=\"header-icon\"><i class=\"fas fa-user\"></i></span>
                        Utilisateur
                    </h5>
                    ";
        // line 745
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 745, $this->source); })()), "user", [], "any", false, false, false, 745)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 746
            yield "                        <span class=\"badge-clean ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 746, $this->source); })()), "user", [], "any", false, false, false, 746), "roleBadgeClass", [], "any", false, false, false, 746), "html", null, true);
            yield "\">
                            <i class=\"";
            // line 747
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 747, $this->source); })()), "user", [], "any", false, false, false, 747), "roleIcon", [], "any", false, false, false, 747), "html", null, true);
            yield "\"></i>
                            ";
            // line 748
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 748, $this->source); })()), "user", [], "any", false, false, false, 748), "roleLabel", [], "any", false, false, false, 748), "html", null, true);
            yield "
                        </span>
                    ";
        }
        // line 751
        yield "                </div>
                <div class=\"card-clean-body\">
                    ";
        // line 753
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 753, $this->source); })()), "user", [], "any", false, false, false, 753)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 754
            yield "                        <div class=\"user-profile-horizontal\">
                            <div class=\"user-avatar-wrapper\">
                                ";
            // line 756
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 756, $this->source); })()), "user", [], "any", false, false, false, 756), "photo", [], "any", false, false, false, 756)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 757
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 757, $this->source); })()), "user", [], "any", false, false, false, 757), "photo", [], "any", false, false, false, 757))), "html", null, true);
                yield "\"
                                         alt=\"";
                // line 758
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 758, $this->source); })()), "user", [], "any", false, false, false, 758), "fullName", [], "any", false, false, false, 758), "html", null, true);
                yield "\"
                                         class=\"user-avatar-lg\"
                                         onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                                    <div class=\"user-avatar-placeholder-lg\" style=\"display: none;\">
                                        <i class=\"fas fa-users\"></i>
                                    </div>
                                ";
            } else {
                // line 765
                yield "                                    <div class=\"user-avatar-placeholder-lg\">
                                        <i class=\"fas fa-users\"></i>
                                    </div>
                                ";
            }
            // line 769
            yield "                            </div>
                            <div class=\"user-meta\">
                                <h6 class=\"user-name\">";
            // line 771
            yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 771, $this->source); })()), "user", [], "any", false, false, false, 771), "fullName", [], "any", false, false, false, 771)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 771, $this->source); })()), "user", [], "any", false, false, false, 771), "fullName", [], "any", false, false, false, 771), "html", null, true)) : ("Utilisateur"));
            yield "</h6>
                                <div class=\"user-email\">
                                    <i class=\"fas fa-envelope\"></i>
                                    <span>";
            // line 774
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 774, $this->source); })()), "user", [], "any", false, false, false, 774), "email", [], "any", false, false, false, 774), "html", null, true);
            yield "</span>
                                </div>
                                <span class=\"badge-clean ";
            // line 776
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 776, $this->source); })()), "user", [], "any", false, false, false, 776), "roleBadgeClass", [], "any", false, false, false, 776), "html", null, true);
            yield " user-role-badge\">
                                    <i class=\"";
            // line 777
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 777, $this->source); })()), "user", [], "any", false, false, false, 777), "roleIcon", [], "any", false, false, false, 777), "html", null, true);
            yield "\"></i>
                                    ";
            // line 778
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 778, $this->source); })()), "user", [], "any", false, false, false, 778), "roleLabel", [], "any", false, false, false, 778), "html", null, true);
            yield "
                                </span>
                            </div>
                        </div>
                    ";
        } else {
            // line 783
            yield "                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-robot fa-2x mb-2 opacity-50\"></i>
                            <p class=\"mb-0 small\">Mouvement automatique (système)</p>
                        </div>
                    ";
        }
        // line 788
        yield "                </div>
            </div>

            <!-- ==========================================
                 BLOC ÉLÉMENT ASSOCIÉ (pleine largeur)
            ========================================== -->
            <div class=\"card-clean\">
                <div class=\"card-clean-header\">
                    <h5>
                        <span class=\"header-icon\"><i class=\"fas fa-link\"></i></span>
                        Élément associé
                    </h5>
                </div>
                <div class=\"card-clean-body\">
                    ";
        // line 802
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 802, $this->source); })()), "referenceId", [], "any", false, false, false, 802)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 803
            yield "
                        ";
            // line 805
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 805, $this->source); })()), "movementType", [], "any", false, false, false, 805) == "sale_out")) {
                // line 806
                yield "                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-primary\">
                                    <i class=\"fas fa-shopping-cart\"></i>
                                </div>
                                <h6 class=\"linked-title\">Vente associée</h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date de la vente</span>
                                        <span class=\"value\">";
                // line 814
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 814, $this->source); })()), "createdAt", [], "any", false, false, false, 814), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité vendue</span>
                                        <span class=\"value\">";
                // line 818
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 818, $this->source); })()), "quantity", [], "any", false, false, false, 818), 0, ",", " "), "html", null, true);
                yield " unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Montant total</span>
                                        <span class=\"value\">";
                // line 822
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 822, $this->source); })()), "quantity", [], "any", false, false, false, 822) * ((CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "unitPrice", [], "any", true, true, false, 822)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 822, $this->source); })()), "unitPrice", [], "any", false, false, false, 822), 0)) : (0))), CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 822, $this->source); })()), "hmaService", [], "any", false, false, false, 822)), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                                <a href=\"";
                // line 825
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 825, $this->source); })()), "referenceId", [], "any", false, false, false, 825)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir la vente
                                </a>
                            </div>

                        ";
                // line 831
                yield "                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 831, $this->source); })()), "movementType", [], "any", false, false, false, 831) == "purchase_in")) {
                // line 832
                yield "                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-success\">
                                    <i class=\"fas fa-truck\"></i>
                                </div>
                                <h6 class=\"linked-title\">Achat associé</h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">N° commande</span>
                                        <span class=\"value\">
                                            ";
                // line 841
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 841, $this->source); })()), "purchaseItem", [], "any", false, false, false, 841)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 842
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 842, $this->source); })()), "purchaseItem", [], "any", false, false, false, 842), "purchase", [], "any", false, false, false, 842), "purchaseNumber", [], "any", false, false, false, 842), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 844
                    yield "                                                Référence #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 844, $this->source); })()), "referenceId", [], "any", false, false, false, 844), "html", null, true);
                    yield "
                                            ";
                }
                // line 846
                yield "                                        </span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Fournisseur</span>
                                        <span class=\"value\">
                                            ";
                // line 851
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 851, $this->source); })()), "purchaseItem", [], "any", false, false, false, 851)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 852
                    yield "                                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 852, $this->source); })()), "purchaseItem", [], "any", false, false, false, 852), "purchase", [], "any", false, false, false, 852), "supplier", [], "any", false, false, false, 852), "name", [], "any", false, false, false, 852), "html", null, true);
                    yield "
                                            ";
                } else {
                    // line 854
                    yield "                                                —
                                            ";
                }
                // line 856
                yield "                                        </span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité achetée</span>
                                        <span class=\"value\">";
                // line 860
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 860, $this->source); })()), "quantity", [], "any", false, false, false, 860), 0, ",", " "), "html", null, true);
                yield " unités</span>
                                    </div>
                                </div>
                                <a href=\"";
                // line 863
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("purchase_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 863, $this->source); })()), "referenceId", [], "any", false, false, false, 863)]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir l'achat
                                </a>
                            </div>

                        ";
                // line 869
                yield "                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 869, $this->source); })()), "movementType", [], "any", false, false, false, 869) == "return_in")) {
                // line 870
                yield "                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-info\">
                                    <i class=\"fas fa-undo-alt\"></i>
                                </div>
                                <h6 class=\"linked-title\">Retour client associé</h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">N° retour</span>
                                        <span class=\"value\">#";
                // line 878
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 878, $this->source); })()), "referenceId", [], "any", false, false, false, 878), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité retournée</span>
                                        <span class=\"value\">";
                // line 882
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 882, $this->source); })()), "quantity", [], "any", false, false, false, 882), 0, ",", " "), "html", null, true);
                yield " unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date</span>
                                        <span class=\"value\">";
                // line 886
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 886, $this->source); })()), "createdAt", [], "any", false, false, false, 886), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                                <a href=\"";
                // line 889
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("returns_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 889, $this->source); })()), "referenceId", [], "any", false, false, false, 889)]), "html", null, true);
                yield "\" class=\"btn btn-info text-white btn-sm\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le retour
                                </a>
                            </div>

                        ";
                // line 895
                yield "                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 895, $this->source); })()), "movementType", [], "any", false, false, false, 895) == "return_out")) {
                // line 896
                yield "                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-warning\">
                                    <i class=\"fas fa-truck-loading\"></i>
                                </div>
                                <h6 class=\"linked-title\">Retour fournisseur associé</h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">N° avoir</span>
                                        <span class=\"value\">#";
                // line 904
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 904, $this->source); })()), "referenceId", [], "any", false, false, false, 904), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité retournée</span>
                                        <span class=\"value\">";
                // line 908
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 908, $this->source); })()), "quantity", [], "any", false, false, false, 908), 0, ",", " "), "html", null, true);
                yield " unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date</span>
                                        <span class=\"value\">";
                // line 912
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 912, $this->source); })()), "createdAt", [], "any", false, false, false, 912), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                                <a href=\"";
                // line 915
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supplier_credit_note_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 915, $this->source); })()), "referenceId", [], "any", false, false, false, 915)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail
                                </a>
                            </div>

                        ";
                // line 921
                yield "                        ";
            } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 921, $this->source); })()), "movementType", [], "any", false, false, false, 921), ["adjustment_in", "adjustment_out"])) {
                // line 922
                yield "                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle ";
                // line 923
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 923, $this->source); })()), "movementType", [], "any", false, false, false, 923) == "adjustment_in")) ? ("bg-success") : ("bg-danger"));
                yield "\">
                                    <i class=\"fas ";
                // line 924
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 924, $this->source); })()), "movementType", [], "any", false, false, false, 924) == "adjustment_in")) ? ("fa-plus-circle") : ("fa-minus-circle"));
                yield "\"></i>
                                </div>
                                <h6 class=\"linked-title\">
                                    Ajustement de stock ";
                // line 927
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 927, $this->source); })()), "movementType", [], "any", false, false, false, 927) == "adjustment_in")) ? ("(+)") : ("(-)"));
                yield "
                                </h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">Raison</span>
                                        <span class=\"value\">";
                // line 932
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "notes", [], "any", true, true, false, 932)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 932, $this->source); })()), "notes", [], "any", false, false, false, 932), "Ajustement manuel")) : ("Ajustement manuel"))), "truncate", [40], "method", false, false, false, 932), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité</span>
                                        <span class=\"value\">";
                // line 936
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 936, $this->source); })()), "quantity", [], "any", false, false, false, 936), 0, ",", " "), "html", null, true);
                yield " unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date</span>
                                        <span class=\"value\">";
                // line 940
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 940, $this->source); })()), "createdAt", [], "any", false, false, false, 940), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                                <div class=\"alert-clean alert-";
                // line 943
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 943, $this->source); })()), "movementType", [], "any", false, false, false, 943) == "adjustment_in")) ? ("success") : ("danger"));
                yield " bg-";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 943, $this->source); })()), "movementType", [], "any", false, false, false, 943) == "adjustment_in")) ? ("success") : ("danger"));
                yield " bg-opacity-10 text-";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 943, $this->source); })()), "movementType", [], "any", false, false, false, 943) == "adjustment_in")) ? ("success") : ("danger"));
                yield "\">
                                    <i class=\"fas fa-info-circle\"></i>
                                    <span>Ajustement manuel — aucune vente ou achat associé.</span>
                                </div>
                            </div>

                        ";
                // line 950
                yield "                        ";
            } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 950, $this->source); })()), "movementType", [], "any", false, false, false, 950), ["transfer_in", "transfer_out"])) {
                // line 951
                yield "                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-primary\">
                                    <i class=\"fas fa-arrow-";
                // line 953
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 953, $this->source); })()), "movementType", [], "any", false, false, false, 953) == "transfer_in")) ? ("right") : ("left"));
                yield "\"></i>
                                </div>
                                <h6 class=\"linked-title\">
                                    Transfert ";
                // line 956
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 956, $this->source); })()), "movementType", [], "any", false, false, false, 956) == "transfer_in")) ? ("entrant") : ("sortant"));
                yield "
                                </h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">Référence</span>
                                        <span class=\"value\">";
                // line 961
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(((CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "notes", [], "any", true, true, false, 961)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 961, $this->source); })()), "notes", [], "any", false, false, false, 961), "Transfert")) : ("Transfert"))), "truncate", [30], "method", false, false, false, 961), "html", null, true);
                yield "</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité</span>
                                        <span class=\"value\">";
                // line 965
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 965, $this->source); })()), "quantity", [], "any", false, false, false, 965), 0, ",", " "), "html", null, true);
                yield " unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date</span>
                                        <span class=\"value\">";
                // line 969
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 969, $this->source); })()), "createdAt", [], "any", false, false, false, 969), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </div>
                                </div>
                                <div class=\"alert-clean alert-info bg-info bg-opacity-10 text-info\">
                                    <i class=\"fas fa-info-circle\"></i>
                                    <span>Transfert ";
                // line 974
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 974, $this->source); })()), "movementType", [], "any", false, false, false, 974) == "transfer_in")) ? ("depuis") : ("vers"));
                yield " un autre magasin.</span>
                                </div>
                            </div>

                        ";
            } else {
                // line 979
                yield "                            <div class=\"text-center py-3 text-muted\">
                                <i class=\"fas fa-question-circle fa-2x mb-2 opacity-50\"></i>
                                <p class=\"mb-0 small\">Type de mouvement : ";
                // line 981
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 981, $this->source); })()), "movementType", [], "any", false, false, false, 981), "html", null, true);
                yield "</p>
                            </div>
                        ";
            }
            // line 984
            yield "
                    ";
        } else {
            // line 986
            yield "                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-link fa-2x mb-2 opacity-50\"></i>
                            <p class=\"mb-0 small\">Aucun élément associé</p>
                            <small class=\"text-muted\">Ce mouvement n'est lié à aucune vente, achat ou retour.</small>
                        </div>
                    ";
        }
        // line 992
        yield "                </div>
            </div>

            <!-- ==========================================
                 GRILLE 2 COLONNES — INFO + LOT & PRODUIT
            ========================================== -->
            <div class=\"row g-4\">
                <!-- Informations générales -->
                <div class=\"col-12 col-lg-6\">
                    <div class=\"card-clean h-100\">
                        <div class=\"card-clean-header\">
                            <h5>
                                <span class=\"header-icon\"><i class=\"fas fa-info-circle\"></i></span>
                                Informations générales
                            </h5>
                            <span class=\"badge-clean ";
        // line 1007
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1007, $this->source); })()), "movementTypeBadgeClass", [], "any", false, false, false, 1007), "html", null, true);
        yield "\">
                                <i class=\"";
        // line 1008
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1008, $this->source); })()), "movementTypeIcon", [], "any", false, false, false, 1008), "html", null, true);
        yield "\"></i>
                                ";
        // line 1009
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1009, $this->source); })()), "movementTypeLabel", [], "any", false, false, false, 1009), "html", null, true);
        yield "
                            </span>
                        </div>
                        <div class=\"card-clean-body\">
                            <div class=\"info-grid\">
                                <div class=\"info-item\">
                                    <span class=\"info-label\"><i class=\"far fa-calendar-alt\"></i> Date</span>
                                    <span class=\"info-value\">";
        // line 1016
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1016, $this->source); })()), "createdAt", [], "any", false, false, false, 1016), "d/m/Y H:i:s"), "html", null, true);
        yield "</span>
                                </div>
                                <div class=\"info-item\">
                                    <span class=\"info-label\"><i class=\"fas fa-hashtag\"></i> Quantité</span>
                                    <span class=\"info-value ";
        // line 1020
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1020, $this->source); })()), "movementType", [], "any", false, false, false, 1020), ["purchase_in", "return_in"])) ? ("text-success") : ("text-danger"));
        yield "\">
                                        ";
        // line 1021
        yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1021, $this->source); })()), "movementType", [], "any", false, false, false, 1021), ["purchase_in", "return_in"])) ? ("+") : ("-"));
        yield "
                                        ";
        // line 1022
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1022, $this->source); })()), "quantity", [], "any", false, false, false, 1022), 0, ",", " "), "html", null, true);
        yield " unité(s)
                                    </span>
                                </div>
                                <div class=\"info-item\">
                                    <span class=\"info-label\"><i class=\"fas fa-tag\"></i> Prix unitaire</span>
                                    <span class=\"info-value\">
                                        ";
        // line 1028
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1028, $this->source); })()), "unitPrice", [], "any", false, false, false, 1028)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1028, $this->source); })()), "unitPrice", [], "any", false, false, false, 1028), CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1028, $this->source); })()), "hmaService", [], "any", false, false, false, 1028)), "html", null, true)) : ("—"));
        yield "
                                    </span>
                                </div>
                                <div class=\"info-item\">
                                    <span class=\"info-label\"><i class=\"fas fa-coins\"></i> Valeur totale</span>
                                    <span class=\"info-value text-primary fw-bold\">
                                        ";
        // line 1034
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1034, $this->source); })()), "quantity", [], "any", false, false, false, 1034) * ((CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "unitPrice", [], "any", true, true, false, 1034)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1034, $this->source); })()), "unitPrice", [], "any", false, false, false, 1034), 0)) : (0))), CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1034, $this->source); })()), "hmaService", [], "any", false, false, false, 1034)), "html", null, true);
        yield "
                                    </span>
                                </div>
                                ";
        // line 1037
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1037, $this->source); })()), "notes", [], "any", false, false, false, 1037)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1038
            yield "                                <div class=\"info-item full-width\">
                                    <span class=\"info-label\"><i class=\"fas fa-comment-alt\"></i> Notes</span>
                                    <span class=\"info-value\">";
            // line 1040
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1040, $this->source); })()), "notes", [], "any", false, false, false, 1040), "html", null, true);
            yield "</span>
                                </div>
                                ";
        }
        // line 1043
        yield "                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lot & Produit -->
                <div class=\"col-12 col-lg-6\">
                    <div class=\"card-clean h-100\">
                        <div class=\"card-clean-header\">
                            <h5>
                                <span class=\"header-icon\"><i class=\"fas fa-boxes\"></i></span>
                                Lot & Produit
                            </h5>
                        </div>
                        <div class=\"card-clean-body\">
                            ";
        // line 1058
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1058, $this->source); })()), "stockBatch", [], "any", false, false, false, 1058)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1059
            yield "                                <div class=\"info-grid\">
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-barcode\"></i> N° lot</span>
                                        <span class=\"info-value\"><code>";
            // line 1062
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1062, $this->source); })()), "stockBatch", [], "any", false, false, false, 1062), "batchNumber", [], "any", false, false, false, 1062), "html", null, true);
            yield "</code></span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-box\"></i> Produit</span>
                                        <span class=\"info-value\">";
            // line 1066
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1066, $this->source); })()), "stockBatch", [], "any", false, false, false, 1066), "product", [], "any", false, false, false, 1066), "name", [], "any", false, false, false, 1066), "html", null, true);
            yield "</span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-barcode\"></i> Code-barres</span>
                                        <span class=\"info-value\">";
            // line 1070
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1070, $this->source); })()), "stockBatch", [], "any", false, false, false, 1070), "product", [], "any", false, false, false, 1070), "barcode", [], "any", false, false, false, 1070), "html", null, true);
            yield "</span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-tags\"></i> Catégorie</span>
                                        <span class=\"info-value\">";
            // line 1074
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["movement"] ?? null), "stockBatch", [], "any", false, true, false, 1074), "product", [], "any", false, true, false, 1074), "category", [], "any", false, true, false, 1074), "name", [], "any", true, true, false, 1074)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1074, $this->source); })()), "stockBatch", [], "any", false, false, false, 1074), "product", [], "any", false, false, false, 1074), "category", [], "any", false, false, false, 1074), "name", [], "any", false, false, false, 1074), "—")) : ("—")), "html", null, true);
            yield "</span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-tag\"></i> Prix unitaire</span>
                                        <span class=\"info-value\">";
            // line 1078
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->formatPriceWithCurrency(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1078, $this->source); })()), "stockBatch", [], "any", false, false, false, 1078), "unitPrice", [], "any", false, false, false, 1078), CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1078, $this->source); })()), "hmaService", [], "any", false, false, false, 1078)), "html", null, true);
            yield "</span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-cubes\"></i> Stock actuel</span>
                                        <span class=\"info-value fw-bold text-primary\">
                                            ";
            // line 1083
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1083, $this->source); })()), "stockBatch", [], "any", false, false, false, 1083), "currentQuantity", [], "any", false, false, false, 1083), 0, ",", " "), "html", null, true);
            yield " unités
                                        </span>
                                    </div>
                                    <div class=\"info-item full-width\">
                                        <span class=\"info-label\"><i class=\"fas fa-map-marker-alt\"></i> Emplacement</span>
                                        <span class=\"info-value\">";
            // line 1088
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1088, $this->source); })()), "stockBatch", [], "any", false, false, false, 1088), "locationDisplay", [], "any", false, false, false, 1088), "html", null, true);
            yield "</span>
                                    </div>
                                    ";
            // line 1090
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1090, $this->source); })()), "stockBatch", [], "any", false, false, false, 1090), "expiryDate", [], "any", false, false, false, 1090)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1091
                yield "                                    <div class=\"info-item full-width\">
                                        <span class=\"info-label\"><i class=\"far fa-calendar-times\"></i> Date d'expiration</span>
                                        <span class=\"info-value\">";
                // line 1093
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1093, $this->source); })()), "stockBatch", [], "any", false, false, false, 1093), "expiryDate", [], "any", false, false, false, 1093), "d/m/Y"), "html", null, true);
                yield "</span>
                                    </div>
                                    ";
            }
            // line 1096
            yield "                                </div>
                            ";
        } else {
            // line 1098
            yield "                                <div class=\"text-center py-3 text-muted\">
                                    <i class=\"fas fa-box-open fa-2x mb-2 opacity-50\"></i>
                                    <p class=\"mb-0 small\">Aucun lot associé à ce mouvement</p>
                                </div>
                            ";
        }
        // line 1103
        yield "                        </div>
                    </div>
                </div>
            </div>

            <!-- ==========================================
                 HISTORIQUE DU LOT
            ========================================== -->
            <div class=\"card-clean mt-3\">
                <div class=\"card-clean-header\">
                    <h5>
                        <span class=\"header-icon\"><i class=\"fas fa-history\"></i></span>
                        Historique des mouvements du lot
                    </h5>
                    ";
        // line 1117
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1117, $this->source); })()), "stockBatch", [], "any", false, false, false, 1117) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1117, $this->source); })()), "stockBatch", [], "any", false, false, false, 1117), "stockMovements", [], "any", false, false, false, 1117)) > 0))) {
            // line 1118
            yield "                        <span class=\"badge-clean bg-secondary text-white\">
                            <i class=\"fas fa-list\"></i>
                            ";
            // line 1120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1120, $this->source); })()), "stockBatch", [], "any", false, false, false, 1120), "stockMovements", [], "any", false, false, false, 1120)), "html", null, true);
            yield " mouvement(s)
                        </span>
                    ";
        }
        // line 1123
        yield "                </div>

                ";
        // line 1125
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1125, $this->source); })()), "stockBatch", [], "any", false, false, false, 1125) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1125, $this->source); })()), "stockBatch", [], "any", false, false, false, 1125), "stockMovements", [], "any", false, false, false, 1125)) > 0))) {
            // line 1126
            yield "
                    ";
            // line 1128
            yield "                    <div class=\"table-responsive history-table-wrapper\">
                        <table class=\"history-table\">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Quantité</th>
                                    <th>Référence</th>
                                    <th>Utilisateur</th>
                                    <th class=\"text-center\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 1141
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1141, $this->source); })()), "stockBatch", [], "any", false, false, false, 1141), "stockMovements", [], "any", false, false, false, 1141), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 1141, $this->source); })()), "createdAt", [], "any", false, false, false, 1141) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 1141, $this->source); })()), "createdAt", [], "any", false, false, false, 1141)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["otherMovement"]) {
                // line 1142
                yield "                                    <tr class=\"";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "id", [], "any", false, false, false, 1142) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1142, $this->source); })()), "id", [], "any", false, false, false, 1142))) ? ("is-current") : (""));
                yield "\">
                                        <td>
                                            <div class=\"fw-bold\">";
                // line 1144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "createdAt", [], "any", false, false, false, 1144), "d/m/Y"), "html", null, true);
                yield "</div>
                                            <small class=\"text-muted\">";
                // line 1145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "createdAt", [], "any", false, false, false, 1145), "H:i:s"), "html", null, true);
                yield "</small>
                                        </td>
                                        <td>
                                            <span class=\"badge-clean ";
                // line 1148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementTypeBadgeClass", [], "any", false, false, false, 1148), "html", null, true);
                yield "\">
                                                <i class=\"";
                // line 1149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementTypeIcon", [], "any", false, false, false, 1149), "html", null, true);
                yield "\"></i>
                                                ";
                // line 1150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementTypeLabel", [], "any", false, false, false, 1150), "html", null, true);
                yield "
                                            </span>
                                        </td>
                                        <td class=\"";
                // line 1153
                yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementType", [], "any", false, false, false, 1153), ["purchase_in", "return_in"])) ? ("text-success") : ("text-danger"));
                yield " fw-bold\">
                                            ";
                // line 1154
                yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementType", [], "any", false, false, false, 1154), ["purchase_in", "return_in"])) ? ("+") : ("-"));
                yield "
                                            ";
                // line 1155
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "quantity", [], "any", false, false, false, 1155), 0, ",", " "), "html", null, true);
                yield "
                                        </td>
                                        <td>
                                            ";
                // line 1158
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementType", [], "any", false, false, false, 1158) == "purchase_in") && CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "purchaseItem", [], "any", false, false, false, 1158))) {
                    // line 1159
                    yield "                                                <span class=\"text-muted\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "purchaseItem", [], "any", false, false, false, 1159), "purchase", [], "any", false, false, false, 1159), "purchaseNumber", [], "any", false, false, false, 1159), "html", null, true);
                    yield "</span>
                                            ";
                } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,                 // line 1160
$context["otherMovement"], "referenceId", [], "any", false, false, false, 1160)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1161
                    yield "                                                <span class=\"text-muted\">Réf #";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "referenceId", [], "any", false, false, false, 1161), "html", null, true);
                    yield "</span>
                                            ";
                } else {
                    // line 1163
                    yield "                                                <span class=\"text-muted\">—</span>
                                            ";
                }
                // line 1165
                yield "                                        </td>
                                        <td>
                                            ";
                // line 1167
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1167)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1168
                    yield "                                                <div class=\"d-flex align-items-center gap-2\">
                                                    ";
                    // line 1169
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1169), "photo", [], "any", false, false, false, 1169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1170
                        yield "                                                        <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/users/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1170), "photo", [], "any", false, false, false, 1170))), "html", null, true);
                        yield "\"
                                                             alt=\"";
                        // line 1171
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1171), "fullName", [], "any", false, false, false, 1171), "html", null, true);
                        yield "\"
                                                             class=\"rounded-circle\"
                                                             style=\"width: 28px; height: 28px; object-fit: cover; border: 2px solid #e2e8f0;\"
                                                             onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                                                        <div class=\"rounded-circle bg-light d-none align-items-center justify-content-center\"
                                                             style=\"width: 28px; height: 28px;\">
                                                            <i class=\"fas fa-users text-muted\" style=\"font-size: 0.7rem;\"></i>
                                                        </div>
                                                    ";
                    } else {
                        // line 1180
                        yield "                                                        <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center\"
                                                             style=\"width: 28px; height: 28px;\">
                                                            <i class=\"fas fa-users text-muted\" style=\"font-size: 0.7rem;\"></i>
                                                        </div>
                                                    ";
                    }
                    // line 1185
                    yield "                                                    <span class=\"small\">";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1185), "fullName", [], "any", false, false, false, 1185)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1185), "fullName", [], "any", false, false, false, 1185), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1185), "email", [], "any", false, false, false, 1185), "html", null, true)));
                    yield "</span>
                                                </div>
                                            ";
                } else {
                    // line 1188
                    yield "                                                <span class=\"text-muted small\"><i class=\"fas fa-robot me-1\"></i> Système</span>
                                            ";
                }
                // line 1190
                yield "                                        </td>
                                        <td class=\"text-center\">
                                            ";
                // line 1192
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "id", [], "any", false, false, false, 1192) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1192, $this->source); })()), "id", [], "any", false, false, false, 1192))) {
                    // line 1193
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "id", [], "any", false, false, false, 1193)]), "html", null, true);
                    yield "\"
                                                   class=\"btn btn-sm btn-outline-primary\"
                                                   title=\"Voir le détail\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                            ";
                } else {
                    // line 1199
                    yield "                                                <span class=\"badge bg-primary-subtle text-primary fw-semibold\" style=\"font-size: 0.7rem;\">
                                                    <i class=\"fas fa-dot-circle me-1\"></i> Actuel
                                                </span>
                                            ";
                }
                // line 1203
                yield "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['otherMovement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1206
            yield "                            </tbody>
                        </table>
                    </div>

                    ";
            // line 1211
            yield "                    <div class=\"history-cards-mobile\">
                        ";
            // line 1212
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1212, $this->source); })()), "stockBatch", [], "any", false, false, false, 1212), "stockMovements", [], "any", false, false, false, 1212), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 1212, $this->source); })()), "createdAt", [], "any", false, false, false, 1212) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 1212, $this->source); })()), "createdAt", [], "any", false, false, false, 1212)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["otherMovement"]) {
                // line 1213
                yield "                            <div class=\"history-card-item ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "id", [], "any", false, false, false, 1213) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1213, $this->source); })()), "id", [], "any", false, false, false, 1213))) ? ("is-current") : (""));
                yield "\">
                                <div class=\"history-card-header\">
                                    <div>
                                        <div class=\"history-card-date\">";
                // line 1216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "createdAt", [], "any", false, false, false, 1216), "d/m/Y"), "html", null, true);
                yield "</div>
                                        <div class=\"history-card-time\">";
                // line 1217
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "createdAt", [], "any", false, false, false, 1217), "H:i:s"), "html", null, true);
                yield "</div>
                                    </div>
                                    <span class=\"badge-clean ";
                // line 1219
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementTypeBadgeClass", [], "any", false, false, false, 1219), "html", null, true);
                yield "\">
                                        <i class=\"";
                // line 1220
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementTypeIcon", [], "any", false, false, false, 1220), "html", null, true);
                yield "\"></i>
                                        ";
                // line 1221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementTypeLabel", [], "any", false, false, false, 1221), "html", null, true);
                yield "
                                    </span>
                                </div>

                                <div class=\"history-card-rows\">
                                    <div class=\"history-card-row\">
                                        <span class=\"label\"><i class=\"fas fa-hashtag me-1\"></i> Quantité</span>
                                        <span class=\"value ";
                // line 1228
                yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementType", [], "any", false, false, false, 1228), ["purchase_in", "return_in"])) ? ("text-success") : ("text-danger"));
                yield "\">
                                            ";
                // line 1229
                yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "movementType", [], "any", false, false, false, 1229), ["purchase_in", "return_in"])) ? ("+") : ("-"));
                yield "
                                            ";
                // line 1230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "quantity", [], "any", false, false, false, 1230), 0, ",", " "), "html", null, true);
                yield "
                                        </span>
                                    </div>
                                    ";
                // line 1233
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "referenceId", [], "any", false, false, false, 1233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 1234
                    yield "                                    <div class=\"history-card-row\">
                                        <span class=\"label\"><i class=\"fas fa-link me-1\"></i> Référence</span>
                                        <span class=\"value\">#";
                    // line 1236
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "referenceId", [], "any", false, false, false, 1236), "html", null, true);
                    yield "</span>
                                    </div>
                                    ";
                }
                // line 1239
                yield "                                    <div class=\"history-card-row\">
                                        <span class=\"label\"><i class=\"fas fa-user me-1\"></i> Utilisateur</span>
                                        <span class=\"value\">
                                            ";
                // line 1242
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1242), "fullName", [], "any", false, false, false, 1242)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1242), "fullName", [], "any", false, false, false, 1242), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "user", [], "any", false, false, false, 1242), "email", [], "any", false, false, false, 1242), "html", null, true)))) : ("Système"));
                yield "
                                        </span>
                                    </div>
                                </div>

                                <div class=\"history-card-actions\">
                                    ";
                // line 1248
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "id", [], "any", false, false, false, 1248) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["movement"]) || array_key_exists("movement", $context) ? $context["movement"] : (function () { throw new RuntimeError('Variable "movement" does not exist.', 1248, $this->source); })()), "id", [], "any", false, false, false, 1248))) {
                    // line 1249
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_stock_movement_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["otherMovement"], "id", [], "any", false, false, false, 1249)]), "html", null, true);
                    yield "\"
                                           class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye me-1\"></i> Voir
                                        </a>
                                    ";
                } else {
                    // line 1254
                    yield "                                        <span class=\"badge bg-primary-subtle text-primary fw-semibold\" style=\"font-size: 0.7rem;\">
                                            <i class=\"fas fa-dot-circle me-1\"></i> Actuel
                                        </span>
                                    ";
                }
                // line 1258
                yield "                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['otherMovement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1261
            yield "                    </div>

                ";
        } else {
            // line 1264
            yield "                    <div class=\"text-center py-5 text-muted\">
                        <i class=\"fas fa-history fa-3x mb-3 opacity-25\"></i>
                        <p class=\"mb-0\">Aucun autre mouvement pour ce lot</p>
                    </div>
                ";
        }
        // line 1269
        yield "            </div>

        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/stock_movement/show.html.twig";
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
        return array (  1837 => 1269,  1830 => 1264,  1825 => 1261,  1817 => 1258,  1811 => 1254,  1802 => 1249,  1800 => 1248,  1791 => 1242,  1786 => 1239,  1780 => 1236,  1776 => 1234,  1774 => 1233,  1768 => 1230,  1764 => 1229,  1760 => 1228,  1750 => 1221,  1746 => 1220,  1742 => 1219,  1737 => 1217,  1733 => 1216,  1726 => 1213,  1722 => 1212,  1719 => 1211,  1713 => 1206,  1705 => 1203,  1699 => 1199,  1689 => 1193,  1687 => 1192,  1683 => 1190,  1679 => 1188,  1672 => 1185,  1665 => 1180,  1653 => 1171,  1648 => 1170,  1646 => 1169,  1643 => 1168,  1641 => 1167,  1637 => 1165,  1633 => 1163,  1627 => 1161,  1625 => 1160,  1620 => 1159,  1618 => 1158,  1612 => 1155,  1608 => 1154,  1604 => 1153,  1598 => 1150,  1594 => 1149,  1590 => 1148,  1584 => 1145,  1580 => 1144,  1574 => 1142,  1570 => 1141,  1555 => 1128,  1552 => 1126,  1550 => 1125,  1546 => 1123,  1540 => 1120,  1536 => 1118,  1534 => 1117,  1518 => 1103,  1511 => 1098,  1507 => 1096,  1501 => 1093,  1497 => 1091,  1495 => 1090,  1490 => 1088,  1482 => 1083,  1474 => 1078,  1467 => 1074,  1460 => 1070,  1453 => 1066,  1446 => 1062,  1441 => 1059,  1439 => 1058,  1422 => 1043,  1416 => 1040,  1412 => 1038,  1410 => 1037,  1404 => 1034,  1395 => 1028,  1386 => 1022,  1382 => 1021,  1378 => 1020,  1371 => 1016,  1361 => 1009,  1357 => 1008,  1353 => 1007,  1336 => 992,  1328 => 986,  1324 => 984,  1318 => 981,  1314 => 979,  1306 => 974,  1298 => 969,  1291 => 965,  1284 => 961,  1276 => 956,  1270 => 953,  1266 => 951,  1263 => 950,  1250 => 943,  1244 => 940,  1237 => 936,  1230 => 932,  1222 => 927,  1216 => 924,  1212 => 923,  1209 => 922,  1206 => 921,  1198 => 915,  1192 => 912,  1185 => 908,  1178 => 904,  1168 => 896,  1165 => 895,  1157 => 889,  1151 => 886,  1144 => 882,  1137 => 878,  1127 => 870,  1124 => 869,  1116 => 863,  1110 => 860,  1104 => 856,  1100 => 854,  1094 => 852,  1092 => 851,  1085 => 846,  1079 => 844,  1073 => 842,  1071 => 841,  1060 => 832,  1057 => 831,  1049 => 825,  1043 => 822,  1036 => 818,  1029 => 814,  1019 => 806,  1016 => 805,  1013 => 803,  1011 => 802,  995 => 788,  988 => 783,  980 => 778,  976 => 777,  972 => 776,  967 => 774,  961 => 771,  957 => 769,  951 => 765,  941 => 758,  936 => 757,  934 => 756,  930 => 754,  928 => 753,  924 => 751,  918 => 748,  914 => 747,  909 => 746,  907 => 745,  888 => 729,  878 => 722,  871 => 718,  867 => 717,  858 => 711,  849 => 705,  845 => 704,  841 => 703,  836 => 701,  826 => 693,  822 => 691,  820 => 690,  817 => 689,  815 => 688,  812 => 687,  810 => 686,  807 => 685,  805 => 684,  802 => 683,  800 => 682,  798 => 681,  796 => 680,  783 => 678,  102 => 7,  89 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/admin/stock_movement/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détail mouvement - {{ movement.movementTypeLabel }}{% endblock %}

{% block stylesheets %}
{{ parent() }}
<style>
    :root {
        --primary: #0463f1;
        --primary-dark: #0350c4;
        --success: #10b981;
        --success-dark: #059669;
        --warning: #f59e0b;
        --warning-dark: #d97706;
        --danger: #ef4444;
        --danger-dark: #dc2626;
        --info: #0ea5e9;
        --info-dark: #0284c7;
        --gray-50: #f9fafb;
        --gray-100: #f3f4f6;
        --gray-200: #e5e7eb;
        --gray-400: #9ca3af;
        --gray-500: #6b7280;
        --gray-600: #4b5563;
        --gray-700: #374151;
        --gray-900: #111827;
        --radius-lg: 16px;
        --radius-md: 12px;
        --radius-sm: 8px;
    }

    /* ============================================
       PAGE HERO — DÉGRADÉ SELON TYPE
    ============================================ */
    .page-hero {
        border-radius: var(--radius-lg);
        padding: 1.75rem 1.5rem;
        margin-bottom: 1.5rem;
        position: relative;
        overflow: hidden;
        color: #fff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    }
    .page-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 280px;
        height: 280px;
        background: rgba(255,255,255,0.08);
        border-radius: 50%;
        pointer-events: none;
    }
    .page-hero::after {
        content: '';
        position: absolute;
        bottom: -40%;
        right: 15%;
        width: 180px;
        height: 180px;
        background: rgba(255,255,255,0.06);
        border-radius: 50%;
        pointer-events: none;
    }
    .page-hero.hero-primary { background: linear-gradient(135deg, #0463f1 0%, #0350c4 100%); }
    .page-hero.hero-success { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
    .page-hero.hero-danger  { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); }
    .page-hero.hero-warning { background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%); }
    .page-hero.hero-info    { background: linear-gradient(135deg, #0ea5e9 0%, #0284c7 100%); }
    .page-hero.hero-secondary { background: linear-gradient(135deg, #6b7280 0%, #4b5563 100%); }

    .page-hero .hero-content {
        position: relative;
        z-index: 1;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    .page-hero .hero-icon {
        width: 64px;
        height: 64px;
        border-radius: var(--radius-md);
        background: rgba(255,255,255,0.2);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.75rem;
        color: #fff;
        flex-shrink: 0;
        backdrop-filter: blur(6px);
    }
    .page-hero .hero-icon i {
        color: #fff !important;
    }
    .page-hero .hero-title {
        font-size: 1.5rem;
        font-weight: 700;
        margin: 0;
        color: #fff;
        line-height: 1.2;
    }
    .page-hero .hero-subtitle {
        font-size: 0.88rem;
        opacity: 0.92;
        margin: 0.25rem 0 0 0;
        color: #fff;
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .page-hero .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.3rem 0.7rem;
        border-radius: 999px;
        background: rgba(255,255,255,0.22);
        backdrop-filter: blur(4px);
        font-size: 0.78rem;
        font-weight: 600;
        color: #fff;
    }
    .page-hero .hero-badge i {
        color: #fff !important;
    }
    .page-hero .hero-back-btn {
        background: rgba(255,255,255,0.18);
        color: #fff !important;
        border: 1px solid rgba(255,255,255,0.3);
        padding: 0.55rem 1.1rem;
        border-radius: var(--radius-sm);
        font-weight: 600;
        font-size: 0.85rem;
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        text-decoration: none;
        transition: all 0.2s ease;
        backdrop-filter: blur(4px);
        white-space: nowrap;
    }
    .page-hero .hero-back-btn:hover {
        background: rgba(255,255,255,0.3);
        color: #fff !important;
        transform: translateX(-2px);
    }
    .page-hero .hero-back-btn i {
        color: #fff !important;
    }

    .breadcrumb-simple {
        list-style: none;
        padding: 0;
        margin: 0 0 0.75rem 0;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 0.4rem;
        font-size: 0.78rem;
        opacity: 0.9;
    }
    .breadcrumb-simple li {
        color: #fff;
        display: flex;
        align-items: center;
    }
    .breadcrumb-simple li a {
        color: #fff !important;
        text-decoration: none;
        opacity: 0.85;
        transition: opacity 0.15s;
    }
    .breadcrumb-simple li a:hover {
        opacity: 1;
        text-decoration: underline;
    }
    .breadcrumb-simple li + li::before {
        content: '/';
        color: rgba(255,255,255,0.7) !important;
        margin-right: 0.4rem;
    }
    .breadcrumb-simple li.active {
        opacity: 1;
        font-weight: 600;
    }

    /* ============================================
       CARDS
    ============================================ */
    .card-clean {
        background: #fff;
        border-radius: var(--radius-lg);
        border: 1px solid #eef2f7;
        box-shadow: 0 2px 12px rgba(15, 23, 42, 0.04);
        transition: box-shadow 0.2s ease, transform 0.2s ease;
        overflow: hidden;
        margin-bottom: 1.25rem;
    }
    .card-clean:hover {
        box-shadow: 0 6px 20px rgba(15, 23, 42, 0.08);
    }
    .card-clean-header {
        padding: 1rem 1.25rem;
        border-bottom: 1px solid #eef2f7;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 0.75rem;
        flex-wrap: wrap;
        background: linear-gradient(180deg, #fafbfc 0%, #ffffff 100%);
    }
    .card-clean-header h5 {
        margin: 0;
        font-size: 0.95rem;
        font-weight: 700;
        color: var(--gray-700);
        display: flex;
        align-items: center;
        gap: 0.55rem;
    }
    .card-clean-header h5 .header-icon {
        width: 30px;
        height: 30px;
        border-radius: var(--radius-sm);
        background: #eff6ff;
        color: var(--primary);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.85rem;
    }
    .card-clean-body {
        padding: 1.25rem;
    }

    /* ============================================
       INFO GRID
    ============================================ */
    .info-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 0.9rem 1.5rem;
    }
    .info-item {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
        min-width: 0;
    }
    .info-item .info-label {
        font-size: 0.7rem;
        text-transform: uppercase;
        font-weight: 700;
        color: var(--gray-500);
        letter-spacing: 0.6px;
        display: flex;
        align-items: center;
        gap: 0.3rem;
    }
    .info-item .info-label i {
        color: var(--gray-400);
        font-size: 0.75rem;
    }
    .info-item .info-value {
        font-size: 0.92rem;
        font-weight: 600;
        color: var(--gray-900);
        word-break: break-word;
        line-height: 1.35;
    }
    .info-item.full-width {
        grid-column: 1 / -1;
    }

    /* ============================================
       USER CARD — HORIZONTAL
    ============================================ */
    .user-profile-horizontal {
        display: flex;
        align-items: center;
        gap: 1.25rem;
        padding: 0.5rem 0;
        flex-wrap: wrap;
    }
    .user-avatar-wrapper {
        position: relative;
        flex-shrink: 0;
    }
    .user-avatar-lg {
        width: 84px;
        height: 84px;
        border-radius: 50%;
        object-fit: cover;
        border: 4px solid #fff;
        box-shadow: 0 6px 18px rgba(15, 23, 42, 0.14);
        display: block;
    }
    .user-avatar-placeholder-lg {
        width: 84px;
        height: 84px;
        border-radius: 50%;
        background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
        color: #4338ca;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2rem;
        border: 4px solid #fff;
        box-shadow: 0 6px 18px rgba(15, 23, 42, 0.14);
    }
    .user-profile-horizontal .user-meta {
        min-width: 0;
        flex: 1;
    }
    .user-profile-horizontal .user-name {
        font-size: 1.25rem;
        font-weight: 700;
        color: var(--gray-900);
        margin: 0 0 0.35rem 0;
        word-break: break-word;
        line-height: 1.2;
    }
    .user-profile-horizontal .user-email {
        font-size: 0.9rem;
        color: var(--gray-600);
        word-break: break-word;
        display: flex;
        align-items: center;
        gap: 0.4rem;
        margin-bottom: 0.5rem;
    }
    .user-profile-horizontal .user-email i {
        color: var(--gray-400);
        font-size: 0.85rem;
        flex-shrink: 0;
    }
    .user-profile-horizontal .user-role-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.3rem 0.75rem;
        border-radius: 999px;
        font-size: 0.75rem;
        font-weight: 600;
    }

    /* ============================================
       BADGES
    ============================================ */
    .badge-clean {
        display: inline-flex;
        align-items: center;
        gap: 0.3rem;
        padding: 0.35rem 0.75rem;
        border-radius: 999px;
        font-size: 0.78rem;
        font-weight: 600;
        white-space: nowrap;
    }
    .badge-clean i {
        color: inherit !important;
        font-size: 0.75rem;
    }

    /* ============================================
       ASSOCIATED ELEMENT CARD
    ============================================ */
    .linked-card {
        text-align: center;
        padding: 0.75rem 0;
    }
    .linked-icon-circle {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 1.85rem;
        margin-bottom: 0.85rem;
        color: #fff !important;
        box-shadow: 0 8px 20px rgba(15, 23, 42, 0.1);
    }
    .linked-icon-circle i {
        color: #fff !important;
    }
    .linked-icon-circle.bg-primary { background: linear-gradient(135deg, #0463f1, #0350c4); }
    .linked-icon-circle.bg-success { background: linear-gradient(135deg, #10b981, #059669); }
    .linked-icon-circle.bg-danger  { background: linear-gradient(135deg, #ef4444, #dc2626); }
    .linked-icon-circle.bg-warning { background: linear-gradient(135deg, #f59e0b, #d97706); }
    .linked-icon-circle.bg-info    { background: linear-gradient(135deg, #0ea5e9, #0284c7); }

    .linked-title {
        font-size: 1rem;
        font-weight: 700;
        color: var(--gray-900);
        margin: 0 0 0.75rem 0;
    }
    .linked-summary {
        background: var(--gray-50);
        border-radius: var(--radius-md);
        padding: 0.85rem 1rem;
        text-align: left;
        margin-bottom: 0.85rem;
        max-width: 480px;
        margin-left: auto;
        margin-right: auto;
    }
    .linked-summary .row-line {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 0.75rem;
        padding: 0.35rem 0;
        font-size: 0.85rem;
    }
    .linked-summary .row-line:not(:last-child) {
        border-bottom: 1px dashed var(--gray-200);
    }
    .linked-summary .row-line .label {
        color: var(--gray-500);
        font-weight: 500;
        flex-shrink: 0;
    }
    .linked-summary .row-line .value {
        color: var(--gray-900);
        font-weight: 700;
        text-align: right;
        word-break: break-word;
    }

    /* ============================================
       HISTORY TABLE
    ============================================ */
    .history-table {
        width: 100%;
        margin: 0;
        border-collapse: separate;
        border-spacing: 0;
    }
    .history-table thead th {
        background: #f8fafc;
        color: var(--gray-600);
        font-size: 0.72rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 0.75rem 1rem;
        border-bottom: 1px solid var(--gray-200);
        white-space: nowrap;
    }
    .history-table tbody td {
        padding: 0.85rem 1rem;
        font-size: 0.85rem;
        color: var(--gray-700);
        border-bottom: 1px solid #f1f5f9;
        vertical-align: middle;
    }
    .history-table tbody tr:last-child td {
        border-bottom: none;
    }
    .history-table tbody tr:hover td {
        background: #fafbfc;
    }
    .history-table tbody tr.is-current {
        background: #eff6ff;
    }
    .history-table tbody tr.is-current:hover td {
        background: #e0edff;
    }

    /* Mobile history cards */
    .history-cards-mobile {
        display: none;
        padding: 0.75rem;
        gap: 0.65rem;
        flex-direction: column;
    }
    .history-card-item {
        background: #fff;
        border: 1px solid #eef2f7;
        border-radius: var(--radius-md);
        padding: 0.85rem;
        transition: box-shadow 0.2s;
    }
    .history-card-item:hover {
        box-shadow: 0 4px 14px rgba(15, 23, 42, 0.06);
    }
    .history-card-item.is-current {
        background: #eff6ff;
        border-color: #bfdbfe;
    }
    .history-card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 0.5rem;
        margin-bottom: 0.6rem;
        padding-bottom: 0.6rem;
        border-bottom: 1px dashed var(--gray-200);
    }
    .history-card-date {
        font-weight: 700;
        font-size: 0.85rem;
        color: var(--gray-900);
    }
    .history-card-time {
        font-size: 0.72rem;
        color: var(--gray-500);
    }
    .history-card-rows {
        display: flex;
        flex-direction: column;
        gap: 0.35rem;
        margin-bottom: 0.65rem;
    }
    .history-card-row {
        display: flex;
        justify-content: space-between;
        gap: 0.5rem;
        font-size: 0.82rem;
    }
    .history-card-row .label {
        color: var(--gray-500);
        flex-shrink: 0;
    }
    .history-card-row .value {
        color: var(--gray-900);
        font-weight: 600;
        text-align: right;
        word-break: break-word;
    }
    .history-card-actions {
        display: flex;
        justify-content: flex-end;
    }

    /* ============================================
       ALERTS
    ============================================ */
    .alert-clean {
        display: flex;
        gap: 0.65rem;
        align-items: flex-start;
        padding: 0.85rem 1rem;
        border-radius: var(--radius-md);
        font-size: 0.85rem;
        border: none;
        max-width: 480px;
        margin-left: auto;
        margin-right: auto;
    }
    .alert-clean i {
        font-size: 1rem;
        flex-shrink: 0;
        margin-top: 0.1rem;
        color: inherit !important;
    }

    /* ============================================
       RESPONSIVE
    ============================================ */
    @media (max-width: 991px) {
        .info-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .container-fluid {
            padding-left: 0.75rem !important;
            padding-right: 0.75rem !important;
            padding-top: 0.75rem !important;
        }
        .page-hero {
            padding: 1.25rem 1.15rem;
            border-radius: var(--radius-md);
        }
        .page-hero .hero-content {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }
        .page-hero .hero-actions {
            width: 100%;
        }
        .page-hero .hero-back-btn {
            width: 100%;
            justify-content: center;
        }
        .page-hero .hero-icon {
            width: 52px;
            height: 52px;
            font-size: 1.4rem;
        }
        .page-hero .hero-title {
            font-size: 1.2rem;
        }
        .page-hero .hero-subtitle {
            font-size: 0.8rem;
        }

        .card-clean-header {
            padding: 0.85rem 1rem;
        }
        .card-clean-header h5 {
            font-size: 0.88rem;
        }
        .card-clean-body {
            padding: 1rem;
        }

        .history-table-wrapper {
            display: none;
        }
        .history-cards-mobile {
            display: flex;
        }

        .user-avatar-lg,
        .user-avatar-placeholder-lg {
            width: 68px;
            height: 68px;
            font-size: 1.6rem;
        }
        .user-profile-horizontal {
            gap: 1rem;
        }
        .user-profile-horizontal .user-name {
            font-size: 1.05rem;
        }
        .user-profile-horizontal .user-email {
            font-size: 0.82rem;
        }

        .linked-icon-circle {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }
    }

    @media (max-width: 480px) {
        .info-item .info-value {
            font-size: 0.88rem;
        }
        .user-profile-horizontal {
            gap: 0.85rem;
        }
        .user-avatar-lg,
        .user-avatar-placeholder-lg {
            width: 58px;
            height: 58px;
            font-size: 1.3rem;
            border-width: 3px;
        }
        .user-profile-horizontal .user-name {
            font-size: 0.98rem;
        }
        .user-profile-horizontal .user-email {
            font-size: 0.78rem;
        }
        .linked-summary {
            padding: 0.75rem 0.85rem;
        }
        .linked-summary .row-line {
            font-size: 0.8rem;
        }
    }
</style>
{% endblock %}

{% block body %}
{# ✅ Choix du dégradé selon le type de mouvement #}
{% set movementType = movement.movementType %}
{% set heroClass = 'hero-secondary' %}
{% if movementType == 'purchase_in' %}
    {% set heroClass = 'hero-success' %}
{% elseif movementType == 'sale_out' %}
    {% set heroClass = 'hero-danger' %}
{% elseif movementType in ['return_in', 'return_out'] %}
    {% set heroClass = 'hero-info' %}
{% elseif movementType in ['adjustment_in', 'adjustment_out'] %}
    {% set heroClass = 'hero-warning' %}
{% elseif movementType in ['transfer_in', 'transfer_out'] %}
    {% set heroClass = 'hero-primary' %}
{% endif %}

<div class=\"container-fluid px-4 py-3\">
    <div class=\"row\">
        <div class=\"col-12 col-xl-11 mx-auto\">

            <!-- ==========================================
                 HERO — EN-TÊTE DÉGRADÉ
            ========================================== -->
            <div class=\"page-hero {{ heroClass }}\">
                <ul class=\"breadcrumb-simple\">
                    <li><a href=\"{{ path('app_dashboard') }}\"><i class=\"fas fa-tachometer-alt me-1\"></i> Tableau de bord</a></li>
                    <li><a href=\"{{ path('app_admin_stock_movement_index') }}\"><i class=\"fas fa-exchange-alt me-1\"></i> Mouvements</a></li>
                    <li class=\"active\">{{ movement.movementTypeLabel }}</li>
                </ul>

                <div class=\"hero-content\">
                    <div class=\"d-flex align-items-center gap-3 flex-grow-1\">
                        <div class=\"hero-icon\">
                            <i class=\"{{ movement.movementTypeIcon }}\"></i>
                        </div>
                        <div>
                            <h1 class=\"hero-title\">Détail du mouvement</h1>
                            <p class=\"hero-subtitle\">
                                <span class=\"hero-badge\">
                                    <i class=\"{{ movement.movementTypeIcon }}\"></i>
                                    {{ movement.movementTypeLabel }}
                                </span>
                                <span class=\"hero-badge\">
                                    <i class=\"far fa-calendar-alt\"></i>
                                    {{ movement.createdAt|date('d/m/Y H:i') }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class=\"hero-actions\">
                        <a href=\"{{ path('app_admin_stock_movement_index', app.request.query.all) }}\" class=\"hero-back-btn\">
                            <i class=\"fas fa-arrow-left\"></i> Retour à la liste
                        </a>
                    </div>
                </div>
            </div>

            <!-- ==========================================
                 BLOC UTILISATEUR (pleine largeur, horizontal)
            ========================================== -->
            <div class=\"card-clean\">
                <div class=\"card-clean-header\">
                    <h5>
                        <span class=\"header-icon\"><i class=\"fas fa-user\"></i></span>
                        Utilisateur
                    </h5>
                    {% if movement.user %}
                        <span class=\"badge-clean {{ movement.user.roleBadgeClass }}\">
                            <i class=\"{{ movement.user.roleIcon }}\"></i>
                            {{ movement.user.roleLabel }}
                        </span>
                    {% endif %}
                </div>
                <div class=\"card-clean-body\">
                    {% if movement.user %}
                        <div class=\"user-profile-horizontal\">
                            <div class=\"user-avatar-wrapper\">
                                {% if movement.user.photo %}
                                    <img src=\"{{ asset('uploads/users/' ~ movement.user.photo) }}\"
                                         alt=\"{{ movement.user.fullName }}\"
                                         class=\"user-avatar-lg\"
                                         onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                                    <div class=\"user-avatar-placeholder-lg\" style=\"display: none;\">
                                        <i class=\"fas fa-users\"></i>
                                    </div>
                                {% else %}
                                    <div class=\"user-avatar-placeholder-lg\">
                                        <i class=\"fas fa-users\"></i>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"user-meta\">
                                <h6 class=\"user-name\">{{ movement.user.fullName ?: 'Utilisateur' }}</h6>
                                <div class=\"user-email\">
                                    <i class=\"fas fa-envelope\"></i>
                                    <span>{{ movement.user.email }}</span>
                                </div>
                                <span class=\"badge-clean {{ movement.user.roleBadgeClass }} user-role-badge\">
                                    <i class=\"{{ movement.user.roleIcon }}\"></i>
                                    {{ movement.user.roleLabel }}
                                </span>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-robot fa-2x mb-2 opacity-50\"></i>
                            <p class=\"mb-0 small\">Mouvement automatique (système)</p>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- ==========================================
                 BLOC ÉLÉMENT ASSOCIÉ (pleine largeur)
            ========================================== -->
            <div class=\"card-clean\">
                <div class=\"card-clean-header\">
                    <h5>
                        <span class=\"header-icon\"><i class=\"fas fa-link\"></i></span>
                        Élément associé
                    </h5>
                </div>
                <div class=\"card-clean-body\">
                    {% if movement.referenceId %}

                        {# VENTE #}
                        {% if movement.movementType == 'sale_out' %}
                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-primary\">
                                    <i class=\"fas fa-shopping-cart\"></i>
                                </div>
                                <h6 class=\"linked-title\">Vente associée</h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date de la vente</span>
                                        <span class=\"value\">{{ movement.createdAt|date('d/m/Y H:i') }}</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité vendue</span>
                                        <span class=\"value\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Montant total</span>
                                        <span class=\"value\">{{ (movement.quantity * (movement.unitPrice|default(0)))|price_with_currency(movement.hmaService) }}</span>
                                    </div>
                                </div>
                                <a href=\"{{ path('app_orders_show', {'id': movement.referenceId}) }}\" class=\"btn btn-primary btn-sm\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir la vente
                                </a>
                            </div>

                        {# ACHAT #}
                        {% elseif movement.movementType == 'purchase_in' %}
                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-success\">
                                    <i class=\"fas fa-truck\"></i>
                                </div>
                                <h6 class=\"linked-title\">Achat associé</h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">N° commande</span>
                                        <span class=\"value\">
                                            {% if movement.purchaseItem %}
                                                {{ movement.purchaseItem.purchase.purchaseNumber }}
                                            {% else %}
                                                Référence #{{ movement.referenceId }}
                                            {% endif %}
                                        </span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Fournisseur</span>
                                        <span class=\"value\">
                                            {% if movement.purchaseItem %}
                                                {{ movement.purchaseItem.purchase.supplier.name }}
                                            {% else %}
                                                —
                                            {% endif %}
                                        </span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité achetée</span>
                                        <span class=\"value\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</span>
                                    </div>
                                </div>
                                <a href=\"{{ path('purchase_show', {'id': movement.referenceId}) }}\" class=\"btn btn-success btn-sm\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir l'achat
                                </a>
                            </div>

                        {# RETOUR CLIENT #}
                        {% elseif movement.movementType == 'return_in' %}
                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-info\">
                                    <i class=\"fas fa-undo-alt\"></i>
                                </div>
                                <h6 class=\"linked-title\">Retour client associé</h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">N° retour</span>
                                        <span class=\"value\">#{{ movement.referenceId }}</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité retournée</span>
                                        <span class=\"value\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date</span>
                                        <span class=\"value\">{{ movement.createdAt|date('d/m/Y') }}</span>
                                    </div>
                                </div>
                                <a href=\"{{ path('returns_show', {'id': movement.referenceId}) }}\" class=\"btn btn-info text-white btn-sm\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le retour
                                </a>
                            </div>

                        {# RETOUR FOURNISSEUR #}
                        {% elseif movement.movementType == 'return_out' %}
                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-warning\">
                                    <i class=\"fas fa-truck-loading\"></i>
                                </div>
                                <h6 class=\"linked-title\">Retour fournisseur associé</h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">N° avoir</span>
                                        <span class=\"value\">#{{ movement.referenceId }}</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité retournée</span>
                                        <span class=\"value\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date</span>
                                        <span class=\"value\">{{ movement.createdAt|date('d/m/Y') }}</span>
                                    </div>
                                </div>
                                <a href=\"{{ path('app_supplier_credit_note_show', {'id': movement.referenceId}) }}\" class=\"btn btn-warning btn-sm\">
                                    <i class=\"fas fa-eye me-1\"></i> Voir le détail
                                </a>
                            </div>

                        {# AJUSTEMENT #}
                        {% elseif movement.movementType in ['adjustment_in', 'adjustment_out'] %}
                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle {{ movement.movementType == 'adjustment_in' ? 'bg-success' : 'bg-danger' }}\">
                                    <i class=\"fas {{ movement.movementType == 'adjustment_in' ? 'fa-plus-circle' : 'fa-minus-circle' }}\"></i>
                                </div>
                                <h6 class=\"linked-title\">
                                    Ajustement de stock {{ movement.movementType == 'adjustment_in' ? '(+)' : '(-)' }}
                                </h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">Raison</span>
                                        <span class=\"value\">{{ movement.notes|default('Ajustement manuel')|u.truncate(40) }}</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité</span>
                                        <span class=\"value\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date</span>
                                        <span class=\"value\">{{ movement.createdAt|date('d/m/Y H:i') }}</span>
                                    </div>
                                </div>
                                <div class=\"alert-clean alert-{{ movement.movementType == 'adjustment_in' ? 'success' : 'danger' }} bg-{{ movement.movementType == 'adjustment_in' ? 'success' : 'danger' }} bg-opacity-10 text-{{ movement.movementType == 'adjustment_in' ? 'success' : 'danger' }}\">
                                    <i class=\"fas fa-info-circle\"></i>
                                    <span>Ajustement manuel — aucune vente ou achat associé.</span>
                                </div>
                            </div>

                        {# TRANSFERT #}
                        {% elseif movement.movementType in ['transfer_in', 'transfer_out'] %}
                            <div class=\"linked-card\">
                                <div class=\"linked-icon-circle bg-primary\">
                                    <i class=\"fas fa-arrow-{{ movement.movementType == 'transfer_in' ? 'right' : 'left' }}\"></i>
                                </div>
                                <h6 class=\"linked-title\">
                                    Transfert {{ movement.movementType == 'transfer_in' ? 'entrant' : 'sortant' }}
                                </h6>
                                <div class=\"linked-summary\">
                                    <div class=\"row-line\">
                                        <span class=\"label\">Référence</span>
                                        <span class=\"value\">{{ movement.notes|default('Transfert')|u.truncate(30) }}</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Quantité</span>
                                        <span class=\"value\">{{ movement.quantity|number_format(0, ',', ' ') }} unités</span>
                                    </div>
                                    <div class=\"row-line\">
                                        <span class=\"label\">Date</span>
                                        <span class=\"value\">{{ movement.createdAt|date('d/m/Y') }}</span>
                                    </div>
                                </div>
                                <div class=\"alert-clean alert-info bg-info bg-opacity-10 text-info\">
                                    <i class=\"fas fa-info-circle\"></i>
                                    <span>Transfert {{ movement.movementType == 'transfer_in' ? 'depuis' : 'vers' }} un autre magasin.</span>
                                </div>
                            </div>

                        {% else %}
                            <div class=\"text-center py-3 text-muted\">
                                <i class=\"fas fa-question-circle fa-2x mb-2 opacity-50\"></i>
                                <p class=\"mb-0 small\">Type de mouvement : {{ movement.movementType }}</p>
                            </div>
                        {% endif %}

                    {% else %}
                        <div class=\"text-center py-3 text-muted\">
                            <i class=\"fas fa-link fa-2x mb-2 opacity-50\"></i>
                            <p class=\"mb-0 small\">Aucun élément associé</p>
                            <small class=\"text-muted\">Ce mouvement n'est lié à aucune vente, achat ou retour.</small>
                        </div>
                    {% endif %}
                </div>
            </div>

            <!-- ==========================================
                 GRILLE 2 COLONNES — INFO + LOT & PRODUIT
            ========================================== -->
            <div class=\"row g-4\">
                <!-- Informations générales -->
                <div class=\"col-12 col-lg-6\">
                    <div class=\"card-clean h-100\">
                        <div class=\"card-clean-header\">
                            <h5>
                                <span class=\"header-icon\"><i class=\"fas fa-info-circle\"></i></span>
                                Informations générales
                            </h5>
                            <span class=\"badge-clean {{ movement.movementTypeBadgeClass }}\">
                                <i class=\"{{ movement.movementTypeIcon }}\"></i>
                                {{ movement.movementTypeLabel }}
                            </span>
                        </div>
                        <div class=\"card-clean-body\">
                            <div class=\"info-grid\">
                                <div class=\"info-item\">
                                    <span class=\"info-label\"><i class=\"far fa-calendar-alt\"></i> Date</span>
                                    <span class=\"info-value\">{{ movement.createdAt|date('d/m/Y H:i:s') }}</span>
                                </div>
                                <div class=\"info-item\">
                                    <span class=\"info-label\"><i class=\"fas fa-hashtag\"></i> Quantité</span>
                                    <span class=\"info-value {{ movement.movementType in ['purchase_in', 'return_in'] ? 'text-success' : 'text-danger' }}\">
                                        {{ movement.movementType in ['purchase_in', 'return_in'] ? '+' : '-' }}
                                        {{ movement.quantity|number_format(0, ',', ' ') }} unité(s)
                                    </span>
                                </div>
                                <div class=\"info-item\">
                                    <span class=\"info-label\"><i class=\"fas fa-tag\"></i> Prix unitaire</span>
                                    <span class=\"info-value\">
                                        {{ movement.unitPrice ? (movement.unitPrice|price_with_currency(movement.hmaService)) : '—' }}
                                    </span>
                                </div>
                                <div class=\"info-item\">
                                    <span class=\"info-label\"><i class=\"fas fa-coins\"></i> Valeur totale</span>
                                    <span class=\"info-value text-primary fw-bold\">
                                        {{ (movement.quantity * (movement.unitPrice|default(0)))|price_with_currency(movement.hmaService) }}
                                    </span>
                                </div>
                                {% if movement.notes %}
                                <div class=\"info-item full-width\">
                                    <span class=\"info-label\"><i class=\"fas fa-comment-alt\"></i> Notes</span>
                                    <span class=\"info-value\">{{ movement.notes }}</span>
                                </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lot & Produit -->
                <div class=\"col-12 col-lg-6\">
                    <div class=\"card-clean h-100\">
                        <div class=\"card-clean-header\">
                            <h5>
                                <span class=\"header-icon\"><i class=\"fas fa-boxes\"></i></span>
                                Lot & Produit
                            </h5>
                        </div>
                        <div class=\"card-clean-body\">
                            {% if movement.stockBatch %}
                                <div class=\"info-grid\">
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-barcode\"></i> N° lot</span>
                                        <span class=\"info-value\"><code>{{ movement.stockBatch.batchNumber }}</code></span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-box\"></i> Produit</span>
                                        <span class=\"info-value\">{{ movement.stockBatch.product.name }}</span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-barcode\"></i> Code-barres</span>
                                        <span class=\"info-value\">{{ movement.stockBatch.product.barcode }}</span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-tags\"></i> Catégorie</span>
                                        <span class=\"info-value\">{{ movement.stockBatch.product.category.name|default('—') }}</span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-tag\"></i> Prix unitaire</span>
                                        <span class=\"info-value\">{{ movement.stockBatch.unitPrice|price_with_currency(movement.hmaService) }}</span>
                                    </div>
                                    <div class=\"info-item\">
                                        <span class=\"info-label\"><i class=\"fas fa-cubes\"></i> Stock actuel</span>
                                        <span class=\"info-value fw-bold text-primary\">
                                            {{ movement.stockBatch.currentQuantity|number_format(0, ',', ' ') }} unités
                                        </span>
                                    </div>
                                    <div class=\"info-item full-width\">
                                        <span class=\"info-label\"><i class=\"fas fa-map-marker-alt\"></i> Emplacement</span>
                                        <span class=\"info-value\">{{ movement.stockBatch.locationDisplay }}</span>
                                    </div>
                                    {% if movement.stockBatch.expiryDate %}
                                    <div class=\"info-item full-width\">
                                        <span class=\"info-label\"><i class=\"far fa-calendar-times\"></i> Date d'expiration</span>
                                        <span class=\"info-value\">{{ movement.stockBatch.expiryDate|date('d/m/Y') }}</span>
                                    </div>
                                    {% endif %}
                                </div>
                            {% else %}
                                <div class=\"text-center py-3 text-muted\">
                                    <i class=\"fas fa-box-open fa-2x mb-2 opacity-50\"></i>
                                    <p class=\"mb-0 small\">Aucun lot associé à ce mouvement</p>
                                </div>
                            {% endif %}
                        </div>
                    </div>
                </div>
            </div>

            <!-- ==========================================
                 HISTORIQUE DU LOT
            ========================================== -->
            <div class=\"card-clean mt-3\">
                <div class=\"card-clean-header\">
                    <h5>
                        <span class=\"header-icon\"><i class=\"fas fa-history\"></i></span>
                        Historique des mouvements du lot
                    </h5>
                    {% if movement.stockBatch and movement.stockBatch.stockMovements|length > 0 %}
                        <span class=\"badge-clean bg-secondary text-white\">
                            <i class=\"fas fa-list\"></i>
                            {{ movement.stockBatch.stockMovements|length }} mouvement(s)
                        </span>
                    {% endif %}
                </div>

                {% if movement.stockBatch and movement.stockBatch.stockMovements|length > 0 %}

                    {# ============ DESKTOP TABLE ============ #}
                    <div class=\"table-responsive history-table-wrapper\">
                        <table class=\"history-table\">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Type</th>
                                    <th>Quantité</th>
                                    <th>Référence</th>
                                    <th>Utilisateur</th>
                                    <th class=\"text-center\">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for otherMovement in movement.stockBatch.stockMovements|sort((a, b) => b.createdAt <=> a.createdAt) %}
                                    <tr class=\"{{ otherMovement.id == movement.id ? 'is-current' : '' }}\">
                                        <td>
                                            <div class=\"fw-bold\">{{ otherMovement.createdAt|date('d/m/Y') }}</div>
                                            <small class=\"text-muted\">{{ otherMovement.createdAt|date('H:i:s') }}</small>
                                        </td>
                                        <td>
                                            <span class=\"badge-clean {{ otherMovement.movementTypeBadgeClass }}\">
                                                <i class=\"{{ otherMovement.movementTypeIcon }}\"></i>
                                                {{ otherMovement.movementTypeLabel }}
                                            </span>
                                        </td>
                                        <td class=\"{{ otherMovement.movementType in ['purchase_in', 'return_in'] ? 'text-success' : 'text-danger' }} fw-bold\">
                                            {{ otherMovement.movementType in ['purchase_in', 'return_in'] ? '+' : '-' }}
                                            {{ otherMovement.quantity|number_format(0, ',', ' ') }}
                                        </td>
                                        <td>
                                            {% if otherMovement.movementType == 'purchase_in' and otherMovement.purchaseItem %}
                                                <span class=\"text-muted\">{{ otherMovement.purchaseItem.purchase.purchaseNumber }}</span>
                                            {% elseif otherMovement.referenceId %}
                                                <span class=\"text-muted\">Réf #{{ otherMovement.referenceId }}</span>
                                            {% else %}
                                                <span class=\"text-muted\">—</span>
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if otherMovement.user %}
                                                <div class=\"d-flex align-items-center gap-2\">
                                                    {% if otherMovement.user.photo %}
                                                        <img src=\"{{ asset('uploads/users/' ~ otherMovement.user.photo) }}\"
                                                             alt=\"{{ otherMovement.user.fullName }}\"
                                                             class=\"rounded-circle\"
                                                             style=\"width: 28px; height: 28px; object-fit: cover; border: 2px solid #e2e8f0;\"
                                                             onerror=\"this.style.display='none'; this.nextElementSibling.style.display='flex';\">
                                                        <div class=\"rounded-circle bg-light d-none align-items-center justify-content-center\"
                                                             style=\"width: 28px; height: 28px;\">
                                                            <i class=\"fas fa-users text-muted\" style=\"font-size: 0.7rem;\"></i>
                                                        </div>
                                                    {% else %}
                                                        <div class=\"rounded-circle bg-light d-flex align-items-center justify-content-center\"
                                                             style=\"width: 28px; height: 28px;\">
                                                            <i class=\"fas fa-users text-muted\" style=\"font-size: 0.7rem;\"></i>
                                                        </div>
                                                    {% endif %}
                                                    <span class=\"small\">{{ otherMovement.user.fullName ?: otherMovement.user.email }}</span>
                                                </div>
                                            {% else %}
                                                <span class=\"text-muted small\"><i class=\"fas fa-robot me-1\"></i> Système</span>
                                            {% endif %}
                                        </td>
                                        <td class=\"text-center\">
                                            {% if otherMovement.id != movement.id %}
                                                <a href=\"{{ path('app_admin_stock_movement_show', {'id': otherMovement.id}) }}\"
                                                   class=\"btn btn-sm btn-outline-primary\"
                                                   title=\"Voir le détail\">
                                                    <i class=\"fas fa-eye\"></i>
                                                </a>
                                            {% else %}
                                                <span class=\"badge bg-primary-subtle text-primary fw-semibold\" style=\"font-size: 0.7rem;\">
                                                    <i class=\"fas fa-dot-circle me-1\"></i> Actuel
                                                </span>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    {# ============ MOBILE CARDS ============ #}
                    <div class=\"history-cards-mobile\">
                        {% for otherMovement in movement.stockBatch.stockMovements|sort((a, b) => b.createdAt <=> a.createdAt) %}
                            <div class=\"history-card-item {{ otherMovement.id == movement.id ? 'is-current' : '' }}\">
                                <div class=\"history-card-header\">
                                    <div>
                                        <div class=\"history-card-date\">{{ otherMovement.createdAt|date('d/m/Y') }}</div>
                                        <div class=\"history-card-time\">{{ otherMovement.createdAt|date('H:i:s') }}</div>
                                    </div>
                                    <span class=\"badge-clean {{ otherMovement.movementTypeBadgeClass }}\">
                                        <i class=\"{{ otherMovement.movementTypeIcon }}\"></i>
                                        {{ otherMovement.movementTypeLabel }}
                                    </span>
                                </div>

                                <div class=\"history-card-rows\">
                                    <div class=\"history-card-row\">
                                        <span class=\"label\"><i class=\"fas fa-hashtag me-1\"></i> Quantité</span>
                                        <span class=\"value {{ otherMovement.movementType in ['purchase_in', 'return_in'] ? 'text-success' : 'text-danger' }}\">
                                            {{ otherMovement.movementType in ['purchase_in', 'return_in'] ? '+' : '-' }}
                                            {{ otherMovement.quantity|number_format(0, ',', ' ') }}
                                        </span>
                                    </div>
                                    {% if otherMovement.referenceId %}
                                    <div class=\"history-card-row\">
                                        <span class=\"label\"><i class=\"fas fa-link me-1\"></i> Référence</span>
                                        <span class=\"value\">#{{ otherMovement.referenceId }}</span>
                                    </div>
                                    {% endif %}
                                    <div class=\"history-card-row\">
                                        <span class=\"label\"><i class=\"fas fa-user me-1\"></i> Utilisateur</span>
                                        <span class=\"value\">
                                            {{ otherMovement.user ? (otherMovement.user.fullName ?: otherMovement.user.email) : 'Système' }}
                                        </span>
                                    </div>
                                </div>

                                <div class=\"history-card-actions\">
                                    {% if otherMovement.id != movement.id %}
                                        <a href=\"{{ path('app_admin_stock_movement_show', {'id': otherMovement.id}) }}\"
                                           class=\"btn btn-sm btn-outline-primary\">
                                            <i class=\"fas fa-eye me-1\"></i> Voir
                                        </a>
                                    {% else %}
                                        <span class=\"badge bg-primary-subtle text-primary fw-semibold\" style=\"font-size: 0.7rem;\">
                                            <i class=\"fas fa-dot-circle me-1\"></i> Actuel
                                        </span>
                                    {% endif %}
                                </div>
                            </div>
                        {% endfor %}
                    </div>

                {% else %}
                    <div class=\"text-center py-5 text-muted\">
                        <i class=\"fas fa-history fa-3x mb-3 opacity-25\"></i>
                        <p class=\"mb-0\">Aucun autre mouvement pour ce lot</p>
                    </div>
                {% endif %}
            </div>

        </div>
    </div>
</div>
{% endblock %}", "admin/stock_movement/show.html.twig", "C:\\wamp64\\www\\Mes projets en Symfony\\hma_market\\templates\\admin\\stock_movement\\show.html.twig");
    }
}
