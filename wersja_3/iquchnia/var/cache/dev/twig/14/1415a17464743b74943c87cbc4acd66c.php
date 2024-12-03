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
class __TwigTemplate_1c5016b092fde9e677061a6d57722a23 extends Template
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Filtruj przepisy</h1>

    <form method=\"get\" action=\"";
        // line 8
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_filter");
        yield "\">
        <label for=\"cuisine\">Kuchnia:</label>
        <input type=\"text\" id=\"cuisine\" name=\"cuisine\">

        <label for=\"difficulty\">Trudność:</label>
        <select id=\"difficulty\" name=\"difficulty\">
            <option value=\"\">Dowolna</option>
            <option value=\"beginner\">Początkujący</option>
            <option value=\"intermediate\">Średniozaawansowany</option>
            <option value=\"advanced\">Zaawansowany</option>
        </select>

        <label for=\"is_vegetarian\">Wegetariański:</label>
        <select id=\"is_vegetarian\" name=\"is_vegetarian\">
            <option value=\"\">Dowolny</option>
            <option value=\"1\">Tak</option>
            <option value=\"0\">Nie</option>
        </select>

        <button type=\"submit\">Filtruj</button>
    </form>

    <h1>Wyniki filtrowania</h1>
    <ul>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 33
            yield "            <li>
                <h2>";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 34), "html", null, true);
            yield "</h2>
                <p><strong>Kuchnia:</strong> ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "cuisine", [], "any", false, false, false, 35), "html", null, true);
            yield "</p>
                <p><strong>Trudność:</strong> ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 36), "html", null, true);
            yield "</p>
                <p><strong>Wegetariański:</strong> ";
            // line 37
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "isVegetarian", [], "any", false, false, false, 37)) ? ("Tak") : ("Nie"));
            yield "</p>
                <p><strong>Opis:</strong> ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 38), "html", null, true);
            yield "</p>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            yield "            <p>Brak przepisów spełniających kryteria.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "    </ul>
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
        return array (  170 => 43,  163 => 41,  155 => 38,  151 => 37,  147 => 36,  143 => 35,  139 => 34,  136 => 33,  131 => 32,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Filtruj przepisy{% endblock %}

{% block body %}
    <h1>Filtruj przepisy</h1>

    <form method=\"get\" action=\"{{ path('recipe_filter') }}\">
        <label for=\"cuisine\">Kuchnia:</label>
        <input type=\"text\" id=\"cuisine\" name=\"cuisine\">

        <label for=\"difficulty\">Trudność:</label>
        <select id=\"difficulty\" name=\"difficulty\">
            <option value=\"\">Dowolna</option>
            <option value=\"beginner\">Początkujący</option>
            <option value=\"intermediate\">Średniozaawansowany</option>
            <option value=\"advanced\">Zaawansowany</option>
        </select>

        <label for=\"is_vegetarian\">Wegetariański:</label>
        <select id=\"is_vegetarian\" name=\"is_vegetarian\">
            <option value=\"\">Dowolny</option>
            <option value=\"1\">Tak</option>
            <option value=\"0\">Nie</option>
        </select>

        <button type=\"submit\">Filtruj</button>
    </form>

    <h1>Wyniki filtrowania</h1>
    <ul>
        {% for recipe in recipes %}
            <li>
                <h2>{{ recipe.name }}</h2>
                <p><strong>Kuchnia:</strong> {{ recipe.cuisine }}</p>
                <p><strong>Trudność:</strong> {{ recipe.difficulty }}</p>
                <p><strong>Wegetariański:</strong> {{ recipe.isVegetarian ? 'Tak' : 'Nie' }}</p>
                <p><strong>Opis:</strong> {{ recipe.description }}</p>
            </li>
        {% else %}
            <p>Brak przepisów spełniających kryteria.</p>
        {% endfor %}
    </ul>
{% endblock %}
", "recipe/filter.html.twig", "E:\\iQuchnia\\iquchnia\\templates\\recipe\\filter.html.twig");
    }
}
