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

/* _partials/_usernav.html.twig */
class __TwigTemplate_6bac8cb865f1f20ad511a5e6b589ea86 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_usernav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_usernav.html.twig"));

        // line 1
        echo "<aside class=\"col-3 border border-light bg-white p-2\">
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Profil
        </div>
        <div class=\"card-body\">
            <p><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfil_profil_index");
        echo "\">mon profil</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Emprunts
        </div>
        <div class=\"card-body\">
            <p><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfil_loans_index");
        echo "\">Mes emprunts</a></p>
            
        </div>
    </article>
    
   
</aside>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_usernav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"col-3 border border-light bg-white p-2\">
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Profil
        </div>
        <div class=\"card-body\">
            <p><a href=\"{{ path('userProfil_profil_index') }}\">mon profil</a></p>
        </div>
    </article>
    <article class=\"card mb-3\">
        <div class=\"card-header\">
            Emprunts
        </div>
        <div class=\"card-body\">
            <p><a href=\"{{ path('userProfil_loans_index') }}\">Mes emprunts</a></p>
            
        </div>
    </article>
    
   
</aside>", "_partials/_usernav.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/_partials/_usernav.html.twig");
    }
}
