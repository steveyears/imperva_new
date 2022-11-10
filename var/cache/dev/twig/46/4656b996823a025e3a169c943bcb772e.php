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

/* page_elements/bottom_nav.twig */
class __TwigTemplate_17be376e214749e9e6a3b0564170116c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/bottom_nav.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/bottom_nav.twig"));

        // line 1
        echo "<div class=\"container-fluid\" id=\"bottom-nav-container-fluid\">
    <div class=\"container\" id=\"bottom-nav-container\">
        <footer class=\"py-5\">
            <div class=\"row\">
                <div class=\"col-12 col-md-3 mb-3\">
                    <h5><i class=\"bi bi-plus-square\"></i>Partners</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Imperva Partner Ecosystem</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Channel Partners</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Technology Alliances</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Find a Partner</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Partner Portal Login</a></li>
                    </ul>
                </div>

                <div class=\"col-12 col-md-3 mb-3\">
                    <h5><i class=\"bi bi-life-preserver\"></i>Support</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Emergency DDoS Protection</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Support Portal</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Imperva Community</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Documentation Portal</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">API Integration</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Trust Center</a></li>
                    </ul>
                </div>

                <div class=\"col-12 col-md-3 mb-3\">
                    <h5><i class=\"bi bi-book\"></i>Resources</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Imperva Blog</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Resource Library</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Case Studies</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Learning Center</a></li>
                    </ul>
                </div>

                <div class=\"col-12 col-md-3 mb-3\">
                    <h5><i class=\"bi bi-megaphone\"></i>About Us</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Who We Are</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Events</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Careers</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Press & Awards</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Contact Information</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_elements/bottom_nav.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\" id=\"bottom-nav-container-fluid\">
    <div class=\"container\" id=\"bottom-nav-container\">
        <footer class=\"py-5\">
            <div class=\"row\">
                <div class=\"col-12 col-md-3 mb-3\">
                    <h5><i class=\"bi bi-plus-square\"></i>Partners</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Imperva Partner Ecosystem</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Channel Partners</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Technology Alliances</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Find a Partner</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Partner Portal Login</a></li>
                    </ul>
                </div>

                <div class=\"col-12 col-md-3 mb-3\">
                    <h5><i class=\"bi bi-life-preserver\"></i>Support</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Emergency DDoS Protection</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Support Portal</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Imperva Community</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Documentation Portal</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">API Integration</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Trust Center</a></li>
                    </ul>
                </div>

                <div class=\"col-12 col-md-3 mb-3\">
                    <h5><i class=\"bi bi-book\"></i>Resources</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Imperva Blog</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Resource Library</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Case Studies</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Learning Center</a></li>
                    </ul>
                </div>

                <div class=\"col-12 col-md-3 mb-3\">
                    <h5><i class=\"bi bi-megaphone\"></i>About Us</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Who We Are</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Events</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Careers</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Press & Awards</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0\">Contact Information</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
", "page_elements/bottom_nav.twig", "/Users/stephenyears/imperva_new/templates/page_elements/bottom_nav.twig");
    }
}
