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

/* page_elements/front-page-carousel.twig */
class __TwigTemplate_43b22873ed6aedbc299e7a6a5d06b0fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/front-page-carousel.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/front-page-carousel.twig"));

        // line 1
        echo "<div class=\"container-fluid\">
    <div class=\"container-fluid front-page-slick\">

        <!-- Slide 1 -->
            <div class=\"container-fluid bg-video-wrap\">
                <div class=\"container\" id=\"slide-text-container\">
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                        <h1>Data Security Fabric</h1>
                        <h2>The first enterprise-scale, multicloud, hybrid solution to protect all data types</h2>
                        <p>Imperva® Data Security Fabric is the first data-centric solution that enables security and compliance teams to quickly and easily secure sensitive data no matter where it resides with an integrated, proactive approach to visibility and predictive analytics</p>
                        <button class=\"btn-imperva-gradient-big\">Learn More <i class=\"bi bi-arrow-right-circle\"></i></button>
                    </div>
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                        <img class=\"slide-dsf-logo\" src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-security-fabric-white.svg"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <video preload=\"none\"  class=\"bg-video\" id=\"carousel-video\" autoplay muted playsinline loop>
                    <source src=\"/build/videos/vid_background_1.mp4\" type=\"video/mp4\">
                    Your browser does not support HTML5 video.
                </video>
            </div>

        <!-- Slide 2 -->

    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_elements/front-page-carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\">
    <div class=\"container-fluid front-page-slick\">

        <!-- Slide 1 -->
            <div class=\"container-fluid bg-video-wrap\">
                <div class=\"container\" id=\"slide-text-container\">
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                        <h1>Data Security Fabric</h1>
                        <h2>The first enterprise-scale, multicloud, hybrid solution to protect all data types</h2>
                        <p>Imperva® Data Security Fabric is the first data-centric solution that enables security and compliance teams to quickly and easily secure sensitive data no matter where it resides with an integrated, proactive approach to visibility and predictive analytics</p>
                        <button class=\"btn-imperva-gradient-big\">Learn More <i class=\"bi bi-arrow-right-circle\"></i></button>
                    </div>
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                        <img class=\"slide-dsf-logo\" src=\"{{ asset('build/images/logo-data-security-fabric-white.svg') }}\">
                    </div>
                </div>
                <video preload=\"none\"  class=\"bg-video\" id=\"carousel-video\" autoplay muted playsinline loop>
                    <source src=\"/build/videos/vid_background_1.mp4\" type=\"video/mp4\">
                    Your browser does not support HTML5 video.
                </video>
            </div>

        <!-- Slide 2 -->

    </div>
</div>
", "page_elements/front-page-carousel.twig", "/Users/stephenyears/imperva_new/templates/page_elements/front-page-carousel.twig");
    }
}
