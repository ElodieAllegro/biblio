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

/* cart/index.html.twig */
class __TwigTemplate_fbd8234bb697cbc76be6673e9084e88b extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Mon panier";
        
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
        echo "
<section class=\"h-100 h-custom\" style=\"background-color: #eee;\">
    <div class=\"container h-100 py-5\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-10\">

                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"fw-normal mb-0 text-black\">Mon panier</h3>
                    <div>
                       
                        <h6 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\" class=\"text-body\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-long-arrow-alt-left me-2\"></i>Retour aux catégories</a>
\t\t\t\t\t\t</h6>
                    </div>
                </div>

                ";
        // line 25
        if ((twig_length_filter($this->env, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 25, $this->source); })())) > 0)) {
            // line 26
            echo "                    <form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_index");
            echo "\">

                    ";
            // line 28
            $context["total"] = 0;
            // line 29
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                echo "                        ";
                $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 30, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "price", [], "any", false, false, false, 30) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 30)));
                // line 31
                echo "                        <div class=\"card rounded-3 mb-4\">
                            <div class=\"card-body p-4\">
                                <div class=\"row d-flex justify-content-between align-items-center\">

                                    <div class=\"col-md-2 col-lg-2 col-xl-2\">
                                        <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/products/mini/300x300-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "images", [], "any", false, false, false, 36), 0, [], "array", false, false, false, 36), "name", [], "any", false, false, false, 36))), "html", null, true);
                echo "\" class=\"img-thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
                echo "\">
                                    </div>

                                    <div class=\"col-md-3 col-lg-3 col-xl-3\">
                                        <p class=\"lead fw-normal mb-2\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                echo "</p>
                                        <p>
                                            <span class=\"text-muted\">Id:</span> ";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
                echo "<br>
                                            <span class=\"text-muted\">Stock:</span> ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 43), "stock", [], "any", false, false, false, 43), "html", null, true);
                echo "
                                        </p>
                                    </div>

                                    <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                                        <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_decrease", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"btn btn-success\">-</a> 
                                        <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 49), "html", null, true);
                echo "\" type=\"number\" class=\"form-control form-control-sm\" />
                                       <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 50), "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" class=\"btn btn-success\">+</a> 
                                    </div>

                                    <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                                        <h6 class=\"mb-4\">Prix unitaire: ";
                // line 54
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54) / 100), "html", null, true);
                echo " €</h6>
                                        <h6 class=\"mb-0\">Prix total: ";
                // line 55
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 55), "price", [], "any", false, false, false, 55) * twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 55)) / 100), "html", null, true);
                echo " €</h6>
                                    </div>

                                    <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                                        <a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\" class=\"text-danger\">
                                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                <div class=\"card\">
                    <div class=\"row ms-2\">
                        <div class=\"card-body col-9\">
                            <a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_removeAll");
            echo "\" type=\"button\" class=\"btn btn-warning btn-block btn-lg\">Vider le panier</a>
                        </div>
                        <div class=\"card-body col-3\">
                            <h5>total: ";
            // line 74
            echo twig_escape_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 74, $this->source); })()) / 100), "html", null, true);
            echo " €</h5>
                        </div>
                    </div>
                    <div class=\"row ms-2\">
                        <div class=\"card-body col-9\">
                            <a  href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_index");
            echo "\" type=\"submit\" class=\"btn btn-success btn-block btn-lg\">Récapitulatif</a>
                        </div>
                    </div>
                </div>
                </form>
                ";
        } else {
            // line 85
            echo "                    <div class=\"card mb-4\">
                        <div class=\"card-body p-4 d-flex flex-row\">
                            <div class=\"form-outline flex-fill\">
                                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                    <h3 class=\"fw-normal mb-0 text-black text-center \">Votre panier est vide</h3>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        // line 96
        echo "
              


            </div>
        </div>
    </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 96,  230 => 85,  221 => 79,  213 => 74,  207 => 71,  202 => 68,  187 => 59,  180 => 55,  176 => 54,  169 => 50,  165 => 49,  161 => 48,  153 => 43,  149 => 42,  144 => 40,  135 => 36,  128 => 31,  125 => 30,  120 => 29,  118 => 28,  112 => 26,  110 => 25,  101 => 19,  88 => 8,  78 => 7,  59 => 5,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'base.html.twig' %}

