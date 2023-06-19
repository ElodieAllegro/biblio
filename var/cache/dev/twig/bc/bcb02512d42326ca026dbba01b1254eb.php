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

/* _partials/_footer.html.twig */
class __TwigTemplate_99263c3d0975a57a2f9c3444af2fe1b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_footer.html.twig"));

        // line 1
        echo "<footer class=\"container-fluid mx-0 px-0 \">
    <section class=\" text-center\">
        <footer class=\"text-center text-white\" style=\"background-color: #f1f1f1;\">
          <!-- Grid container -->
          <div class=\"container pt-4\">
            <!-- Section: Social media -->
            <section class=\"mb-4\">
              <!-- Facebook -->
              <a class=\"btn btn-link btn-floating btn-lg text-dark m-1\" href=\"#!\" role=\"button\" data-mdb-ripple-color=\"dark\"><i class=\"fab fa-facebook-f\"></i></a>

              <!-- Twitter -->
              <a class=\"btn btn-link btn-floating btn-lg text-dark m-1\" href=\"#!\" role=\"button\" data-mdb-ripple-color=\"dark\"><i class=\"fab fa-twitter\"></i></a>

              <!-- Google -->
              <a class=\"btn btn-link btn-floating btn-lg text-dark m-1\" href=\"#!\" role=\"button\" data-mdb-ripple-color=\"dark\"><i class=\"fab fa-google\"></i></a>

              <!-- Instagram -->
              <a class=\"btn btn-link btn-floating btn-lg text-dark m-1\" href=\"#!\" role=\"button\" data-mdb-ripple-color=\"dark\"><i class=\"fab fa-instagram\"></i></a>

        
            </section>
            <!-- Section: Social media -->
          </div>
          <!-- Grid container -->

          <!-- Copyright -->
          <div class=\"text-center text-dark p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
            © 2020 Copyright:
            <a class=\"text-dark\" href=\"#\">BiblioTeck</a>
          </div>
          <!-- Copyright -->
        </footer>
      </section>
  </footer>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"container-fluid mx-0 px-0 \">
    <section class=\" text-center\">
        <footer class=\"text-center text-white\" style=\"background-color: #f1f1f1;\">
          <!-- Grid container -->
          <div class=\"container pt-4\">
            <!-- Section: Social media -->
            <section class=\"mb-4\">
              <!-- Facebook -->
              <a class=\"btn btn-link btn-floating btn-lg text-dark m-1\" href=\"#!\" role=\"button\" data-mdb-ripple-color=\"dark\"><i class=\"fab fa-facebook-f\"></i></a>

              <!-- Twitter -->
              <a class=\"btn btn-link btn-floating btn-lg text-dark m-1\" href=\"#!\" role=\"button\" data-mdb-ripple-color=\"dark\"><i class=\"fab fa-twitter\"></i></a>

              <!-- Google -->
              <a class=\"btn btn-link btn-floating btn-lg text-dark m-1\" href=\"#!\" role=\"button\" data-mdb-ripple-color=\"dark\"><i class=\"fab fa-google\"></i></a>

              <!-- Instagram -->
              <a class=\"btn btn-link btn-floating btn-lg text-dark m-1\" href=\"#!\" role=\"button\" data-mdb-ripple-color=\"dark\"><i class=\"fab fa-instagram\"></i></a>

        
            </section>
            <!-- Section: Social media -->
          </div>
          <!-- Grid container -->

          <!-- Copyright -->
          <div class=\"text-center text-dark p-3\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
            © 2020 Copyright:
            <a class=\"text-dark\" href=\"#\">BiblioTeck</a>
          </div>
          <!-- Copyright -->
        </footer>
      </section>
  </footer>
", "_partials/_footer.html.twig", "/Applications/MAMP/htdocs/biblioteckSymfony/templates/_partials/_footer.html.twig");
    }
}
