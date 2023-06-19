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

/* products/details.html.twig */
class __TwigTemplate_4629e1edb412b04f42b038925af97c25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "products/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "products/details.html.twig", 1);
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

        echo "Détails de
    ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <main class=\"container\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
            </div>
            <div class=\"col-6\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-indicators\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "images", [], "any", false, false, false, 16))));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["iteration"]) {
            // line 17
            echo "                            <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"";
            echo twig_escape_filter($this->env, ($context["iteration"] - 1), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 17)) ? ("class=\"active\" aria-current=\"true\"") : (""));
            echo " aria-label=\"Slide ";
            echo twig_escape_filter($this->env, $context["iteration"], "html", null, true);
            echo "\"></button>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['iteration'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                    </div>
                    <div class=\"carousel-inner\">
                        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 21, $this->source); })()), "images", [], "any", false, false, false, 21));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 22
            echo "                            <div class=\"carousel-item ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) ? ("active") : (""));
            echo "\">
                                <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/uploads/products/mini/300x300-") . twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, false, 23)), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 23, $this->source); })()), "name", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                            </div>
                        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
            <div class=\"col-6\">
                <p>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38), "html", null, true);
        echo "</p>
                <p>Autheur: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "author", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>

                <p>Catégorie : ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "categories", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
                ";
        // line 43
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 43, $this->source); })()), "stock", [], "any", false, false, false, 43) > 0)) {
            // line 44
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Ajouter à ma bibliothèque</a>
                ";
        } else {
            // line 46
            echo "                    <p class=\"text-danger\">Temporairement en rupture de stock</p>
                ";
        }
        // line 48
        echo "            </div>
        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "products/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 48,  225 => 46,  219 => 44,  216 => 43,  212 => 41,  207 => 39,  203 => 38,  189 => 26,  170 => 23,  165 => 22,  148 => 21,  144 => 19,  123 => 17,  106 => 16,  98 => 11,  93 => 8,  83 => 7,  71 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Détails de
    {{ product.name }}
{% endblock %}

{% block body %}
    <main class=\"container\">
        <section class=\"row\">
            <div class=\"col-12\">
                <h1>{{ product.name }}</h1>
            </div>
            <div class=\"col-6\">
                <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\">
                    <div class=\"carousel-indicators\">
                        {% for iteration in 1..product.images|length %}
                            <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"{{ iteration - 1 }}\" {{ (loop.first ) ?'class=\"active\" aria-current=\"true\"' : '' }} aria-label=\"Slide {{ iteration }}\"></button>
                        {% endfor %}
                    </div>
                    <div class=\"carousel-inner\">
                        {% for image in product.images %}
                            <div class=\"carousel-item {{ (loop.first ) ? 'active' : '' }}\">
                                <img src=\"{{ asset('assets/uploads/products/mini/300x300-') ~ image.name }}\" class=\"d-block w-100\" alt=\"{{ product.name }}\">
                            </div>
                        {% endfor %}
                    </div>
                    <button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
                        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Previous</span>
                    </button>
                    <button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
                        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                        <span class=\"visually-hidden\">Next</span>
                    </button>
                </div>
            </div>
            <div class=\"col-6\">
                <p>{{ product.description }}</p>
                <p>Autheur: {{ product.author }}</p>

                <p>Catégorie : {{ product.categories.name }}</p>
                {# <p>Prix : {{ product.price / 100 }} €</p> #}
                {% if product.stock > 0 %}
                    <a href=\"{{ path('cart_add',{id: product.id})}}\" class=\"btn btn-success\">Ajouter à ma bibliothèque</a>
                {% else %}
                    <p class=\"text-danger\">Temporairement en rupture de stock</p>
                {% endif %}
            </div>
        </section>
    </main>
{% endblock %}
    
", "products/details.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/products/details.html.twig");
    }
}
