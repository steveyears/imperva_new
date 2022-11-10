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

/* page_elements/top_nav.twig */
class __TwigTemplate_b4cee06b1c4540cd18d1401f4de5b971 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/top_nav.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/top_nav.twig"));

        // line 1
        echo " <nav class=\"navbar-expand-xxl pt-0 pb-0 d-none d-lg-block\" id=\"top-nav\">
     <div class=\"container-fluid\" id=\"top-nav-container-fluid\">
        <div class=\"container-xxl pt-0 pb-0\">
            <div class=\"navbar\">
                <ul class=\"nav me-auto\" id=\"top-nav-navbar\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle first\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Sign In</a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"#\">Cloud Security Console</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">RASP Console</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown \">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">EN</a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"#\">Deutsch</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Español</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Français</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Português</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">日本語</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">한국어</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">中文</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class=\"nav text-end\" id=\"top-nav-navbar\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact Us</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Resources</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Get Support</a></li>
                    <li class=\"nav-item pr-0\"><a id=\"attack\" class=\"nav-link\" href=\"#\">Under DDOS Attack?</a></li>
                </ul>
            </div>
        </div>
    </div>
 </nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_elements/top_nav.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <nav class=\"navbar-expand-xxl pt-0 pb-0 d-none d-lg-block\" id=\"top-nav\">
     <div class=\"container-fluid\" id=\"top-nav-container-fluid\">
        <div class=\"container-xxl pt-0 pb-0\">
            <div class=\"navbar\">
                <ul class=\"nav me-auto\" id=\"top-nav-navbar\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle first\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Sign In</a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"#\">Cloud Security Console</a></li>
                            <li><a class=\"dropdown-item\" href=\"#\">RASP Console</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown \">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">EN</a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"#\">Deutsch</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Español</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Français</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">Português</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">日本語</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">한국어</a></li>
                            <li><hr class=\"dropdown-divider\"></li>
                            <li><a class=\"dropdown-item\" href=\"#\">中文</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class=\"nav text-end\" id=\"top-nav-navbar\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Contact Us</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Resources</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Get Support</a></li>
                    <li class=\"nav-item pr-0\"><a id=\"attack\" class=\"nav-link\" href=\"#\">Under DDOS Attack?</a></li>
                </ul>
            </div>
        </div>
    </div>
 </nav>
", "page_elements/top_nav.twig", "/Users/stephenyears/imperva_new/templates/page_elements/top_nav.twig");
    }
}
