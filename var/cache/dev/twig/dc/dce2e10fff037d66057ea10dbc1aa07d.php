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

/* page_elements/legal.twig */
class __TwigTemplate_3000096aed776e62e168267b2a9db1c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/legal.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/legal.twig"));

        // line 1
        echo "<div class=\"container-fluid\" id=\"legal-container-fluid\">
    <div class=\"container-xxl pt-3 pb-3\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between\">
            Copyright © 2022 Imperva. All rights reserved.
            <ul class=\"list-unstyled d-flex mb-0\">
                <li class=\"ms-3\"><a href=\"#\">Cookie Settings</a></li>
                <li class=\"ms-3\"><a href=\"#\">Trust Center</a></li>
                <li class=\"ms-3\"><a href=\"#\">Modern Slavery Statement</a></li>
                <li class=\"ms-3\"><a href=\"#\">Privacy</a></li>
                <li class=\"ms-3\"><a href=\"#\">Legal</a></li>
            </ul>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_elements/legal.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\" id=\"legal-container-fluid\">
    <div class=\"container-xxl pt-3 pb-3\">
        <div class=\"d-flex flex-column flex-sm-row justify-content-between\">
            Copyright © 2022 Imperva. All rights reserved.
            <ul class=\"list-unstyled d-flex mb-0\">
                <li class=\"ms-3\"><a href=\"#\">Cookie Settings</a></li>
                <li class=\"ms-3\"><a href=\"#\">Trust Center</a></li>
                <li class=\"ms-3\"><a href=\"#\">Modern Slavery Statement</a></li>
                <li class=\"ms-3\"><a href=\"#\">Privacy</a></li>
                <li class=\"ms-3\"><a href=\"#\">Legal</a></li>
            </ul>
        </div>
    </div>
</div>
", "page_elements/legal.twig", "/Users/stephenyears/imperva_new/templates/page_elements/legal.twig");
    }
}
