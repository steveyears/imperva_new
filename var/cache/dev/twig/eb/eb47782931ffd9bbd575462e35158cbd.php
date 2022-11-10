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

/* page_elements/bottom_contact.twig */
class __TwigTemplate_4b5e34f0f7bd66d0a7cec3714b3432bf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/bottom_contact.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/bottom_contact.twig"));

        // line 1
        echo "<div class=\"container-fluid\" id=\"bottom-contact-container-fluid\">
    <div class=\"container\" id=\"bottom-contact-container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3 mb-3 pt-5 pb-4\">
                <h5><i class=\"bi bi-globe2\"></i>World Headquarters</h5>
                <p>One Curiosity Way, Suite 203<br />
                    California 94403, USA<br />
                    +1.650.345.9000</p>
                <div class=\"social-icons\">
                    <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-twitter\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-youtube\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-vimeo\"></i></a>
                </div>
                <div class=\"bottom-logo\"><img src=\"/build/images/logo-imperva.svg\"></div>
            </div>
            <div class=\"col-12 col-md-3 mb-3 pt-5 pb-4\">
                <h5><i class=\"bi bi-telephone\"></i>Sales</h5>
                <p>+1.855.926.4678<br />
                    <a href=\"#\">Contact Us<i class=\"bi bi-box-arrow-up-right\" style=\"margin-left: 10px;\"></i></a></p>
            </div>
            <div class=\"col-12 col-md-3 mb-3 pt-5 pb-4\">
                <h5><i class=\"bi bi-headset\"></i>Support</h5>
                <p>+1.855.574.9831<br />
                    <a href=\"#\">Support Portal<i class=\"bi bi-box-arrow-up-right\" style=\"margin-left: 10px;\"></i></a></p>
            </div>
            <div class=\"col-12 col-md-3 mb-3 pt-5 pb-4 subscribe\">
                <h5><i class=\"bi bi-envelope\"></i>Subscribe</h5>
                <p>Get the latest news, invites to events, and threat alerts</p>
                <form>
                    <div class=\"form-group\">
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Email Address\" style=\"margin-bottom: 20px;\">
                    </div>
                    <button style=\"width: auto; color: #FFFFFF;\" type=\"submit\" class=\"btn-imperva-gradient-1\">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_elements/bottom_contact.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\" id=\"bottom-contact-container-fluid\">
    <div class=\"container\" id=\"bottom-contact-container\">
        <div class=\"row\">
            <div class=\"col-12 col-md-3 mb-3 pt-5 pb-4\">
                <h5><i class=\"bi bi-globe2\"></i>World Headquarters</h5>
                <p>One Curiosity Way, Suite 203<br />
                    California 94403, USA<br />
                    +1.650.345.9000</p>
                <div class=\"social-icons\">
                    <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-facebook\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-twitter\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-youtube\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-vimeo\"></i></a>
                </div>
                <div class=\"bottom-logo\"><img src=\"/build/images/logo-imperva.svg\"></div>
            </div>
            <div class=\"col-12 col-md-3 mb-3 pt-5 pb-4\">
                <h5><i class=\"bi bi-telephone\"></i>Sales</h5>
                <p>+1.855.926.4678<br />
                    <a href=\"#\">Contact Us<i class=\"bi bi-box-arrow-up-right\" style=\"margin-left: 10px;\"></i></a></p>
            </div>
            <div class=\"col-12 col-md-3 mb-3 pt-5 pb-4\">
                <h5><i class=\"bi bi-headset\"></i>Support</h5>
                <p>+1.855.574.9831<br />
                    <a href=\"#\">Support Portal<i class=\"bi bi-box-arrow-up-right\" style=\"margin-left: 10px;\"></i></a></p>
            </div>
            <div class=\"col-12 col-md-3 mb-3 pt-5 pb-4 subscribe\">
                <h5><i class=\"bi bi-envelope\"></i>Subscribe</h5>
                <p>Get the latest news, invites to events, and threat alerts</p>
                <form>
                    <div class=\"form-group\">
                        <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" aria-describedby=\"emailHelp\" placeholder=\"Email Address\" style=\"margin-bottom: 20px;\">
                    </div>
                    <button style=\"width: auto; color: #FFFFFF;\" type=\"submit\" class=\"btn-imperva-gradient-1\">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
", "page_elements/bottom_contact.twig", "/Users/stephenyears/imperva_new/templates/page_elements/bottom_contact.twig");
    }
}
