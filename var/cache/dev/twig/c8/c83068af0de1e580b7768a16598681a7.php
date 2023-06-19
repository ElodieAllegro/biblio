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

/* _partials/_adminnav.html.twig */
class __TwigTemplate_76c3a0ecc8cb39d5080ebb874cbdcfd5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_adminnav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_adminnav.html.twig"));

        // line 1
        echo "<aside class=\"col-3 border border-light bg-white p-2\">
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Catégories
        </div>
        <div class=\"card-body\">
            <p><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\">Liste des catégories</a></p>
            <p><a href=\"\">Ajouter une catégorie</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Produits
        </div>
        <div class=\"card-body\">
            <p><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_index");
        echo "\">Liste des produits</a></p>
            <p><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_products_add");
        echo "\">Ajouter un produit</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Utilisateurs
        </div>
        <div class=\"card-body\">
            <p><a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_users_index");
        echo "\">Liste des utilisateurs</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Utilisateurs
        </div>
        <div class=\"card-body\">
            <p><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transporters_index");
        echo "\">Liste des transporteurs</a></p>
            <p><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_transporters_add");
        echo "\">Ajouter un transporteur</a></p>
        </div>
    </article>
</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_adminnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  89 => 33,  78 => 25,  67 => 17,  63 => 16,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"col-3 border border-light bg-white p-2\">
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Catégories
        </div>
        <div class=\"card-body\">
            <p><a href=\"{{ path('admin_categories_index') }}\">Liste des catégories</a></p>
            <p><a href=\"\">Ajouter une catégorie</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Produits
        </div>
        <div class=\"card-body\">
            <p><a href=\"{{ path('admin_products_index') }}\">Liste des produits</a></p>
            <p><a href=\"{{ path('admin_products_add') }}\">Ajouter un produit</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Utilisateurs
        </div>
        <div class=\"card-body\">
            <p><a href=\"{{ path('admin_users_index') }}\">Liste des utilisateurs</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Utilisateurs
        </div>
        <div class=\"card-body\">
            <p><a href=\"{{ path('admin_transporters_index') }}\">Liste des transporteurs</a></p>
            <p><a href=\"{{ path('admin_transporters_add') }}\">Ajouter un transporteur</a></p>
        </div>
    </article>
</aside>", "_partials/_adminnav.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/_partials/_adminnav.html.twig");
    }
}
