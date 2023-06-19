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

/* userProfil/loans/index.html.twig */
class __TwigTemplate_e71957c09859cee7aed016dd4ac59516 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userProfil/loans/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "userProfil/loans/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "userProfil/loans/index.html.twig", 1);
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
        echo "    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 8
        $this->loadTemplate("_partials/_usernav.html.twig", "userProfil/loans/index.html.twig", 8)->display($context);
        // line 9
        echo "            <main class=\"col-9 border border-light bg-light p-2\">
                <h1>Liste des emprunts</h1>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Référence</th>
                            <th>livre</th>
                           

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loans"]) || array_key_exists("loans", $context) ? $context["loans"] : (function () { throw new RuntimeError('Variable "loans" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
            // line 24
            echo "                            <tr>
                                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "reference", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loan"], "products", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                              
                               <td>
                                    <a class=\"btn btn-primary\" href=\"\">Retourner</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
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
        return "userProfil/loans/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 34,  125 => 27,  121 => 26,  117 => 25,  114 => 24,  110 => 23,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Liste des produits{% endblock  %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">
            {% include \"_partials/_usernav.html.twig\" %}
            <main class=\"col-9 border border-light bg-light p-2\">
                <h1>Liste des emprunts</h1>
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Référence</th>
                            <th>livre</th>
                           

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for loan in loans %}
                            <tr>
                                <td>{{ loan.id }}</td>
                                <td>{{ loan.reference }}</td>
                                <td>{{ loan.products.id }}</td>
                              
                               <td>
                                    <a class=\"btn btn-primary\" href=\"\">Retourner</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </main>
        </div>
    </div>
{% endblock %}


", "userProfil/loans/index.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/userProfil/loans/index.html.twig");
    }
}
