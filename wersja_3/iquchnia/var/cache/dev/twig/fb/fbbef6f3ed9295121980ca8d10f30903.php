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

/* base.html.twig */
class __TwigTemplate_4b6fb36535121ab2b7ddcc1b412ac073 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Link do Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Link do Bootstrap Icons CSS (opcjonalnie, jeśli używasz ikon) -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Niestandardowe style, jeśli je masz -->
    ";
        // line 14
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield " <!-- Wczytanie plików CSS -->

</head>
<body>
<!-- Górny pasek nawigacyjny -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <!-- Logo i nazwa iQuchnia obok siebie -->
        <a class=\"navbar-brand d-flex align-items-center\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_list");
        yield "\">
            <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.jpg"), "html", null, true);
        yield "\" id=\"logo\" alt=\"Logo iQuchnia\" style=\"max-width: 150px; height: auto;\">
            <span class=\"ms-2 h3 mb-0\">iQuchnia</span> <!-- Nazwa obok logo -->
        </a>

        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_filter");
        yield "\" class=\"ms-3 h5 mb-0 text-decoration-none text-dark\">
            Filtruj
        </a>

        <div class=\"d-flex ms-auto\"> <!-- ms-auto dodaje margines do lewej, co pcha elementy na prawo -->
            <!-- Pasek wyszukiwania -->
            <form action=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "uri", [], "any", false, false, false, 33), "html", null, true);
        yield "\" method=\"get\" class=\"d-flex me-3\">
                <input type=\"text\" name=\"search\" class=\"form-control me-2\" placeholder=\"Wyszukaj przepisy...\" value=\"";
        // line 34
        (((array_key_exists("search", $context) &&  !(null === (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 34, $this->source); })())))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 34, $this->source); })()), "html", null, true)) : (yield ""));
        yield "\" />
                <button class=\"btn btn-outline-success\" type=\"submit\">
                    <i class=\"bi bi-search\"></i> <!-- Ikona wyszukiwania -->
                </button>
            </form>


            ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            yield "                <!-- Ikona wylogowania -->
                <form action=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" method=\"post\" class=\"d-inline\">
                    <button type=\"submit\" class=\"btn btn-link p-0 text-danger\" style=\"border: none; background: none;\">
                        <i class=\"bi bi-box-arrow-right\" style=\"font-size: 1.5rem;\" title=\"Wyloguj\"></i>
                    </button>
                </form>
            ";
        } else {
            // line 49
            yield "                <!-- Ikona logowania -->
                <a href=\"";
            // line 50
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn btn-link p-0 text-primary\">
                    <i class=\"bi bi-box-arrow-in-right\" style=\"font-size: 1.5rem;\" title=\"Zaloguj\"></i>
                </a>
            ";
        }
        // line 54
        yield "
        </div>
    </div>
</nav>

<!-- Treść strony -->
<div class=\"container mt-4\">
    ";
        // line 61
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 62
        yield "</div>

<!-- Wczytanie plików JS -->
";
        // line 65
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        yield "

<!-- Link do Bootstrap JS (opcjonalnie, jeśli korzystasz z interakcji JS) -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js\"></script>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "iQuchnia";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  195 => 61,  172 => 6,  153 => 65,  148 => 62,  146 => 61,  137 => 54,  130 => 50,  127 => 49,  118 => 43,  115 => 42,  113 => 41,  103 => 34,  99 => 33,  90 => 27,  83 => 23,  79 => 22,  68 => 14,  57 => 6,  50 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pl\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>{% block title %}iQuchnia{% endblock %}</title>

    <!-- Link do Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <!-- Link do Bootstrap Icons CSS (opcjonalnie, jeśli używasz ikon) -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Niestandardowe style, jeśli je masz -->
    {{ encore_entry_link_tags('app') }} <!-- Wczytanie plików CSS -->

</head>
<body>
<!-- Górny pasek nawigacyjny -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <!-- Logo i nazwa iQuchnia obok siebie -->
        <a class=\"navbar-brand d-flex align-items-center\" href=\"{{ path('recipe_list') }}\">
            <img src=\"{{ asset('images/logo.jpg') }}\" id=\"logo\" alt=\"Logo iQuchnia\" style=\"max-width: 150px; height: auto;\">
            <span class=\"ms-2 h3 mb-0\">iQuchnia</span> <!-- Nazwa obok logo -->
        </a>

        <a href=\"{{ path('recipe_filter') }}\" class=\"ms-3 h5 mb-0 text-decoration-none text-dark\">
            Filtruj
        </a>

        <div class=\"d-flex ms-auto\"> <!-- ms-auto dodaje margines do lewej, co pcha elementy na prawo -->
            <!-- Pasek wyszukiwania -->
            <form action=\"{{ app.request.uri }}\" method=\"get\" class=\"d-flex me-3\">
                <input type=\"text\" name=\"search\" class=\"form-control me-2\" placeholder=\"Wyszukaj przepisy...\" value=\"{{ search ?? '' }}\" />
                <button class=\"btn btn-outline-success\" type=\"submit\">
                    <i class=\"bi bi-search\"></i> <!-- Ikona wyszukiwania -->
                </button>
            </form>


            {% if app.user %}
                <!-- Ikona wylogowania -->
                <form action=\"{{ path('app_logout') }}\" method=\"post\" class=\"d-inline\">
                    <button type=\"submit\" class=\"btn btn-link p-0 text-danger\" style=\"border: none; background: none;\">
                        <i class=\"bi bi-box-arrow-right\" style=\"font-size: 1.5rem;\" title=\"Wyloguj\"></i>
                    </button>
                </form>
            {% else %}
                <!-- Ikona logowania -->
                <a href=\"{{ path('app_login') }}\" class=\"btn btn-link p-0 text-primary\">
                    <i class=\"bi bi-box-arrow-in-right\" style=\"font-size: 1.5rem;\" title=\"Zaloguj\"></i>
                </a>
            {% endif %}

        </div>
    </div>
</nav>

<!-- Treść strony -->
<div class=\"container mt-4\">
    {% block body %}{% endblock %}
</div>

<!-- Wczytanie plików JS -->
{{ encore_entry_script_tags('app') }}

<!-- Link do Bootstrap JS (opcjonalnie, jeśli korzystasz z interakcji JS) -->
<script src=\"https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js\"></script>
</body>
</html>
", "base.html.twig", "E:\\DariaR\\IQuchnia\\wersja_3\\iquchnia\\templates\\base.html.twig");
    }
}
