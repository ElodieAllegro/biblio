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

/* orders/index.html.twig */
class __TwigTemplate_ba702801ae6d0df97b4dd00c71e4c3df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "orders/index.html.twig", 1);
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

        echo "creation de la commande";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
\t";
        // line 9
        echo "

\t<section class=\"h-100 h-custom\" style=\"background-color: #eee;\">
\t\t<div class=\"container py-5 h-100\">
\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t<div class=\"col-12\">

\t\t\t\t\t<div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-5\">

\t\t\t\t\t\t\t\t\t\t\t";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_prepare")]);
        echo "
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"fw-normal mb-0 text-black\">Récapitulatif de la commande<span>(";
        // line 24
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\tproduits)</span>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr class=\"my-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 29
        $context["total"] = null;
        // line 30
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recapCart"]) || array_key_exists("recapCart", $context) ? $context["recapCart"] : (function () { throw new RuntimeError('Variable "recapCart" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 31
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 31, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 31), "price", [], "any", false, false, false, 31) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 31)));
            // line 32
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-4 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-lg-2 col-xl-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/uploads/products/mini/300x300-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "images", [], "any", false, false, false, 34), 0, [], "array", false, false, false, 34), "name", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" class=\"img-thumbnail\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-lg-3 col-xl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead fw-normal mb-2\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Id:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
            echo "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Stock:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 44), "stock", [], "any", false, false, false, 44), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 48
            echo " 


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t                     <h6 class=\"mb-4\">Prix unitaire: ";
            // line 53
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 53), "price", [], "any", false, false, false, 53) / 100), "html", null, true);
            echo " €</h6>
\t\t\t\t\t\t\t\t\t\t\t\t                     <h6 class=\"mb-0\">Prix total: ";
            // line 54
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 54), "price", [], "any", false, false, false, 54) * twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 54)) / 100), "html", null, true);
            echo " €</h6>
\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t                     <a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "product", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\" class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t                     <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t\t\t\t\t<hr class=\"my-4\">

\t\t\t\t\t\t\t\t\t\t<div class=\"pt-5\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-long-arrow-alt-left me-2\"></i>Retour au panier</a>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

";
        // line 75
        echo "\t\t\t\t\t\t\t\t<div class=\"col-lg-4 bg-grey\">
\t\t\t\t\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
\t\t\t\t\t\t\t\t\t\t<hr
\t\t\t\t\t\t\t\t\t\tclass=\"my-4\">

\t\t\t\t\t\t\t\t\t\t";
        // line 82
        echo "
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-secondary mb-3\">Adresse</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 85
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "address", [], "any", false, false, false, 85), 'row'), ["[-br]" => "</br>"]);
        echo "

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-secondary mb-3\">Lieu de retrait</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 91
        echo twig_replace_filter($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "transporters", [], "any", false, false, false, 91), 'row'), ["[-br]" => "</br>"]);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr class=\"my-4\">


\t\t\t\t\t\t\t\t\t\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-primary btn-lg\" type=\"submit\">Submit</button>
\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t</section>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "orders/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 98,  234 => 96,  226 => 91,  217 => 85,  212 => 82,  204 => 75,  194 => 67,  188 => 63,  176 => 57,  170 => 54,  166 => 53,  159 => 48,  154 => 44,  149 => 42,  141 => 37,  133 => 34,  129 => 32,  126 => 31,  121 => 30,  119 => 29,  111 => 24,  107 => 23,  91 => 9,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}creation de la commande{% endblock %}


{% block body %}

\t{# _____________________________ #}


\t<section class=\"h-100 h-custom\" style=\"background-color: #eee;\">
\t\t<div class=\"container py-5 h-100\">
\t\t\t<div class=\"row d-flex justify-content-center align-items-center h-100\">
\t\t\t\t<div class=\"col-12\">

\t\t\t\t\t<div class=\"card card-registration card-registration-2\" style=\"border-radius: 15px;\">
\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t<div class=\"row g-0\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-5\">

\t\t\t\t\t\t\t\t\t\t\t{{ form_start(form, {action:path('orders_prepare')} ) }}
\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"fw-normal mb-0 text-black\">Récapitulatif de la commande<span>({{recapCart|length}}
\t\t\t\t\t\t\t\t\t\t\t\t\tproduits)</span>
\t\t\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr class=\"my-4\">
\t\t\t\t\t\t\t\t\t\t{% set total = null %}
\t\t\t\t\t\t\t\t\t\t{% for product in recapCart %}
\t\t\t\t\t\t\t\t\t\t\t{% set total = total + (product.product.price * product.quantity) %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-4 d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-2 col-lg-2 col-xl-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/uploads/products/mini/300x300-' ~ product.product.images[0].name) }}\" class=\"img-thumbnail\" alt=\"{{ product.product.name }}\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-lg-3 col-xl-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"lead fw-normal mb-2\">{{ product.product.name }}</p>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Id:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.product.id }}<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Stock:</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ product.product.stock }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t{# <a href=\"{{path('cart_decrease', {id: product.product.id})}}\" class=\"btn btn-success\">-</a> 
\t\t\t\t\t\t\t\t\t\t\t\t\t                      <input id=\"form1\" min=\"0\" name=\"quantity\" value=\"{{ product.quantity }}\" type=\"number\" class=\"form-control form-control-sm\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t                      <a href=\"{{path('cart_add', {id: product.product.id})}}\" class=\"btn btn-success\">+</a>  #} 


\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t\t                     <h6 class=\"mb-4\">Prix unitaire: {{ product.product.price / 100}} €</h6>
\t\t\t\t\t\t\t\t\t\t\t\t                     <h6 class=\"mb-0\">Prix total: {{ product.product.price * product.quantity / 100 }} €</h6>
\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t\t                    <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t                     <a href=\"{{path('cart_remove', {id: product.product.id})}}\" class=\"text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t                     <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t                    </a>
\t\t\t\t\t\t\t\t\t\t\t\t                    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t<hr class=\"my-4\">

\t\t\t\t\t\t\t\t\t\t<div class=\"pt-5\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('cart_index') }}\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-long-arrow-alt-left me-2\"></i>Retour au panier</a>
\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

{# coté gauche  #}
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 bg-grey\">
\t\t\t\t\t\t\t\t\t<div class=\"p-5\">
\t\t\t\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-5 mt-2 pt-1\">Summary</h3>
\t\t\t\t\t\t\t\t\t\t<hr
\t\t\t\t\t\t\t\t\t\tclass=\"my-4\">

\t\t\t\t\t\t\t\t\t\t{# {{ form_start(form) }} #}

\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-secondary mb-3\">Adresse</h5>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t{{form_row(form.address)|replace({ '[-br]' : '</br>'})|raw }}

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h5 class=\"text-secondary mb-3\">Lieu de retrait</h5>

\t\t\t\t\t\t\t\t\t\t<div class=\"mb-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t{{form_row(form.transporters)|replace({ '[-br]' : '</br>'})|raw }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr class=\"my-4\">


\t\t\t\t\t\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t\t\t\t\t\t<button  class=\"btn btn-primary btn-lg\" type=\"submit\">Submit</button>
\t\t\t\t\t\t\t\t\t\t{{ form_end(form) }}

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t\t</section>

\t\t{% endblock %}


", "orders/index.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/orders/index.html.twig");
    }
}
