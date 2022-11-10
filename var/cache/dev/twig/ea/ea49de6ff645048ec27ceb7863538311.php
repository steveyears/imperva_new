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

/* page_elements/ntt-testimonial-video.twig */
class __TwigTemplate_a50d44aa956c6e4e8cf1e3832568d2ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/ntt-testimonial-video.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/ntt-testimonial-video.twig"));

        // line 1
        echo "<div class=\"container-fluid ntt-testimonial\">
    <div class=\"container container-ntt-testimonial\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-ntt-tx.png"), "html", null, true);
        echo "\" style=\"width: 180px; margin-bottom: 40px;\">
                <div style=\"font-weight: 100; font-size: 2.2em;\">After implementing Cloud WAF, countermeasures against specific threats have been off our radar in a good sense and we essentially leave things to Imperva.</div>
                <div style=\"margin-top: 30px; font-weight:100; line-height: 1.8em;\">Ryo Sakamoto<br />Section Manager</div>
            </div>
            <div class=\"col-md-6 my-auto hvr-grow-2\" style=\"text-align: center; font-weight: 100;\">
                <i class=\"bi bi-play-circle play-large\" style=\"font-size: 6em;\"></i>
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
        return "page_elements/ntt-testimonial-video.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid ntt-testimonial\">
    <div class=\"container container-ntt-testimonial\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <img src=\"{{ asset('build/images/logo-company-ntt-tx.png') }}\" style=\"width: 180px; margin-bottom: 40px;\">
                <div style=\"font-weight: 100; font-size: 2.2em;\">After implementing Cloud WAF, countermeasures against specific threats have been off our radar in a good sense and we essentially leave things to Imperva.</div>
                <div style=\"margin-top: 30px; font-weight:100; line-height: 1.8em;\">Ryo Sakamoto<br />Section Manager</div>
            </div>
            <div class=\"col-md-6 my-auto hvr-grow-2\" style=\"text-align: center; font-weight: 100;\">
                <i class=\"bi bi-play-circle play-large\" style=\"font-size: 6em;\"></i>
            </div>
        </div>
    </div>
</div>
", "page_elements/ntt-testimonial-video.twig", "/Users/stephenyears/imperva_new/templates/page_elements/ntt-testimonial-video.twig");
    }
}
