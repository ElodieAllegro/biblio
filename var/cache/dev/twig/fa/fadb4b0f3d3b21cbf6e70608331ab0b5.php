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

/* admin/products/index.html.twig */
class __TwigTemplate_6dd449ceeccff71a8f9b41f2a37575e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/products/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/products/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/products/index.html.twig", 1);
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

        echo "Liste des produits";
        
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
        $this->loadTemplate("_partials/_adminnav.html.twig", "admin/products/index.html.twig", 8)->display($context);
        // line 9
        echo "           <main class= \"col-9 border border-light bg-light p-2\">
                <h1>Liste des produits</h1>
                <table class= \"table\">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>photo</td>
                            <td>nom</td>
                            <td>prix</td>
                            <td>stock</td>
                            <td>categorie</td>
                            <td>actions</td>
                        
                        </tr>
                        
                
                    </thead>
                    <tbody>
                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 28
            echo "                        <tr>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                            <td><img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/products/mini/300x300-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "images", [], "any", false, false, false, 30), 0, [], "array", false, false, false, 30), "name", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" class=\"img-thumbnail\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\"></td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "name", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "price", [], "any", false, false, false, 32) / 100), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "stock", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "categories", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                            <td>
                                <a class=\"btn btn-success\" href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\">Modifier</a>
                                <a class=\"btn btn-danger\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\">Supprimer</a>

                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
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
        return "admin/products/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 42,  152 => 37,  148 => 36,  143 => 34,  139 => 33,  135 => 32,  131 => 31,  125 => 30,  121 => 29,  118 => 28,  114 => 27,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Liste des produits{% endblock  %}

{% block body %}
    <div class= \"container\">
        <div class= \"row\">
           {% include \"_partials/_adminnav.html.twig\" %}
           <main class= \"col-9 border border-light bg-light p-2\">
                <h1>Liste des produits</h1>
                <table class= \"table\">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>photo</td>
                            <td>nom</td>
                            <td>prix</td>
                            <td>stock</td>
                            <td>categorie</td>
                            <td>actions</td>
                        
                        </tr>
                        
                
                    </thead>
                    <tbody>
                        {% for produit in produits %}
                        <tr>
                            <td>{{ produit.id}}</td>
                            <td><img src=\"{{ asset('assets/uploads/products/mini/300x300-' ~ produit.images[0].name) }}\" class=\"img-thumbnail\" alt=\"{{ produit.name }}\"></td>
                            <td>{{ produit.name}}</td>
                            <td>{{ produit.price/100}}</td>
                            <td>{{ produit.stock}}</td>
                            <td>{{ produit.categories.name}}</td>
                            <td>
                                <a class=\"btn btn-success\" href=\"{{path('admin_products_edit', {id: produit.id})}}\">Modifier</a>
                                <a class=\"btn btn-danger\" href=\"{{ path('admin_products_delete', {id: produit.id}) }}\">Supprimer</a>

                            </td>
                        </tr>
                        {% endfor %}
                    </tbody>
                </table>

           </main>
        
            </div>
        
        </div>

    </div>
{% endblock  %}
", "admin/products/index.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/admin/products/index.html.twig");
    }
}
