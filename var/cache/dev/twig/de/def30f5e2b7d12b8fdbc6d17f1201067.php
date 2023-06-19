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

/* orders/details.html.twig */
class __TwigTemplate_ab30c0c3fe3a1d9b7fbe02b1b8027841 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "orders/details.html.twig"));

        // line 2
        echo "
<form method=\"post\" action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("orders_details");
        echo "\">
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderform"]) || array_key_exists("orderform", $context) ? $context["orderform"] : (function () { throw new RuntimeError('Variable "orderform" does not exist.', 4, $this->source); })()), "users", [], "any", false, false, false, 4), 'row');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["orderform"]) || array_key_exists("orderform", $context) ? $context["orderform"] : (function () { throw new RuntimeError('Variable "orderform" does not exist.', 5, $this->source); })()), "reference", [], "any", false, false, false, 5), 'row');
        echo "

    <h3 class=\"fw-normal mb-0 text-black\">Produits</h3>
    <hr class=\"my-4\">
";
        // line 36
        echo "
    ";
        // line 38
        echo "
    <div class=\"mb-5\">
        <div class=\"form-outline\">
            <input type=\"date\" id=\"form3Examplea2\" class=\"form-control form-control-lg\" />
            <label class=\"form-label\" for=\"form3Examplea2\"></label>
        </div>
    </div>

    <hr class=\"my-4\">

    <div class=\"card-body col-9\">
        <button type=\"submit\" class=\"btn btn-success btn-block btn-lg\">Enregistrer</button>
    </div>
</form>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "orders/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 38,  61 => 36,  54 => 5,  50 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# order_details.html.twig #}

<form method=\"post\" action=\"{{ path('orders_details') }}\">
    {{ form_row(orderform.users) }}
    {{ form_row(orderform.reference) }}

    <h3 class=\"fw-normal mb-0 text-black\">Produits</h3>
    <hr class=\"my-4\">
{# 
    {% for productForm in orderform.products %}
        <div class=\"row mb-4 d-flex justify-content-between align-items-center\">
            
            <div class=\"col-md-3 col-lg-3 col-xl-3\">
                <p class=\"lead fw-normal mb-2\">{{ productForm.vars.value.name }}</p>
            </div>
            <div class=\"col-md-3 col-lg-3 col-xl-2 d-flex\">
                <p>
                    <span class=\"text-muted\">Id:</span> {{ productForm.vars.value.id }}<br>
                    <span class=\"text-muted\">Stock:</span> {{ productForm.vars.value.stock }}
                </p>
            </div> 
            <div class=\"col-md-3 col-lg-2 col-xl-2 offset-lg-1\">
                <h6 class=\"mb-4\">Prix unitaire: {{ productForm.vars.value.price / 100}} €</h6>
                <h6 class=\"mb-0\">Prix total: {{ productForm.vars.value.price * productForm.vars.data.quantity / 100 }} €</h6>
            </div>
            <div class=\"col-md-1 col-lg-1 col-xl-1 text-end\">
                <a href=\"{{ path('cart_remove', { id: productForm.vars.value.id }) }}\" class=\"text-danger\">
                    <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                </a>
            </div>
            {{ form_widget(productForm) }}
        </div>
    {% endfor %}

    <hr class=\"my-4\"> #}

    {# {{ form_row(orderform.transporters) }} #}

    <div class=\"mb-5\">
        <div class=\"form-outline\">
            <input type=\"date\" id=\"form3Examplea2\" class=\"form-control form-control-lg\" />
            <label class=\"form-label\" for=\"form3Examplea2\"></label>
        </div>
    </div>

    <hr class=\"my-4\">

    <div class=\"card-body col-9\">
        <button type=\"submit\" class=\"btn btn-success btn-block btn-lg\">Enregistrer</button>
    </div>
</form>

", "orders/details.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/orders/details.html.twig");
    }
}