{% block title %}Mon panier{% endblock %}

{% block body %}

<section class=\"h-100 h-custom\" style=\"background-color: #eee;\">
    <div class=\"container h-100 py-5\">
        <div class=\"row d-flex justify-content-center align-items-center h-100\">
            <div class=\"col-10\">

                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                    <h3 class=\"fw-normal mb-0 text-black\">Mon panier</h3>
                    <div>
                       
                        <h6 class=\"mb-0\">
\t\t\t\t\t\t\t<a href=\"{{ path('main') }}\" class=\"text-body\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-long-arrow-alt-left me-2\"></i>Retour aux catégories</a>
\t\t\t\t\t\t</h6>
                    </div>
                </div>

                {% if cart|length > 0 %}
                    <form action=\"{{ path('orders_index') }}\">

                    {% set total = 0 %}
                    {% for item in cart %}
                        {% set total = total + (item.product.price * item.quantity) %}
                        <div class=\"card rounded-3 mb-4\">
                            <div class=\"card-body p-4\">
                                <div class=\"row d-flex justify-content-between align-items-center\">

                                    <div class=\"col-md-2 col-lg-2 col-xl-2\">
                                        <img src=\"{{ asset('assets/uploads/products/mini/300x300-' ~ item.product.images[0].name) }}\" class=\"img-thumbnail\" alt=\"{{ item.product.name }}\">
                                    </div>

                                    <div class=\"col-md-3 col-lg-3 col-xl-3\">
                                        <p class=\"lead fw-normal mb-2\">{{ item.product.name }}</p>
                                        <p>
                                            <span class=\"text-muted\">Id:</span> {{ item.product.id }}<br>
                                            <span class=\"text-muted\">Stock:</span> {{ item.product.stock }}
                                        </p>
                                    </div>

                                    <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                                        <a href=\"{{path('cart_decrease', {id: item.product.id})}}\" class=\"btn btn-success\">-</a> 
                                        <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"{{ item.quantity }}\" type=\"number\" class=\"form-control form-control-sm\" />
                                       <a href=\"{{path('cart_add', {id: item.product.id})}}\" class=\"btn btn-success\">+</a> 
                                    </div>

                                    <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                                        <h6 class=\"mb-4\">Prix unitaire: {{ item.product.price / 100}} €</h6>
                                        <h6 class=\"mb-0\">Prix total: {{ item.product.price * item.quantity / 100 }} €</h6>
                                    </div>

                                    <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                                        <a href=\"{{path('cart_remove', {id: item.product.id})}}\" class=\"text-danger\">
                                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    {% endfor %}
                <div class=\"card\">
                    <div class=\"row ms-2\">
                        <div class=\"card-body col-9\">
                            <a href=\"{{path('cart_removeAll')}}\" type=\"button\" class=\"btn btn-warning btn-block btn-lg\">Vider le panier</a>
                        </div>
                        <div class=\"card-body col-3\">
                            <h5>total: {{total / 100}} €</h5>
                        </div>
                    </div>
                    <div class=\"row ms-2\">
                        <div class=\"card-body col-9\">
                            <a  href=\"{{path('orders_index')}}\" type=\"submit\" class=\"btn btn-success btn-block btn-lg\">Récapitulatif</a>
                        </div>
                    </div>
                </div>
                </form>
                {% else %}
                    <div class=\"card mb-4\">
                        <div class=\"card-body p-4 d-flex flex-row\">
                            <div class=\"form-outline flex-fill\">
                                <div class=\"d-flex justify-content-between align-items-center mb-4\">
                                    <h3 class=\"fw-normal mb-0 text-black text-center \">Votre panier est vide</h3>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endif %}

              


            </div>
        </div>
    </div>
</section>

{% endblock %}






































", "cart/index.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/cart/index.html.twig");
    }
}
