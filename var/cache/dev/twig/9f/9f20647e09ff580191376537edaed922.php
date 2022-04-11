<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/home.html.twig */
class __TwigTemplate_f81dfdaff52ebfbfc8b668c85ed4a723 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<header class=\"container\">
\t\t<div class=\"jumbotron mt-3 home-header\">
\t\t\t<h1 class=\"display-4\">A Field Guide to Angry Birds</h1>
\t\t\t<p class=\"lead\">Games that lodge in the brain often have comical stars !</p>
\t\t\t<p>You have previously showed interest with this bird :
\t\t\t\t";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["lastBirdVisited"]) || array_key_exists("lastBirdVisited", $context) ? $context["lastBirdVisited"] : (function () { throw new RuntimeError('Variable "lastBirdVisited" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p>To celebrate the new year and have the birds with you all day long, here's a gift !</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-md\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download");
        echo "\" role=\"button\">Download PDF Calendar</a>
\t\t\t</p>
\t\t</div>
\t</header>

\t<main class=\"container main-content\">
\t\t<div
\t\t\tclass=\"row\">
\t\t\t<!-- Bird Card -->
\t\t\t";
        // line 22
        $context["colorsOddEven"] = [0 => "odd", 1 => "even"];
        // line 23
        echo "\t\t\t";
        // line 24
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 0));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 25
            echo "\t\t\t\t";
            // line 26
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["birds"]) || array_key_exists("birds", $context) ? $context["birds"] : (function () { throw new RuntimeError('Variable "birds" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["bird"]) {
                // line 27
                echo "\t\t\t\t";
                // line 28
                echo "\t\t\t\t\t<div class=\"col-6 col-sm-6 col-md-4 col-lg-3 ";
                echo twig_escape_filter($this->env, twig_cycle([0 => "odd", 1 => "even"], $context["key"]), "html", null, true);
                echo "\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card mb-3 bird-card\">
\t\t\t\t\t\t\t";
                // line 33
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("bird_show", ["id" => $context["key"]]), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<h3 class=\"card-header bird-card__title\">
\t\t\t\t\t\t\t\t\t";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bird"], "name", [], "any", false, false, false, 35), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"bird-card__image\" src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/css/images/" . twig_get_attribute($this->env, $this->source, $context["bird"], "image", [], "any", false, false, false, 38))), "html", null, true);
                echo "\" width=\"100%\">
\t\t\t\t\t\t\t";
                // line 40
                echo "\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['bird'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t</div>
\t</main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 46,  146 => 45,  136 => 40,  132 => 38,  126 => 35,  120 => 33,  112 => 28,  110 => 27,  105 => 26,  103 => 25,  98 => 24,  96 => 23,  94 => 22,  82 => 13,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<header class=\"container\">
\t\t<div class=\"jumbotron mt-3 home-header\">
\t\t\t<h1 class=\"display-4\">A Field Guide to Angry Birds</h1>
\t\t\t<p class=\"lead\">Games that lodge in the brain often have comical stars !</p>
\t\t\t<p>You have previously showed interest with this bird :
\t\t\t\t{{ lastBirdVisited }}</p>
\t\t\t<hr class=\"my-4\">
\t\t\t<p>To celebrate the new year and have the birds with you all day long, here's a gift !</p>
\t\t\t<p class=\"lead\">
\t\t\t\t<a class=\"btn btn-primary btn-md\" href=\"{{ path('download') }}\" role=\"button\">Download PDF Calendar</a>
\t\t\t</p>
\t\t</div>
\t</header>

\t<main class=\"container main-content\">
\t\t<div
\t\t\tclass=\"row\">
\t\t\t<!-- Bird Card -->
\t\t\t{% set colorsOddEven = ['odd', 'even'] %}
\t\t\t{# The twig cycle methods works with its key, value defined within a set. Set is an array of values #}
\t\t\t{% for i in 0..0 %}
\t\t\t\t{# We can use multiple for loop to use differents key or values. But one would also have been enough here. This one is for the cycle #}
\t\t\t\t{% for key, bird in birds %}
\t\t\t\t{# Loop the values in array birds of home method #}
\t\t\t\t\t<div class=\"col-6 col-sm-6 col-md-4 col-lg-3 {{ cycle(['odd','even'], key )}}\">

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"card mb-3 bird-card\">
\t\t\t\t\t\t\t{# The method path indicates the methods we use to display the data. The methods has a name which is 1st parameter of PATH, then comes 2sn parameter which is the ID. As ID is mandatory in this bird_show method #}
\t\t\t\t\t\t\t<a href=\"{{ path('bird_show', {id:key}) }}\">
\t\t\t\t\t\t\t\t<h3 class=\"card-header bird-card__title\">
\t\t\t\t\t\t\t\t\t{{ bird.name }}
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<img
\t\t\t\t\t\t\t\tclass=\"bird-card__image\" src=\"{{ asset('/css/images/' ~ bird.image) }}\" width=\"100%\">
\t\t\t\t\t\t\t{# {{ dump(bird.image) }} #}
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t{% endfor  %}
\t\t\t{% endfor %}
\t\t</div>
\t</main>
{% endblock %}
", "home/home.html.twig", "C:\\wamp64\\www\\symfony\\angrybirds\\templates\\home\\home.html.twig");
    }
}
