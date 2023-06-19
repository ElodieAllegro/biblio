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

/* _partials/_nav.html.twig */
class __TwigTemplate_fb61f426afcaae85d1d73f3edd9cad32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        // line 1
        echo "
<nav class=\"navbar navbar-expand-sm mb-5\">
    <div class=\"container\">
     <img class=\"logo\" src=\"/assets/uploads/logo.png\">
      <div class=\"collapse navbar-collapse\" id=\"mynavbar\">
        <ul class=\"navbar-nav me-auto\">
            <li class=\"nav-item mx-2\">
                <a class=\"nav-link\" href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("main");
        echo "\">Accueil</a>
              </li> 
          <li class=\"nav-item mx-2\">
            <a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\">Ma bibliothèque</a>
          </li>
          <li class=\"nav-item mx-2\">
            <a class=\"nav-link\" href=\"#\">Liste d'envies</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Catégorie </a>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"#\">Toutes les categories</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Adultes</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Adolescents</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Jeunesse</a></li>
            </ul>
        </li>
        </ul>
        
        <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
          ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                      ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PRODUCT_ADMIN")) {
                // line 30
                echo "                          <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"";
                // line 31
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_index");
                echo "\">Administration</a>
                          </li>
                      ";
            }
            // line 34
            echo "                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userProfil_index");
            echo "\">Mon compte</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Me déconnecter</a>
                      </li>
                  ";
        } else {
            // line 41
            echo "                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">M'inscrire</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Me Connecter</a>
                      </li>
          ";
        }
        // line 48
        echo "        </ul>

       
      </div>
    </div>
  </nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  116 => 45,  110 => 42,  107 => 41,  101 => 38,  95 => 35,  92 => 34,  86 => 31,  83 => 30,  80 => 29,  78 => 28,  58 => 11,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"navbar navbar-expand-sm mb-5\">
    <div class=\"container\">
     <img class=\"logo\" src=\"/assets/uploads/logo.png\">
      <div class=\"collapse navbar-collapse\" id=\"mynavbar\">
        <ul class=\"navbar-nav me-auto\">
            <li class=\"nav-item mx-2\">
                <a class=\"nav-link\" href=\"{{path('main')}}\">Accueil</a>
              </li> 
          <li class=\"nav-item mx-2\">
            <a class=\"nav-link\" href=\"{{ path('cart_index') }}\">Ma bibliothèque</a>
          </li>
          <li class=\"nav-item mx-2\">
            <a class=\"nav-link\" href=\"#\">Liste d'envies</a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"> Catégorie </a>
            <ul class=\"dropdown-menu\">
                <li><a class=\"dropdown-item\" href=\"#\">Toutes les categories</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Adultes</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Adolescents</a></li>
                <li><a class=\"dropdown-item\" href=\"#\">Jeunesse</a></li>
            </ul>
        </li>
        </ul>
        
        <ul class=\"navbar-nav ms-auto mb-2 mb-lg-0\">
          {% if app.user %}
                      {% if is_granted('ROLE_PRODUCT_ADMIN') %}
                          <li class=\"nav-item\">
                              <a class=\"nav-link\" href=\"{{ path('admin_index') }}\">Administration</a>
                          </li>
                      {% endif %}
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"{{ path('userProfil_index')}}\">Mon compte</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Me déconnecter</a>
                      </li>
                  {% else %}
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"{{ path('app_register') }}\">M'inscrire</a>
                      </li>
                      <li class=\"nav-item\">
                          <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Me Connecter</a>
                      </li>
          {% endif %}
        </ul>

       
      </div>
    </div>
  </nav>", "_partials/_nav.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/_partials/_nav.html.twig");
    }
}
