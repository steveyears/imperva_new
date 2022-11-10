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

/* page_elements/newspromo.twig */
class __TwigTemplate_3108acd6def2028013fbf68339b5d58b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/newspromo.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/newspromo.twig"));

        // line 1
        echo "<style>
    @media (max-width: 1280px) {
        .news-card {
            margin-top: 0!important;
        }
    }
</style>

<div class=\"container-fluid\" id=\"newspromo-header-container-fluid\">

</div>
<div class=\"container-fluid\" id=\"newspromo-body-container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col col-xl-4 col-lg-4 col-md-12 col-sm-12\">
                <div class=\"news-card hvr-float\">
                    <div class=\"news-type\">News</div>
                    <h2>DDoS Threat Landscape Report Q2 2022</h2>
                    <p>During the second quarter of 2022, Imperva detected and mitigated record-breaking DDoS attacks. Read our report to wee what we learned!</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Learn More <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
            <div class=\"col col-xl-4 col-lg-4 col-md-12 col-sm-12\">
                <div class=\"news-card hvr-float\">
                    <div class=\"news-type\">News</div>
                    <h2>KuppingerCole has named Imperva an Overall Leader in WAF</h2>
                    <p>KuppingerCole has named Imperva the top Leader in Market and Product evaluations and an overall leader for the WAF market.</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Learn More <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
            <div class=\"col col-xl-4 col-lg-4 col-md-12 col-sm-12\">
                <div class=\"news-card hvr-float\">
                    <div class=\"news-type\">News</div>
                    <h2>Quantifying the Cost of API Insecurity</h2>
                    <p>In an effort to quantify the cost of API insecurity, Imperva partnered with the Marsh McLennan Cyber Risk Analytics Center to analyze API-related incident data.</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Learn More <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
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
        return "page_elements/newspromo.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    @media (max-width: 1280px) {
        .news-card {
            margin-top: 0!important;
        }
    }
</style>

<div class=\"container-fluid\" id=\"newspromo-header-container-fluid\">

</div>
<div class=\"container-fluid\" id=\"newspromo-body-container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col col-xl-4 col-lg-4 col-md-12 col-sm-12\">
                <div class=\"news-card hvr-float\">
                    <div class=\"news-type\">News</div>
                    <h2>DDoS Threat Landscape Report Q2 2022</h2>
                    <p>During the second quarter of 2022, Imperva detected and mitigated record-breaking DDoS attacks. Read our report to wee what we learned!</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Learn More <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
            <div class=\"col col-xl-4 col-lg-4 col-md-12 col-sm-12\">
                <div class=\"news-card hvr-float\">
                    <div class=\"news-type\">News</div>
                    <h2>KuppingerCole has named Imperva an Overall Leader in WAF</h2>
                    <p>KuppingerCole has named Imperva the top Leader in Market and Product evaluations and an overall leader for the WAF market.</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Learn More <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
            <div class=\"col col-xl-4 col-lg-4 col-md-12 col-sm-12\">
                <div class=\"news-card hvr-float\">
                    <div class=\"news-type\">News</div>
                    <h2>Quantifying the Cost of API Insecurity</h2>
                    <p>In an effort to quantify the cost of API insecurity, Imperva partnered with the Marsh McLennan Cyber Risk Analytics Center to analyze API-related incident data.</p>
                    <a href=\"#\" class=\"news-learn-more hvr-icon-forward\">Learn More <i class=\"bi bi-arrow-right hvr-icon\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
", "page_elements/newspromo.twig", "/Users/stephenyears/imperva_new/templates/page_elements/newspromo.twig");
    }
}
