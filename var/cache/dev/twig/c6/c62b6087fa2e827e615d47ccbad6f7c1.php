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

/* page_elements/analysts.twig */
class __TwigTemplate_cf0dd4d0818c5534c3ea4c1f87cbfbeb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/analysts.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/analysts.twig"));

        // line 1
        echo "<div class=\"container-fluid analysts\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"analysts_title\">Recognized leadership</div>
            <div class=\"analysts_subtitle\">Our teams develop award-winning technologies</div>
            <div class=\"col-md-4 analysts-card-col\">
                <div class=\"analysts-card hvr-float\">
                    <div class=\"analysts-product-category appsec\">Application Security</div>
                    <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-analysts-gartner-white.svg"), "html", null, true);
        echo "\" class=\"analysts-logo\">
                    <h2>One solution. Comprehensive protection.</h2>
                    <p>Protect your applications and secure your future with Imperva — a 9-time Leader in the Gartner® Magic Quadrant™ for WAAP</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Read the Report <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
            <div class=\"col-md-4 analysts-card-col\">
                <div class=\"analysts-card hvr-float\">
                    <div class=\"analysts-product-category datasec\">Data Security</div>
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-analysts-kuppingercole-white.svg"), "html", null, true);
        echo "\" class=\"analysts-logo\">
                    <h2>Integrated platform approach to Data Protection</h2>
                    <p>Imperva named an overall leader in the 2021 KuppingerCole Leadership Compass for Database and Big Data Security</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Read the Report <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
            <div class=\"col-md-4 analysts-card-col\">
                <div class=\"analysts-card hvr-float\">
                    <div class=\"analysts-product-category appsec\">Application Security</div>
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-analysts-forrester-white.svg"), "html", null, true);
        echo "\" class=\"analysts-logo\">
                    <h2>Imperva is a Leader that is strong in both bot detection and attack response</h2>
                    <p>The Forrester Wave™: Bot Management, Q2 2022</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Read the Report <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
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
        return "page_elements/analysts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  65 => 18,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid analysts\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"analysts_title\">Recognized leadership</div>
            <div class=\"analysts_subtitle\">Our teams develop award-winning technologies</div>
            <div class=\"col-md-4 analysts-card-col\">
                <div class=\"analysts-card hvr-float\">
                    <div class=\"analysts-product-category appsec\">Application Security</div>
                    <img src=\"{{ asset('build/images/logo-analysts-gartner-white.svg') }}\" class=\"analysts-logo\">
                    <h2>One solution. Comprehensive protection.</h2>
                    <p>Protect your applications and secure your future with Imperva — a 9-time Leader in the Gartner® Magic Quadrant™ for WAAP</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Read the Report <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
            <div class=\"col-md-4 analysts-card-col\">
                <div class=\"analysts-card hvr-float\">
                    <div class=\"analysts-product-category datasec\">Data Security</div>
                    <img src=\"{{ asset('build/images/logo-analysts-kuppingercole-white.svg') }}\" class=\"analysts-logo\">
                    <h2>Integrated platform approach to Data Protection</h2>
                    <p>Imperva named an overall leader in the 2021 KuppingerCole Leadership Compass for Database and Big Data Security</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Read the Report <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
            <div class=\"col-md-4 analysts-card-col\">
                <div class=\"analysts-card hvr-float\">
                    <div class=\"analysts-product-category appsec\">Application Security</div>
                    <img src=\"{{ asset('build/images/logo-analysts-forrester-white.svg') }}\" class=\"analysts-logo\">
                    <h2>Imperva is a Leader that is strong in both bot detection and attack response</h2>
                    <p>The Forrester Wave™: Bot Management, Q2 2022</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Read the Report <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
", "page_elements/analysts.twig", "/Users/stephenyears/imperva_new/templates/page_elements/analysts.twig");
    }
}
