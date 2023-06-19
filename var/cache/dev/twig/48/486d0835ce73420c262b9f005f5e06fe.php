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

/* admin/transporters/_form.html.twig */
class __TwigTemplate_0beddf6576b6672f84f0213724732dfa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/transporters/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/transporters/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transporterForm"]) || array_key_exists("transporterForm", $context) ? $context["transporterForm"] : (function () { throw new RuntimeError('Variable "transporterForm" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["transporterForm"]) || array_key_exists("transporterForm", $context) ? $context["transporterForm"] : (function () { throw new RuntimeError('Variable "transporterForm" does not exist.', 2, $this->source); })()), "title", [], "any", false, false, false, 2), 'row');
        echo "
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["transporterForm"]) || array_key_exists("transporterForm", $context) ? $context["transporterForm"] : (function () { throw new RuntimeError('Variable "transporterForm" does not exist.', 3, $this->source); })()), "description", [], "any", false, false, false, 3), 'row');
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["transporterForm"]) || array_key_exists("transporterForm", $context) ? $context["transporterForm"] : (function () { throw new RuntimeError('Variable "transporterForm" does not exist.', 4, $this->source); })()), "price", [], "any", false, false, false, 4), 'row');
        echo "
 

    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["transporterForm"]) || array_key_exists("transporterForm", $context) ? $context["transporterForm"] : (function () { throw new RuntimeError('Variable "transporterForm" does not exist.', 8, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/transporters/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 8,  55 => 4,  51 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(transporterForm) }}
    {{ form_row(transporterForm.title) }}
    {{ form_row(transporterForm.description) }}
    {{ form_row(transporterForm.price) }}
 

    {# <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Ajouter') }}</button> #}
{{ form_end(transporterForm) }}", "admin/transporters/_form.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/admin/transporters/_form.html.twig");
    }
}
