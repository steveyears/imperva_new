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

/* page_elements/ntt-testimonial.twig */
class __TwigTemplate_844ab387d8f9224273226bdba1c1fa3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/ntt-testimonial.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/ntt-testimonial.twig"));

        // line 1
        echo "<div class=\"container-fluid ntt-testimonial\">
    <div class=\"container container-ntt-testimonial\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"discovery-title\">NTT TechnoCross achieves stable web operations</div>
                <div class=\"discovery-text\">NTT required a solution that had a global track record of adoption, operability that reduces operating load, availability that achieves stable operation, ease of implementation, usage not as an asset but as a service, and monthly payable usage fees. Imperva Cloud WAF was the answer.</div>
                <button class=\"btn-imperva-gradient-1\">Customer Story<i class=\"bi bi-arrow-right-circle\"></i></button>
            </div>
            <div class=\"col-md-6 my-auto\">
                <div class=\"discovery-image\">
                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-ntt-tx.png"), "html", null, true);
        echo "\">
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
        return "page_elements/ntt-testimonial.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid ntt-testimonial\">
    <div class=\"container container-ntt-testimonial\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <div class=\"discovery-title\">NTT TechnoCross achieves stable web operations</div>
                <div class=\"discovery-text\">NTT required a solution that had a global track record of adoption, operability that reduces operating load, availability that achieves stable operation, ease of implementation, usage not as an asset but as a service, and monthly payable usage fees. Imperva Cloud WAF was the answer.</div>
                <button class=\"btn-imperva-gradient-1\">Customer Story<i class=\"bi bi-arrow-right-circle\"></i></button>
            </div>
            <div class=\"col-md-6 my-auto\">
                <div class=\"discovery-image\">
                    <img src=\"{{ asset('build/images/logo-company-ntt-tx.png') }}\">
                </div>
            </div>
        </div>
    </div>
</div>
", "page_elements/ntt-testimonial.twig", "/Users/stephenyears/imperva_new/templates/page_elements/ntt-testimonial.twig");
    }
}
