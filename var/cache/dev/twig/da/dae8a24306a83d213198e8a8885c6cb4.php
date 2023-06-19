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

/* main/index.html.twig */
class __TwigTemplate_1b5c72890beeaed020d33f07a1649a88 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<main class=\"container\">
    <section class=\"row\">
        
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "parent", [], "any", false, false, false, 11) == null)) {
                // line 12
                echo "                <div class=\"col-12\">
                    <h2>";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13), "html", null, true);
                echo "</h2>
                </div>
                ";
            } else {
                // line 16
                echo "                <div class=\"col-4\">
                    <div class=\"col-md-3\">
                        <div class=\"card bg-primary\" style=\"width: 19rem;\">
                            
                            <div class=\"card-body\">
                            <h3 class=\"card-title\">";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21), "html", null, true);
                echo "</h3>
                           
                            <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("categories_list", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" class=\"btn btn-light \">voir les produits</a>
                            </div>

                        </div>
                    </div>
                   <a href=\"#\"></a> 
                </div>
            ";
            }
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    <section>
     <section class=\" banner d-flex justify-content-center align-items-center my-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"carouselExample\" class=\"carousel slide\">
                    <div class=\"carousel-inner\">
                      <div class=\"carousel-item active\">
                        <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/IMG_0534.PNG"), "html", null, true);
        echo "\"class=\"d-block w-100\" alt=\"...\">
                      </div>
                      <div class=\"carousel-item\">
                        <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/IMG_0535.PNG"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                      </div>
                      <div class=\"carousel-item\">
                        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/IMG_0536.PNG"), "html", null, true);
        echo "\" class=\"d-block w-100\" alt=\"...\">
                      </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"prev\">
                      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                      <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"next\">
                      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                      <span class=\"visually-hidden\">Next</span>
                    </button>
                  </div>
            </div>
        </div>
      </section>
</main>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 46,  155 => 43,  149 => 40,  139 => 32,  133 => 31,  122 => 23,  117 => 21,  110 => 16,  104 => 13,  101 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

<main class=\"container\">
    <section class=\"row\">
        
        {% for category in categories %}
            {% if category.parent == null %}
                <div class=\"col-12\">
                    <h2>{{ category.name}}</h2>
                </div>
                {% else %}
                <div class=\"col-4\">
                    <div class=\"col-md-3\">
                        <div class=\"card bg-primary\" style=\"width: 19rem;\">
                            
                            <div class=\"card-body\">
                            <h3 class=\"card-title\">{{ category.name}}</h3>
                           
                            <a href=\"{{ path('categories_list', {slug: category.slug}) }}\" class=\"btn btn-light \">voir les produits</a>
                            </div>

                        </div>
                    </div>
                   <a href=\"#\"></a> 
                </div>
            {% endif %}
        {% endfor %}

    <section>
     <section class=\" banner d-flex justify-content-center align-items-center my-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div id=\"carouselExample\" class=\"carousel slide\">
                    <div class=\"carousel-inner\">
                      <div class=\"carousel-item active\">
                        <img src=\"{{ asset('assets/uploads/IMG_0534.PNG') }}\"class=\"d-block w-100\" alt=\"...\">
                      </div>
                      <div class=\"carousel-item\">
                        <img src=\"{{ asset('assets/uploads/IMG_0535.PNG') }}\" class=\"d-block w-100\" alt=\"...\">
                      </div>
                      <div class=\"carousel-item\">
                        <img src=\"{{ asset('assets/uploads/IMG_0536.PNG') }}\" class=\"d-block w-100\" alt=\"...\">
                      </div>
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"prev\">
                      <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                      <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExample\" data-bs-slide=\"next\">
                      <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                      <span class=\"visually-hidden\">Next</span>
                    </button>
                  </div>
            </div>
        </div>
      </section>
</main>


{% endblock %}
", "main/index.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/main/index.html.twig");
    }
}
