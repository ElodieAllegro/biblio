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

/* admin/users/index.html.twig */
class __TwigTemplate_f117ca06e5cf1062141a9c5e51b04ee9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/users/index.html.twig", 1);
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

        echo "Liste des utilisateurs";
        
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 8
        $this->loadTemplate("_partials/_adminnav.html.twig", "admin/users/index.html.twig", 8)->display($context);
        // line 9
        echo "            <main class=\"col-9 border border-light bg-white p-2\">
                <h1>Liste des utilisateurs</h1>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôles</th>
                            <th>Vérifié</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 25
            echo "                            <tr>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 32
                echo "                                        ";
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 33
                    echo "                                            ";
                    $context["name"] = "Administrateur";
                    // line 34
                    echo "                                            ";
                    $context["color"] = "danger";
                    // line 35
                    echo "                                        ";
                } elseif (($context["role"] == "ROLE_PRODUCT_ADMIN")) {
                    // line 36
                    echo "                                            ";
                    $context["name"] = "Admin produits";
                    // line 37
                    echo "                                            ";
                    $context["color"] = "warning";
                    // line 38
                    echo "                                        ";
                } else {
                    // line 39
                    echo "                                            ";
                    $context["name"] = "Membre";
                    // line 40
                    echo "                                            ";
                    $context["color"] = "success";
                    // line 41
                    echo "                                        ";
                }
                // line 42
                echo "                                        <span class=\"badge bg-";
                echo twig_escape_filter($this->env, (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "</span>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                                    
                                </td>
                                <td>
                                  
                                </td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-success\">Modifier</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                    </tbody>
                </table>
            </main>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/users/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 54,  180 => 44,  169 => 42,  166 => 41,  163 => 40,  160 => 39,  157 => 38,  154 => 37,  151 => 36,  148 => 35,  145 => 34,  142 => 33,  139 => 32,  135 => 31,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  115 => 25,  111 => 24,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Liste des utilisateurs{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {% include \"_partials/_adminnav.html.twig\" %}
            <main class=\"col-9 border border-light bg-white p-2\">
                <h1>Liste des utilisateurs</h1>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Prénom</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôles</th>
                            <th>Vérifié</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            <tr>
                                <td>{{ user.id }}</td>
                                <td>{{ user.firstname }}</td>
                                <td>{{ user.lastname }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    {% for role in user.roles %}
                                        {% if role == \"ROLE_ADMIN\" %}
                                            {% set name = \"Administrateur\" %}
                                            {% set color = \"danger\" %}
                                        {% elseif role == \"ROLE_PRODUCT_ADMIN\" %}
                                            {% set name = \"Admin produits\" %}
                                            {% set color = \"warning\" %}
                                        {% else %}
                                            {% set name = \"Membre\" %}
                                            {% set color = \"success\" %}
                                        {% endif %}
                                        <span class=\"badge bg-{{ color }}\">{{ name }}</span>
                                    {% endfor %}
                                    
                                </td>
                                <td>
                                  
                                </td>
                                <td>
                                    <a href=\"#\" class=\"btn btn-success\">Modifier</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </main>
        </div>
    </div>
{% endblock %}
", "admin/users/index.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/admin/users/index.html.twig");
    }
}
