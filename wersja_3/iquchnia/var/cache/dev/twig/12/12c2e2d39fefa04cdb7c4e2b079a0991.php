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
class __TwigTemplate_25582a3b4ba3fba4f84accf6a6bb69cc extends Template
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
                    <option value=\"\">Dowolna</option>
                    <option value=\"Włoska\">Włoska</option>
                    <option value=\"Meksykańska\">Meksykańska</option>
                    <option value=\"Amerykańska\">Amerykańska</option>
                    <option value=\"Japońska\">Japońska</option>
                    <option value=\"Indyjska\">Indyjska</option>
                    <option value=\"Bliskowschodnia\">Bliskowschodnia</option>
                    <option value=\"Śródziemnomorska\">Śródziemnomorska</option>
                    <option value=\"Tajska\">Tajska</option>
                    <option value=\"Niemiecka\">Niemiecka</option>
                    <option value=\"Hiszpańska\">Hiszpańska</option>
                    <option value=\"Brytyjska\">Brytyjska</option>
                    <option value=\"Francuska\">Francuska</option>
                    <option value=\"Chińska\">Chińska</option>
                    <option value=\"Grecka\">Grecka</option>


                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"difficulty\" class=\"form-label\">Trudność:</label>
                <select id=\"difficulty\" name=\"difficulty\" class=\"form-select\">
                    <option value=\"\">Dowolna</option>
                    <option value=\"początkujący\">Początkujący</option>
                    <option value=\"średniozaawansowany\">Średniozaawansowany</option>
                    <option value=\"zaawansowany\">Zaawansowany</option>
                    <option value=\"mistrzowski\">Mistrzowski</option>
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
        <form method=\"get\" action=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe_filter");
        yield "\" class=\"row mb-4\">
            <div class=\"col-md-3 mb-3\">
                <label for=\"ingredient1\" class=\"form-label\">Składnik 1:</label>
                <select id=\"ingredient1\" name=\"ingredient1\" class=\"form-select\">
                    <option value=\"\">Dowolny</option>
                    <option value=\"awokado\">Awokado</option>
                    <option value=\"bakłażan\">Bakłażan</option>
                    <option value=\"bazylia\">Bazylia</option>
                    <option value=\"bekon\">Bekon</option>
                    <option value=\"beszamel\">Beszamel</option>
                    <option value=\"biszkopty\">Biszkopty</option>
                    <option value=\"brokuły\">Brokuły</option>
                    <option value=\"bulion\">Bulion</option>
                    <option value=\"bułka tarta\">Bułka tarta</option>
                    <option value=\"cebula\">Cebula</option>
                    <option value=\"chili\">Chili</option>
                    <option value=\"chleb\">Chleb</option>
                    <option value=\"ciasto francuskie\">Ciasto francuskie</option>
                    <option value=\"ciasto na pizzę\">Ciasto na pizzę</option>
                    <option value=\"ciecierzyca\">Ciecierzyca</option>
                    <option value=\"cukier\">Cukier</option>
                    <option value=\"cukinia\">Cukinia</option>
                    <option value=\"curry\">Curry</option>
                    <option value=\"cynamon\">Cynamon</option>
                    <option value=\"cytryna\">Cytryna</option>
                    <option value=\"czosnek\">Czosnek</option>
                    <option value=\"falafel\">Falafel</option>
                    <option value=\"fasola\">Fasola</option>
                    <option value=\"grzanki\">Grzanki</option>
                    <option value=\"jabłka\">Jabłka</option>
                    <option value=\"jajka\">Jajka</option>
                    <option value=\"jogurt\">Jogurt</option>
                    <option value=\"kaczka\">Kaczka</option>
                    <option value=\"kakao\">Kakao</option>
                    <option value=\"kapusta\">Kapusta</option>
                    <option value=\"kawa\">Kawa</option>
                    <option value=\"kiełbaski\">Kiełbaski</option>
                    <option value=\"kolendra\">Kolendra</option>
                    <option value=\"komosa ryżowa\">Komosa ryżowa</option>
                    <option value=\"kotleciki jagnięce\">Kotleciki jagnięce</option>
                    <option value=\"krewetki\">Krewetki</option>
                    <option value=\"kurczak\">Kurczak</option>
                    <option value=\"makaron\">Makaron</option>
                    <option value=\"makaron fettuccine\">Makaron fettuccine</option>
                    <option value=\"makaron lasagne\">Makaron lasagne</option>
                    <option value=\"makaron ramen\">Makaron ramen</option>
                    <option value=\"makaron ryżowy\">Makaron ryżowy</option>
                    <option value=\"makaron ziti\">Makaron ziti</option>
                    <option value=\"marchewka\">Marchewka</option>
                    <option value=\"mascarpone\">Mascarpone</option>
                    <option value=\"masło\">Masło</option>
                    <option value=\"małże\">Małże</option>
                    <option value=\"mielona jagnięcina\">Mielona jagnięcina</option>
                    <option value=\"mielona wołowina\">Mielona wołowina</option>
                    <option value=\"mleko\">Mleko</option>
                    <option value=\"mleko kokosowe\">Mleko kokosowe</option>
                    <option value=\"mozzarella\">Mozzarella</option>
                    <option value=\"musztarda\">Musztarda</option>
                    <option value=\"mąka\">Mąka</option>
                    <option value=\"nori\">Nori</option>
                    <option value=\"ogórek\">Ogórek</option>
                    <option value=\"olej\">Olej</option>
                    <option value=\"oliwa\">Oliwa</option>
                    <option value=\"orzeszki ziemne\">Orzeszki ziemne</option>
                    <option value=\"owoce morza\">Owoce morza</option>
                    <option value=\"papryka\">Papryka</option>
                    <option value=\"parmezan\">Parmezan</option>
                    <option value=\"pieczarki\">Pieczarki</option>
                    <option value=\"pierś kurczaka\">Pierś kurczaka</option>
                    <option value=\"polędwica wołowa\">Polędwica wołowa</option>
                    <option value=\"pomidory\">Pomidory</option>
                    <option value=\"przyprawa tikka masala\">Przyprawa tikka masala</option>
                    <option value=\"ricotta\">Ricotta</option>
                    <option value=\"ryba\">Ryba</option>
                    <option value=\"ryż\">Ryż</option>
                    <option value=\"ryż do sushi\">Ryż do sushi</option>
                    <option value=\"salsa\">Salsa</option>
                    <option value=\"sałata\">Sałata</option>
                    <option value=\"sałata rzymska\">Sałata rzymska</option>
                    <option value=\"seler\">Seler</option>
                    <option value=\"ser cheddar\">Ser Cheddar</option>
                    <option value=\"ser mozzarella\">Ser Mozzarella</option>
                    <option value=\"ser pleśniowy\">Ser Pleśniowy</option>
                    <option value=\"sos Alfredo\">Sos Alfredo</option>
                    <option value=\"sos Cezar\">Sos Cezar</option>
                    <option value=\"sos hoisin\">Sos Hoisin</option>
                    <option value=\"sos marinara\">Sos Marinara</option>
                    <option value=\"sos pesto\">Sos Pesto</option>
                    <option value=\"sos pomidorowy\">Sos Pomidorowy</option>
                    <option value=\"sos sojowy\">Sos Sojowy</option>
                    <option value=\"sos tamaryndowy\">Sos Tamaryndowy</option>
                    <option value=\"syrop klonowy\">Syrop Klonowy</option>
                    <option value=\"szafran\">Szafran</option>
                    <option value=\"szpinak\">Szpinak</option>
                    <option value=\"tahini\">Tahini</option>
                    <option value=\"tortille\">Tortille</option>
                    <option value=\"warzywa\">Warzywa</option>
                    <option value=\"wieprzowina\">Wieprzowina</option>
                    <option value=\"wołowina\">Wołowina</option>
                    <option value=\"ziemniaki\">Ziemniaki</option>
                    <option value=\"zioła\">Zioła</option>
                    <option value=\"śmietana\">Śmietana</option>
                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"ingredient2\" class=\"form-label\">Składnik 2:</label>
                <select id=\"ingredient2\" name=\"ingredient2\" class=\"form-select\">
                    <option value=\"\">Dowolny</option>
                    <option value=\"awokado\">Awokado</option>
                    <option value=\"bakłażan\">Bakłażan</option>
                    <option value=\"bazylia\">Bazylia</option>
                    <option value=\"bekon\">Bekon</option>
                    <option value=\"beszamel\">Beszamel</option>
                    <option value=\"biszkopty\">Biszkopty</option>
                    <option value=\"brokuły\">Brokuły</option>
                    <option value=\"bulion\">Bulion</option>
                    <option value=\"bułka tarta\">Bułka tarta</option>
                    <option value=\"cebula\">Cebula</option>
                    <option value=\"chili\">Chili</option>
                    <option value=\"chleb\">Chleb</option>
                    <option value=\"ciasto francuskie\">Ciasto francuskie</option>
                    <option value=\"ciasto na pizzę\">Ciasto na pizzę</option>
                    <option value=\"ciecierzyca\">Ciecierzyca</option>
                    <option value=\"cukier\">Cukier</option>
                    <option value=\"cukinia\">Cukinia</option>
                    <option value=\"curry\">Curry</option>
                    <option value=\"cynamon\">Cynamon</option>
                    <option value=\"cytryna\">Cytryna</option>
                    <option value=\"czosnek\">Czosnek</option>
                    <option value=\"falafel\">Falafel</option>
                    <option value=\"fasola\">Fasola</option>
                    <option value=\"grzanki\">Grzanki</option>
                    <option value=\"jabłka\">Jabłka</option>
                    <option value=\"jajka\">Jajka</option>
                    <option value=\"jogurt\">Jogurt</option>
                    <option value=\"kaczka\">Kaczka</option>
                    <option value=\"kakao\">Kakao</option>
                    <option value=\"kapusta\">Kapusta</option>
                    <option value=\"kawa\">Kawa</option>
                    <option value=\"kiełbaski\">Kiełbaski</option>
                    <option value=\"kolendra\">Kolendra</option>
                    <option value=\"komosa ryżowa\">Komosa ryżowa</option>
                    <option value=\"kotleciki jagnięce\">Kotleciki jagnięce</option>
                    <option value=\"krewetki\">Krewetki</option>
                    <option value=\"kurczak\">Kurczak</option>
                    <option value=\"makaron\">Makaron</option>
                    <option value=\"makaron fettuccine\">Makaron fettuccine</option>
                    <option value=\"makaron lasagne\">Makaron lasagne</option>
                    <option value=\"makaron ramen\">Makaron ramen</option>
                    <option value=\"makaron ryżowy\">Makaron ryżowy</option>
                    <option value=\"makaron ziti\">Makaron ziti</option>
                    <option value=\"marchewka\">Marchewka</option>
                    <option value=\"mascarpone\">Mascarpone</option>
                    <option value=\"masło\">Masło</option>
                    <option value=\"małże\">Małże</option>
                    <option value=\"mielona jagnięcina\">Mielona jagnięcina</option>
                    <option value=\"mielona wołowina\">Mielona wołowina</option>
                    <option value=\"mleko\">Mleko</option>
                    <option value=\"mleko kokosowe\">Mleko kokosowe</option>
                    <option value=\"mozzarella\">Mozzarella</option>
                    <option value=\"musztarda\">Musztarda</option>
                    <option value=\"mąka\">Mąka</option>
                    <option value=\"nori\">Nori</option>
                    <option value=\"ogórek\">Ogórek</option>
                    <option value=\"olej\">Olej</option>
                    <option value=\"oliwa\">Oliwa</option>
                    <option value=\"orzeszki ziemne\">Orzeszki ziemne</option>
                    <option value=\"owoce morza\">Owoce morza</option>
                    <option value=\"papryka\">Papryka</option>
                    <option value=\"parmezan\">Parmezan</option>
                    <option value=\"pieczarki\">Pieczarki</option>
                    <option value=\"pierś kurczaka\">Pierś kurczaka</option>
                    <option value=\"polędwica wołowa\">Polędwica wołowa</option>
                    <option value=\"pomidory\">Pomidory</option>
                    <option value=\"przyprawa tikka masala\">Przyprawa tikka masala</option>
                    <option value=\"ricotta\">Ricotta</option>
                    <option value=\"ryba\">Ryba</option>
                    <option value=\"ryż\">Ryż</option>
                    <option value=\"ryż do sushi\">Ryż do sushi</option>
                    <option value=\"salsa\">Salsa</option>
                    <option value=\"sałata\">Sałata</option>
                    <option value=\"sałata rzymska\">Sałata rzymska</option>
                    <option value=\"seler\">Seler</option>
                    <option value=\"ser cheddar\">Ser Cheddar</option>
                    <option value=\"ser mozzarella\">Ser Mozzarella</option>
                    <option value=\"ser pleśniowy\">Ser Pleśniowy</option>
                    <option value=\"sos Alfredo\">Sos Alfredo</option>
                    <option value=\"sos Cezar\">Sos Cezar</option>
                    <option value=\"sos hoisin\">Sos Hoisin</option>
                    <option value=\"sos marinara\">Sos Marinara</option>
                    <option value=\"sos pesto\">Sos Pesto</option>
                    <option value=\"sos pomidorowy\">Sos Pomidorowy</option>
                    <option value=\"sos sojowy\">Sos Sojowy</option>
                    <option value=\"sos tamaryndowy\">Sos Tamaryndowy</option>
                    <option value=\"syrop klonowy\">Syrop Klonowy</option>
                    <option value=\"szafran\">Szafran</option>
                    <option value=\"szpinak\">Szpinak</option>
                    <option value=\"tahini\">Tahini</option>
                    <option value=\"tortille\">Tortille</option>
                    <option value=\"warzywa\">Warzywa</option>
                    <option value=\"wieprzowina\">Wieprzowina</option>
                    <option value=\"wołowina\">Wołowina</option>
                    <option value=\"ziemniaki\">Ziemniaki</option>
                    <option value=\"zioła\">Zioła</option>
                    <option value=\"śmietana\">Śmietana</option>
                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"ingredient3\" class=\"form-label\">Składnik 3:</label>
                <select id=\"ingredient3\" name=\"ingredient3\" class=\"form-select\">
                    <option value=\"\">Dowolny</option>
                    <option value=\"awokado\">Awokado</option>
                    <option value=\"bakłażan\">Bakłażan</option>
                    <option value=\"bazylia\">Bazylia</option>
                    <option value=\"bekon\">Bekon</option>
                    <option value=\"beszamel\">Beszamel</option>
                    <option value=\"biszkopty\">Biszkopty</option>
                    <option value=\"brokuły\">Brokuły</option>
                    <option value=\"bulion\">Bulion</option>
                    <option value=\"bułka tarta\">Bułka tarta</option>
                    <option value=\"cebula\">Cebula</option>
                    <option value=\"chili\">Chili</option>
                    <option value=\"chleb\">Chleb</option>
                    <option value=\"ciasto francuskie\">Ciasto francuskie</option>
                    <option value=\"ciasto na pizzę\">Ciasto na pizzę</option>
                    <option value=\"ciecierzyca\">Ciecierzyca</option>
                    <option value=\"cukier\">Cukier</option>
                    <option value=\"cukinia\">Cukinia</option>
                    <option value=\"curry\">Curry</option>
                    <option value=\"cynamon\">Cynamon</option>
                    <option value=\"cytryna\">Cytryna</option>
                    <option value=\"czosnek\">Czosnek</option>
                    <option value=\"falafel\">Falafel</option>
                    <option value=\"fasola\">Fasola</option>
                    <option value=\"grzanki\">Grzanki</option>
                    <option value=\"jabłka\">Jabłka</option>
                    <option value=\"jajka\">Jajka</option>
                    <option value=\"jogurt\">Jogurt</option>
                    <option value=\"kaczka\">Kaczka</option>
                    <option value=\"kakao\">Kakao</option>
                    <option value=\"kapusta\">Kapusta</option>
                    <option value=\"kawa\">Kawa</option>
                    <option value=\"kiełbaski\">Kiełbaski</option>
                    <option value=\"kolendra\">Kolendra</option>
                    <option value=\"komosa ryżowa\">Komosa ryżowa</option>
                    <option value=\"kotleciki jagnięce\">Kotleciki jagnięce</option>
                    <option value=\"krewetki\">Krewetki</option>
                    <option value=\"kurczak\">Kurczak</option>
                    <option value=\"makaron\">Makaron</option>
                    <option value=\"makaron fettuccine\">Makaron fettuccine</option>
                    <option value=\"makaron lasagne\">Makaron lasagne</option>
                    <option value=\"makaron ramen\">Makaron ramen</option>
                    <option value=\"makaron ryżowy\">Makaron ryżowy</option>
                    <option value=\"makaron ziti\">Makaron ziti</option>
                    <option value=\"marchewka\">Marchewka</option>
                    <option value=\"mascarpone\">Mascarpone</option>
                    <option value=\"masło\">Masło</option>
                    <option value=\"małże\">Małże</option>
                    <option value=\"mielona jagnięcina\">Mielona jagnięcina</option>
                    <option value=\"mielona wołowina\">Mielona wołowina</option>
                    <option value=\"mleko\">Mleko</option>
                    <option value=\"mleko kokosowe\">Mleko kokosowe</option>
                    <option value=\"mozzarella\">Mozzarella</option>
                    <option value=\"musztarda\">Musztarda</option>
                    <option value=\"mąka\">Mąka</option>
                    <option value=\"nori\">Nori</option>
                    <option value=\"ogórek\">Ogórek</option>
                    <option value=\"olej\">Olej</option>
                    <option value=\"oliwa\">Oliwa</option>
                    <option value=\"orzeszki ziemne\">Orzeszki ziemne</option>
                    <option value=\"owoce morza\">Owoce morza</option>
                    <option value=\"papryka\">Papryka</option>
                    <option value=\"parmezan\">Parmezan</option>
                    <option value=\"pieczarki\">Pieczarki</option>
                    <option value=\"pierś kurczaka\">Pierś kurczaka</option>
                    <option value=\"polędwica wołowa\">Polędwica wołowa</option>
                    <option value=\"pomidory\">Pomidory</option>
                    <option value=\"przyprawa tikka masala\">Przyprawa tikka masala</option>
                    <option value=\"ricotta\">Ricotta</option>
                    <option value=\"ryba\">Ryba</option>
                    <option value=\"ryż\">Ryż</option>
                    <option value=\"ryż do sushi\">Ryż do sushi</option>
                    <option value=\"salsa\">Salsa</option>
                    <option value=\"sałata\">Sałata</option>
                    <option value=\"sałata rzymska\">Sałata rzymska</option>
                    <option value=\"seler\">Seler</option>
                    <option value=\"ser cheddar\">Ser Cheddar</option>
                    <option value=\"ser mozzarella\">Ser Mozzarella</option>
                    <option value=\"ser pleśniowy\">Ser Pleśniowy</option>
                    <option value=\"sos Alfredo\">Sos Alfredo</option>
                    <option value=\"sos Cezar\">Sos Cezar</option>
                    <option value=\"sos hoisin\">Sos Hoisin</option>
                    <option value=\"sos marinara\">Sos Marinara</option>
                    <option value=\"sos pesto\">Sos Pesto</option>
                    <option value=\"sos pomidorowy\">Sos Pomidorowy</option>
                    <option value=\"sos sojowy\">Sos Sojowy</option>
                    <option value=\"sos tamaryndowy\">Sos Tamaryndowy</option>
                    <option value=\"syrop klonowy\">Syrop Klonowy</option>
                    <option value=\"szafran\">Szafran</option>
                    <option value=\"szpinak\">Szpinak</option>
                    <option value=\"tahini\">Tahini</option>
                    <option value=\"tortille\">Tortille</option>
                    <option value=\"warzywa\">Warzywa</option>
                    <option value=\"wieprzowina\">Wieprzowina</option>
                    <option value=\"wołowina\">Wołowina</option>
                    <option value=\"ziemniaki\">Ziemniaki</option>
                    <option value=\"zioła\">Zioła</option>
                    <option value=\"śmietana\">Śmietana</option>
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
        // line 392
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 392, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 393
            yield "                    <div class=\"col-md-4 mb-4\">
                        <div class=\"card\">
                            <img src=\"";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "image", [], "any", false, false, false, 395), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 395), "html", null, true);
            yield "\" class=\"card-img-top\" style=\"height: 200px; object-fit: cover;\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">";
            // line 397
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 397), "html", null, true);
            yield "</h5>
                                <p class=\"card-text\">";
            // line 398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "description", [], "any", false, false, false, 398), "html", null, true);
            yield "</p>
                                <p><strong>Składniki:</strong> ";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recipe"], "ingredients", [], "any", false, false, false, 399), "html", null, true);
            yield "</p> <!-- Tak ma byc? -->
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 404
            yield "                    <p>Brak przepisów spełniających kryteria.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recipe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 406
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
        return array (  559 => 406,  552 => 404,  542 => 399,  538 => 398,  534 => 397,  527 => 395,  523 => 393,  518 => 392,  189 => 66,  136 => 16,  130 => 12,  117 => 11,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                    <option value=\"\">Dowolna</option>
                    <option value=\"Włoska\">Włoska</option>
                    <option value=\"Meksykańska\">Meksykańska</option>
                    <option value=\"Amerykańska\">Amerykańska</option>
                    <option value=\"Japońska\">Japońska</option>
                    <option value=\"Indyjska\">Indyjska</option>
                    <option value=\"Bliskowschodnia\">Bliskowschodnia</option>
                    <option value=\"Śródziemnomorska\">Śródziemnomorska</option>
                    <option value=\"Tajska\">Tajska</option>
                    <option value=\"Niemiecka\">Niemiecka</option>
                    <option value=\"Hiszpańska\">Hiszpańska</option>
                    <option value=\"Brytyjska\">Brytyjska</option>
                    <option value=\"Francuska\">Francuska</option>
                    <option value=\"Chińska\">Chińska</option>
                    <option value=\"Grecka\">Grecka</option>


                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"difficulty\" class=\"form-label\">Trudność:</label>
                <select id=\"difficulty\" name=\"difficulty\" class=\"form-select\">
                    <option value=\"\">Dowolna</option>
                    <option value=\"początkujący\">Początkujący</option>
                    <option value=\"średniozaawansowany\">Średniozaawansowany</option>
                    <option value=\"zaawansowany\">Zaawansowany</option>
                    <option value=\"mistrzowski\">Mistrzowski</option>
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
        <form method=\"get\" action=\"{{ path('recipe_filter') }}\" class=\"row mb-4\">
            <div class=\"col-md-3 mb-3\">
                <label for=\"ingredient1\" class=\"form-label\">Składnik 1:</label>
                <select id=\"ingredient1\" name=\"ingredient1\" class=\"form-select\">
                    <option value=\"\">Dowolny</option>
                    <option value=\"awokado\">Awokado</option>
                    <option value=\"bakłażan\">Bakłażan</option>
                    <option value=\"bazylia\">Bazylia</option>
                    <option value=\"bekon\">Bekon</option>
                    <option value=\"beszamel\">Beszamel</option>
                    <option value=\"biszkopty\">Biszkopty</option>
                    <option value=\"brokuły\">Brokuły</option>
                    <option value=\"bulion\">Bulion</option>
                    <option value=\"bułka tarta\">Bułka tarta</option>
                    <option value=\"cebula\">Cebula</option>
                    <option value=\"chili\">Chili</option>
                    <option value=\"chleb\">Chleb</option>
                    <option value=\"ciasto francuskie\">Ciasto francuskie</option>
                    <option value=\"ciasto na pizzę\">Ciasto na pizzę</option>
                    <option value=\"ciecierzyca\">Ciecierzyca</option>
                    <option value=\"cukier\">Cukier</option>
                    <option value=\"cukinia\">Cukinia</option>
                    <option value=\"curry\">Curry</option>
                    <option value=\"cynamon\">Cynamon</option>
                    <option value=\"cytryna\">Cytryna</option>
                    <option value=\"czosnek\">Czosnek</option>
                    <option value=\"falafel\">Falafel</option>
                    <option value=\"fasola\">Fasola</option>
                    <option value=\"grzanki\">Grzanki</option>
                    <option value=\"jabłka\">Jabłka</option>
                    <option value=\"jajka\">Jajka</option>
                    <option value=\"jogurt\">Jogurt</option>
                    <option value=\"kaczka\">Kaczka</option>
                    <option value=\"kakao\">Kakao</option>
                    <option value=\"kapusta\">Kapusta</option>
                    <option value=\"kawa\">Kawa</option>
                    <option value=\"kiełbaski\">Kiełbaski</option>
                    <option value=\"kolendra\">Kolendra</option>
                    <option value=\"komosa ryżowa\">Komosa ryżowa</option>
                    <option value=\"kotleciki jagnięce\">Kotleciki jagnięce</option>
                    <option value=\"krewetki\">Krewetki</option>
                    <option value=\"kurczak\">Kurczak</option>
                    <option value=\"makaron\">Makaron</option>
                    <option value=\"makaron fettuccine\">Makaron fettuccine</option>
                    <option value=\"makaron lasagne\">Makaron lasagne</option>
                    <option value=\"makaron ramen\">Makaron ramen</option>
                    <option value=\"makaron ryżowy\">Makaron ryżowy</option>
                    <option value=\"makaron ziti\">Makaron ziti</option>
                    <option value=\"marchewka\">Marchewka</option>
                    <option value=\"mascarpone\">Mascarpone</option>
                    <option value=\"masło\">Masło</option>
                    <option value=\"małże\">Małże</option>
                    <option value=\"mielona jagnięcina\">Mielona jagnięcina</option>
                    <option value=\"mielona wołowina\">Mielona wołowina</option>
                    <option value=\"mleko\">Mleko</option>
                    <option value=\"mleko kokosowe\">Mleko kokosowe</option>
                    <option value=\"mozzarella\">Mozzarella</option>
                    <option value=\"musztarda\">Musztarda</option>
                    <option value=\"mąka\">Mąka</option>
                    <option value=\"nori\">Nori</option>
                    <option value=\"ogórek\">Ogórek</option>
                    <option value=\"olej\">Olej</option>
                    <option value=\"oliwa\">Oliwa</option>
                    <option value=\"orzeszki ziemne\">Orzeszki ziemne</option>
                    <option value=\"owoce morza\">Owoce morza</option>
                    <option value=\"papryka\">Papryka</option>
                    <option value=\"parmezan\">Parmezan</option>
                    <option value=\"pieczarki\">Pieczarki</option>
                    <option value=\"pierś kurczaka\">Pierś kurczaka</option>
                    <option value=\"polędwica wołowa\">Polędwica wołowa</option>
                    <option value=\"pomidory\">Pomidory</option>
                    <option value=\"przyprawa tikka masala\">Przyprawa tikka masala</option>
                    <option value=\"ricotta\">Ricotta</option>
                    <option value=\"ryba\">Ryba</option>
                    <option value=\"ryż\">Ryż</option>
                    <option value=\"ryż do sushi\">Ryż do sushi</option>
                    <option value=\"salsa\">Salsa</option>
                    <option value=\"sałata\">Sałata</option>
                    <option value=\"sałata rzymska\">Sałata rzymska</option>
                    <option value=\"seler\">Seler</option>
                    <option value=\"ser cheddar\">Ser Cheddar</option>
                    <option value=\"ser mozzarella\">Ser Mozzarella</option>
                    <option value=\"ser pleśniowy\">Ser Pleśniowy</option>
                    <option value=\"sos Alfredo\">Sos Alfredo</option>
                    <option value=\"sos Cezar\">Sos Cezar</option>
                    <option value=\"sos hoisin\">Sos Hoisin</option>
                    <option value=\"sos marinara\">Sos Marinara</option>
                    <option value=\"sos pesto\">Sos Pesto</option>
                    <option value=\"sos pomidorowy\">Sos Pomidorowy</option>
                    <option value=\"sos sojowy\">Sos Sojowy</option>
                    <option value=\"sos tamaryndowy\">Sos Tamaryndowy</option>
                    <option value=\"syrop klonowy\">Syrop Klonowy</option>
                    <option value=\"szafran\">Szafran</option>
                    <option value=\"szpinak\">Szpinak</option>
                    <option value=\"tahini\">Tahini</option>
                    <option value=\"tortille\">Tortille</option>
                    <option value=\"warzywa\">Warzywa</option>
                    <option value=\"wieprzowina\">Wieprzowina</option>
                    <option value=\"wołowina\">Wołowina</option>
                    <option value=\"ziemniaki\">Ziemniaki</option>
                    <option value=\"zioła\">Zioła</option>
                    <option value=\"śmietana\">Śmietana</option>
                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"ingredient2\" class=\"form-label\">Składnik 2:</label>
                <select id=\"ingredient2\" name=\"ingredient2\" class=\"form-select\">
                    <option value=\"\">Dowolny</option>
                    <option value=\"awokado\">Awokado</option>
                    <option value=\"bakłażan\">Bakłażan</option>
                    <option value=\"bazylia\">Bazylia</option>
                    <option value=\"bekon\">Bekon</option>
                    <option value=\"beszamel\">Beszamel</option>
                    <option value=\"biszkopty\">Biszkopty</option>
                    <option value=\"brokuły\">Brokuły</option>
                    <option value=\"bulion\">Bulion</option>
                    <option value=\"bułka tarta\">Bułka tarta</option>
                    <option value=\"cebula\">Cebula</option>
                    <option value=\"chili\">Chili</option>
                    <option value=\"chleb\">Chleb</option>
                    <option value=\"ciasto francuskie\">Ciasto francuskie</option>
                    <option value=\"ciasto na pizzę\">Ciasto na pizzę</option>
                    <option value=\"ciecierzyca\">Ciecierzyca</option>
                    <option value=\"cukier\">Cukier</option>
                    <option value=\"cukinia\">Cukinia</option>
                    <option value=\"curry\">Curry</option>
                    <option value=\"cynamon\">Cynamon</option>
                    <option value=\"cytryna\">Cytryna</option>
                    <option value=\"czosnek\">Czosnek</option>
                    <option value=\"falafel\">Falafel</option>
                    <option value=\"fasola\">Fasola</option>
                    <option value=\"grzanki\">Grzanki</option>
                    <option value=\"jabłka\">Jabłka</option>
                    <option value=\"jajka\">Jajka</option>
                    <option value=\"jogurt\">Jogurt</option>
                    <option value=\"kaczka\">Kaczka</option>
                    <option value=\"kakao\">Kakao</option>
                    <option value=\"kapusta\">Kapusta</option>
                    <option value=\"kawa\">Kawa</option>
                    <option value=\"kiełbaski\">Kiełbaski</option>
                    <option value=\"kolendra\">Kolendra</option>
                    <option value=\"komosa ryżowa\">Komosa ryżowa</option>
                    <option value=\"kotleciki jagnięce\">Kotleciki jagnięce</option>
                    <option value=\"krewetki\">Krewetki</option>
                    <option value=\"kurczak\">Kurczak</option>
                    <option value=\"makaron\">Makaron</option>
                    <option value=\"makaron fettuccine\">Makaron fettuccine</option>
                    <option value=\"makaron lasagne\">Makaron lasagne</option>
                    <option value=\"makaron ramen\">Makaron ramen</option>
                    <option value=\"makaron ryżowy\">Makaron ryżowy</option>
                    <option value=\"makaron ziti\">Makaron ziti</option>
                    <option value=\"marchewka\">Marchewka</option>
                    <option value=\"mascarpone\">Mascarpone</option>
                    <option value=\"masło\">Masło</option>
                    <option value=\"małże\">Małże</option>
                    <option value=\"mielona jagnięcina\">Mielona jagnięcina</option>
                    <option value=\"mielona wołowina\">Mielona wołowina</option>
                    <option value=\"mleko\">Mleko</option>
                    <option value=\"mleko kokosowe\">Mleko kokosowe</option>
                    <option value=\"mozzarella\">Mozzarella</option>
                    <option value=\"musztarda\">Musztarda</option>
                    <option value=\"mąka\">Mąka</option>
                    <option value=\"nori\">Nori</option>
                    <option value=\"ogórek\">Ogórek</option>
                    <option value=\"olej\">Olej</option>
                    <option value=\"oliwa\">Oliwa</option>
                    <option value=\"orzeszki ziemne\">Orzeszki ziemne</option>
                    <option value=\"owoce morza\">Owoce morza</option>
                    <option value=\"papryka\">Papryka</option>
                    <option value=\"parmezan\">Parmezan</option>
                    <option value=\"pieczarki\">Pieczarki</option>
                    <option value=\"pierś kurczaka\">Pierś kurczaka</option>
                    <option value=\"polędwica wołowa\">Polędwica wołowa</option>
                    <option value=\"pomidory\">Pomidory</option>
                    <option value=\"przyprawa tikka masala\">Przyprawa tikka masala</option>
                    <option value=\"ricotta\">Ricotta</option>
                    <option value=\"ryba\">Ryba</option>
                    <option value=\"ryż\">Ryż</option>
                    <option value=\"ryż do sushi\">Ryż do sushi</option>
                    <option value=\"salsa\">Salsa</option>
                    <option value=\"sałata\">Sałata</option>
                    <option value=\"sałata rzymska\">Sałata rzymska</option>
                    <option value=\"seler\">Seler</option>
                    <option value=\"ser cheddar\">Ser Cheddar</option>
                    <option value=\"ser mozzarella\">Ser Mozzarella</option>
                    <option value=\"ser pleśniowy\">Ser Pleśniowy</option>
                    <option value=\"sos Alfredo\">Sos Alfredo</option>
                    <option value=\"sos Cezar\">Sos Cezar</option>
                    <option value=\"sos hoisin\">Sos Hoisin</option>
                    <option value=\"sos marinara\">Sos Marinara</option>
                    <option value=\"sos pesto\">Sos Pesto</option>
                    <option value=\"sos pomidorowy\">Sos Pomidorowy</option>
                    <option value=\"sos sojowy\">Sos Sojowy</option>
                    <option value=\"sos tamaryndowy\">Sos Tamaryndowy</option>
                    <option value=\"syrop klonowy\">Syrop Klonowy</option>
                    <option value=\"szafran\">Szafran</option>
                    <option value=\"szpinak\">Szpinak</option>
                    <option value=\"tahini\">Tahini</option>
                    <option value=\"tortille\">Tortille</option>
                    <option value=\"warzywa\">Warzywa</option>
                    <option value=\"wieprzowina\">Wieprzowina</option>
                    <option value=\"wołowina\">Wołowina</option>
                    <option value=\"ziemniaki\">Ziemniaki</option>
                    <option value=\"zioła\">Zioła</option>
                    <option value=\"śmietana\">Śmietana</option>
                </select>
            </div>

            <div class=\"col-md-3 mb-3\">
                <label for=\"ingredient3\" class=\"form-label\">Składnik 3:</label>
                <select id=\"ingredient3\" name=\"ingredient3\" class=\"form-select\">
                    <option value=\"\">Dowolny</option>
                    <option value=\"awokado\">Awokado</option>
                    <option value=\"bakłażan\">Bakłażan</option>
                    <option value=\"bazylia\">Bazylia</option>
                    <option value=\"bekon\">Bekon</option>
                    <option value=\"beszamel\">Beszamel</option>
                    <option value=\"biszkopty\">Biszkopty</option>
                    <option value=\"brokuły\">Brokuły</option>
                    <option value=\"bulion\">Bulion</option>
                    <option value=\"bułka tarta\">Bułka tarta</option>
                    <option value=\"cebula\">Cebula</option>
                    <option value=\"chili\">Chili</option>
                    <option value=\"chleb\">Chleb</option>
                    <option value=\"ciasto francuskie\">Ciasto francuskie</option>
                    <option value=\"ciasto na pizzę\">Ciasto na pizzę</option>
                    <option value=\"ciecierzyca\">Ciecierzyca</option>
                    <option value=\"cukier\">Cukier</option>
                    <option value=\"cukinia\">Cukinia</option>
                    <option value=\"curry\">Curry</option>
                    <option value=\"cynamon\">Cynamon</option>
                    <option value=\"cytryna\">Cytryna</option>
                    <option value=\"czosnek\">Czosnek</option>
                    <option value=\"falafel\">Falafel</option>
                    <option value=\"fasola\">Fasola</option>
                    <option value=\"grzanki\">Grzanki</option>
                    <option value=\"jabłka\">Jabłka</option>
                    <option value=\"jajka\">Jajka</option>
                    <option value=\"jogurt\">Jogurt</option>
                    <option value=\"kaczka\">Kaczka</option>
                    <option value=\"kakao\">Kakao</option>
                    <option value=\"kapusta\">Kapusta</option>
                    <option value=\"kawa\">Kawa</option>
                    <option value=\"kiełbaski\">Kiełbaski</option>
                    <option value=\"kolendra\">Kolendra</option>
                    <option value=\"komosa ryżowa\">Komosa ryżowa</option>
                    <option value=\"kotleciki jagnięce\">Kotleciki jagnięce</option>
                    <option value=\"krewetki\">Krewetki</option>
                    <option value=\"kurczak\">Kurczak</option>
                    <option value=\"makaron\">Makaron</option>
                    <option value=\"makaron fettuccine\">Makaron fettuccine</option>
                    <option value=\"makaron lasagne\">Makaron lasagne</option>
                    <option value=\"makaron ramen\">Makaron ramen</option>
                    <option value=\"makaron ryżowy\">Makaron ryżowy</option>
                    <option value=\"makaron ziti\">Makaron ziti</option>
                    <option value=\"marchewka\">Marchewka</option>
                    <option value=\"mascarpone\">Mascarpone</option>
                    <option value=\"masło\">Masło</option>
                    <option value=\"małże\">Małże</option>
                    <option value=\"mielona jagnięcina\">Mielona jagnięcina</option>
                    <option value=\"mielona wołowina\">Mielona wołowina</option>
                    <option value=\"mleko\">Mleko</option>
                    <option value=\"mleko kokosowe\">Mleko kokosowe</option>
                    <option value=\"mozzarella\">Mozzarella</option>
                    <option value=\"musztarda\">Musztarda</option>
                    <option value=\"mąka\">Mąka</option>
                    <option value=\"nori\">Nori</option>
                    <option value=\"ogórek\">Ogórek</option>
                    <option value=\"olej\">Olej</option>
                    <option value=\"oliwa\">Oliwa</option>
                    <option value=\"orzeszki ziemne\">Orzeszki ziemne</option>
                    <option value=\"owoce morza\">Owoce morza</option>
                    <option value=\"papryka\">Papryka</option>
                    <option value=\"parmezan\">Parmezan</option>
                    <option value=\"pieczarki\">Pieczarki</option>
                    <option value=\"pierś kurczaka\">Pierś kurczaka</option>
                    <option value=\"polędwica wołowa\">Polędwica wołowa</option>
                    <option value=\"pomidory\">Pomidory</option>
                    <option value=\"przyprawa tikka masala\">Przyprawa tikka masala</option>
                    <option value=\"ricotta\">Ricotta</option>
                    <option value=\"ryba\">Ryba</option>
                    <option value=\"ryż\">Ryż</option>
                    <option value=\"ryż do sushi\">Ryż do sushi</option>
                    <option value=\"salsa\">Salsa</option>
                    <option value=\"sałata\">Sałata</option>
                    <option value=\"sałata rzymska\">Sałata rzymska</option>
                    <option value=\"seler\">Seler</option>
                    <option value=\"ser cheddar\">Ser Cheddar</option>
                    <option value=\"ser mozzarella\">Ser Mozzarella</option>
                    <option value=\"ser pleśniowy\">Ser Pleśniowy</option>
                    <option value=\"sos Alfredo\">Sos Alfredo</option>
                    <option value=\"sos Cezar\">Sos Cezar</option>
                    <option value=\"sos hoisin\">Sos Hoisin</option>
                    <option value=\"sos marinara\">Sos Marinara</option>
                    <option value=\"sos pesto\">Sos Pesto</option>
                    <option value=\"sos pomidorowy\">Sos Pomidorowy</option>
                    <option value=\"sos sojowy\">Sos Sojowy</option>
                    <option value=\"sos tamaryndowy\">Sos Tamaryndowy</option>
                    <option value=\"syrop klonowy\">Syrop Klonowy</option>
                    <option value=\"szafran\">Szafran</option>
                    <option value=\"szpinak\">Szpinak</option>
                    <option value=\"tahini\">Tahini</option>
                    <option value=\"tortille\">Tortille</option>
                    <option value=\"warzywa\">Warzywa</option>
                    <option value=\"wieprzowina\">Wieprzowina</option>
                    <option value=\"wołowina\">Wołowina</option>
                    <option value=\"ziemniaki\">Ziemniaki</option>
                    <option value=\"zioła\">Zioła</option>
                    <option value=\"śmietana\">Śmietana</option>
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
                                <p><strong>Składniki:</strong> {{ recipe.ingredients }}</p> <!-- Tak ma byc? -->
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p>Brak przepisów spełniających kryteria.</p>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}", "recipe/filter.html.twig", "E:\\DariaR\\IQuchnia\\wersja_3\\iquchnia\\templates\\recipe\\filter.html.twig");
    }
}
