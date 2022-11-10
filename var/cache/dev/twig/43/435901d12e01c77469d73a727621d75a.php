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

/* page_elements/casestudy_discovery.twig */
class __TwigTemplate_32cf41a54a4f10eb6142568a1589df02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/casestudy_discovery.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/casestudy_discovery.twig"));

        // line 1
        echo "<div class=\"container-fluid discovery\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 my-auto\">
                <div class=\"discovery-image\">
                    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-discovery.png"), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"discovery-title\">Discovery, Inc. tackles data compliance in public cloud</div>
                <div class=\"discovery-text\">Discovery, Inc. uses Imperva Data Security Fabric to gain single pane of glass visibility into both on-premises and cloud-based data sources and ensure continuing satisfaction of data security and compliance requirements.</div>
                <button class=\"btn-imperva-gradient-1\">Customer Story<i class=\"bi bi-arrow-right-circle\"></i></button>
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
        return "page_elements/casestudy_discovery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid discovery\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 my-auto\">
                <div class=\"discovery-image\">
                    <img src=\"{{ asset('build/images/logo-discovery.png') }}\">
                </div>
            </div>
            <div class=\"col-md-6\">
                <div class=\"discovery-title\">Discovery, Inc. tackles data compliance in public cloud</div>
                <div class=\"discovery-text\">Discovery, Inc. uses Imperva Data Security Fabric to gain single pane of glass visibility into both on-premises and cloud-based data sources and ensure continuing satisfaction of data security and compliance requirements.</div>
                <button class=\"btn-imperva-gradient-1\">Customer Story<i class=\"bi bi-arrow-right-circle\"></i></button>
            </div>
        </div>
    </div>
</div>
", "page_elements/casestudy_discovery.twig", "/Users/stephenyears/imperva_new/templates/page_elements/casestudy_discovery.twig");
    }
}
