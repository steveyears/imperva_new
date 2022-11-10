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

/* page_elements/logos_scroll.twig */
class __TwigTemplate_47cbf77f2b7127347b3377f21dcac719 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/logos_scroll.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/logos_scroll.twig"));

        // line 1
        echo "<div class=\"container-fluid\" id=\"logos-scroll\">
    <div class=\"container\">
        <div class=\"logos-scroll-title\">
            We protect 6200+ enterprises and millions of people daily
        </div>
        <div class=\"scrolling-logos\">
            <div><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-aarp.svg"), "html", null, true);
        echo "\"></div>
            <div><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-seek.svg"), "html", null, true);
        echo "\"></div>
            <div style=\"margin-top: -3px;\"><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-extended-stay.svg"), "html", null, true);
        echo "\"></div>
            <div style=\"margin-top: 3px;\"><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-shutterfly.svg"), "html", null, true);
        echo "\"></div>
            <div><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-sunlife.svg"), "html", null, true);
        echo "\"></div>
            <div><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-popular.svg"), "html", null, true);
        echo "\"></div>
            <div><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-digicert.svg"), "html", null, true);
        echo "\"></div>
            <div><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-blue-shield.svg"), "html", null, true);
        echo "\"></div>
            <div style=\"margin-top: -3px;\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-company-tower.svg"), "html", null, true);
        echo "\"></div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_elements/logos_scroll.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  79 => 14,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  59 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\" id=\"logos-scroll\">
    <div class=\"container\">
        <div class=\"logos-scroll-title\">
            We protect 6200+ enterprises and millions of people daily
        </div>
        <div class=\"scrolling-logos\">
            <div><img src=\"{{ asset('build/images/logo-company-aarp.svg') }}\"></div>
            <div><img src=\"{{ asset('build/images/logo-company-seek.svg') }}\"></div>
            <div style=\"margin-top: -3px;\"><img src=\"{{ asset('build/images/logo-company-extended-stay.svg') }}\"></div>
            <div style=\"margin-top: 3px;\"><img src=\"{{ asset('build/images/logo-company-shutterfly.svg') }}\"></div>
            <div><img src=\"{{ asset('build/images/logo-company-sunlife.svg') }}\"></div>
            <div><img src=\"{{ asset('build/images/logo-company-popular.svg') }}\"></div>
            <div><img src=\"{{ asset('build/images/logo-company-digicert.svg') }}\"></div>
            <div><img src=\"{{ asset('build/images/logo-company-blue-shield.svg') }}\"></div>
            <div style=\"margin-top: -3px;\"><img src=\"{{ asset('build/images/logo-company-tower.svg') }}\"></div>
        </div>
    </div>
</div>
", "page_elements/logos_scroll.twig", "/Users/stephenyears/imperva_new/templates/page_elements/logos_scroll.twig");
    }
}
