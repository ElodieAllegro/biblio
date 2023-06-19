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

/* admin/categories/index.html.twig */
class __TwigTemplate_52c5d7e69c62f8d335fb9d40b349aa86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categories/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/categories/index.html.twig", 1);
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

        echo "Liste des catégories";
        
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
        echo "    <div class= \"container\">
        <div class= \"row\">
           ";
        // line 8
        $this->loadTemplate("_partials/_adminnav.html.twig", "admin/categories/index.html.twig", 8)->display($context);
        // line 9
        echo "           <main class= \"col-9 border border-light bg-light p-2\">
                <h1>Liste des catégories</h1>
                <table class= \"table\">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nom</td>
                            <td>Parent</td>
                            <td>Slug</td>
                            <td>Ordre</td>
                            <td>actions</td>
                        
                        </tr>
                
                    </thead>
                    <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 26
            echo "                        <tr>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 30
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["categorie"], "parent", [], "any", false, false, false, 30))) {
                // line 31
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categorie"], "parent", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
                echo "
                                ";
            }
            // line 33
            echo "                            </td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "slug", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "categoryOrder", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-success\" href=\"\">Modifier</a>
                                 <a class=\"btn btn-danger\" href=\"\">Supprimer</a>

                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </tbody>
                </table>
            
           </main>
        
            </div>
        
        </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 43,  143 => 35,  139 => 34,  136 => 33,  130 => 31,  128 => 30,  123 => 28,  119 => 27,  116 => 26,  112 => 25,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Liste des catégories{% endblock  %}

{% block body %}
    <div class= \"container\">
        <div class= \"row\">
           {% include \"_partials/_adminnav.html.twig\" %}
           <main class= \"col-9 border border-light bg-light p-2\">
                <h1>Liste des catégories</h1>
                <table class= \"table\">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Nom</td>
                            <td>Parent</td>
                            <td>Slug</td>
                            <td>Ordre</td>
                            <td>actions</td>
                        
                        </tr>
                
                    </thead>
                    <tbody>
                        {% for categorie in categories %}
                        <tr>
                            <td>{{ categorie.id}}</td>
                            <td>{{ categorie.name}}</td>
                            <td>
                                {% if categorie.parent is not null %}
                                    {{ categorie.parent.name}}
                                {% endif %}
                            </td>
                            <td>{{ categorie.slug}}</td>
                            <td>{{ categorie.categoryOrder}}</td>
                            <td>
                                <a class=\"btn btn-success\" href=\"\">Modifier</a>
                                 <a class=\"btn btn-danger\" href=\"\">Supprimer</a>

                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>
            
           </main>
        
            </div>
        
        </div>

    </div>
{% endblock  %}", "admin/categories/index.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/admin/categories/index.html.twig");
    }
}
