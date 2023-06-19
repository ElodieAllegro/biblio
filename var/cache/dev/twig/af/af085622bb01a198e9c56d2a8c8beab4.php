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

/* admin/transporters/index.html.twig */
class __TwigTemplate_b7bd8638312448d5e0c53c269415b05a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/transporters/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/transporters/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/transporters/index.html.twig", 1);
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

        echo "Liste des transporteurs";
        
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
        $this->loadTemplate("_partials/_adminnav.html.twig", "admin/transporters/index.html.twig", 8)->display($context);
        // line 9
        echo "            <main class=\"col-9 border border-light bg-white p-2\">
                <h1>Liste des transporteurs</h1>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transporters"]) || array_key_exists("transporters", $context) ? $context["transporters"] : (function () { throw new RuntimeError('Variable "transporters" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["transporter"]) {
            // line 22
            echo "                            <tr>
                                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transporter"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transporter"], "title", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["transporter"], "price", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                               
                                <td>
                                 <a class=\"btn btn-success\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transporters_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["transporter"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Modifier</a>
                                 <a class=\"btn btn-danger\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transporters_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["transporter"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Supprimer</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transporter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
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
        return "admin/transporters/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 33,  133 => 29,  129 => 28,  123 => 25,  119 => 24,  115 => 23,  112 => 22,  108 => 21,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Liste des transporteurs{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {% include \"_partials/_adminnav.html.twig\" %}
            <main class=\"col-9 border border-light bg-white p-2\">
                <h1>Liste des transporteurs</h1>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for transporter in transporters %}
                            <tr>
                                <td>{{ transporter.id }}</td>
                                <td>{{ transporter.title }}</td>
                                <td>{{ transporter.price }}</td>
                               
                                <td>
                                 <a class=\"btn btn-success\" href=\"{{path('admin_transporters_edit', {id: transporter.id})}}\">Modifier</a>
                                 <a class=\"btn btn-danger\" href=\"{{ path('admin_transporters_delete', {id: transporter.id}) }}\">Supprimer</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </main>
        </div>
    </div>
{% endblock %}", "admin/transporters/index.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/admin/transporters/index.html.twig");
    }
}
