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

/* recipe/filter.html.twig */
class __TwigTemplate_3639144552b3a9e03b086cfb25f6f58f extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/filter.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recipe/filter.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recipe/filter.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Filtruj przepisy";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        yield "
    <!-- Link do Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Filtruj przepisy</h1>

        <!-- Formularz filtrujący -->
        <form method=\"get\" action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_filter");
        yield "\" class=\"row mb-4\">
            <div class=\"col-md-3 mb-3\">
                <label for=\"cuisine\" class=\"form-label\">Kuchnia:</label>
                <select id=\"cuisine\" name=\"cuisine\" class=\"form-select\">
                    <option value=\"\">All</option>
                    <option value=\"Italian\">Italian</option>
                    <option value=\"Mexican\">Mexican</option>
                    <option value=\"American\">American</option>
                    <option value=\"Japanese\">Japanese</option>
                    <option value=\"Indian\">Indian</option>
                    <option value=\"Middle Eastern\">Middle Eastern</option>
                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"difficulty\" class=\"form-label\">Trudność:</label>
                <select id=\"difficulty\" name=\"difficulty\" class=\"form-select\">
                    <option value=\"\">Dowolna</option>
                    <option value=\"beginner\">Początkujący</option>
                    <option value=\"intermediate\">Średniozaawansowany</option>
                    <option value=\"advanced\">Zaawansowany</option>
                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"is_vegetarian\" class=\"form-label\">Wegetariański:</label>
                <select id=\"is_vegetarian\" name=\"is_vegetarian\" class=\"form-select\">
                    <option value=\"\">Dowolny</option>
                    <option value=\"1\">Tak</option>
                    <option value=\"0\">Nie</option>
                </select>
            </div>

            <!-- Przycisk Filtruj obok pól -->
            <div class=\"col-md-3 d-flex align-items-end mb-3\">
                <button type=\"submit\" class=\"btn btn-primary w-100\">Filtruj</button>
            </div>
        </form>

        <div class=\"container mt-4\">
            <h1 class=\"mb-4\">Przepisy</h1>

            <!-- Wyświetlanie przepisów -->
            <div class=\"row\">
                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 60, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 61
            yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 63), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 63), "html", null, true);
            yield "\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 65), "html", null, true);
            yield "</h5>
                                <p class=\"card-text\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 66), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 71
            yield "                    <p>Brak przepisów spełniających kryteria.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "            </div>
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
        return "recipe/filter.html.twig";
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
        return array (  220 => 73,  213 => 71,  203 => 66,  199 => 65,  192 => 63,  188 => 61,  183 => 60,  136 => 16,  130 => 12,  117 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Filtruj przepisy{% endblock %}

{% block stylesheets %}
    {{ encore_entry_link_tags('app') }}
    <!-- Link do Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Filtruj przepisy</h1>

        <!-- Formularz filtrujący -->
        <form method=\"get\" action=\"{{ path('recipe_filter') }}\" class=\"row mb-4\">
            <div class=\"col-md-3 mb-3\">
                <label for=\"cuisine\" class=\"form-label\">Kuchnia:</label>
                <select id=\"cuisine\" name=\"cuisine\" class=\"form-select\">
                    <option value=\"\">All</option>
                    <option value=\"Italian\">Italian</option>
                    <option value=\"Mexican\">Mexican</option>
                    <option value=\"American\">American</option>
                    <option value=\"Japanese\">Japanese</option>
                    <option value=\"Indian\">Indian</option>
                    <option value=\"Middle Eastern\">Middle Eastern</option>
                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"difficulty\" class=\"form-label\">Trudność:</label>
                <select id=\"difficulty\" name=\"difficulty\" class=\"form-select\">
                    <option value=\"\">Dowolna</option>
                    <option value=\"beginner\">Początkujący</option>
                    <option value=\"intermediate\">Średniozaawansowany</option>
                    <option value=\"advanced\">Zaawansowany</option>
                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"is_vegetarian\" class=\"form-label\">Wegetariański:</label>
                <select id=\"is_vegetarian\" name=\"is_vegetarian\" class=\"form-select\">
                    <option value=\"\">Dowolny</option>
                    <option value=\"1\">Tak</option>
                    <option value=\"0\">Nie</option>
                </select>
            </div>

            <!-- Przycisk Filtruj obok pól -->
            <div class=\"col-md-3 d-flex align-items-end mb-3\">
                <button type=\"submit\" class=\"btn btn-primary w-100\">Filtruj</button>
            </div>
        </form>

        <div class=\"container mt-4\">
            <h1 class=\"mb-4\">Przepisy</h1>

            <!-- Wyświetlanie przepisów -->
            <div class=\"row\">
                {% for recipe in recipes %}
                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"{{ recipe.image }}\" alt=\"{{ recipe.name }}\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">{{ recipe.name }}</h5>
                                <p class=\"card-text\">{{ recipe.description }}</p>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p>Brak przepisów spełniających kryteria.</p>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "recipe/filter.html.twig", "C:\\Users\\dawid\\Desktop\\Studia\\IPZ\\IQuchnia\\wersja_3\\iquchnia\\templates\\recipe\\filter.html.twig");
    }
}
