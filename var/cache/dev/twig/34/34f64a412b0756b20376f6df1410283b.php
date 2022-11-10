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

/* cds_landingpage/index.html.twig */
class __TwigTemplate_dbbf582043586a559b4b0e364645ac55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cds_landingpage/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cds_landingpage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cds_landingpage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Imperva Cloud Data Security";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <style>
        @media screen and (max-width: 1200px) {
            .container-cds-landing h1 {
                font-size: 2.8em;
            }
        @media screen and (max-width: 992px) {
            .container-cds-landing h1 {
                font-size: 2.2em;
             }
            .container-cds-landing {
                padding-top: 100px;
                padding-bottom: 60px;
            }
        }
    </style>
    ";
        // line 21
        echo twig_include($this->env, $context, "page_elements/main_nav.twig");
        echo "
    <div class=\"container-fluid container-fluid-cds-landing\">
        <div class=\"container container-cds-landing\">
            <div class=\"row no-gutters\">
                <div class=\"col cds-col\">
                    <h1>Cloud Data Security: Simplify security for your AWS and Azure managed databases</h1>
                    <h2>Fast. Simple. Powerful.</h2>
                    <p>SaaS-based data posture management and protection for AWS and Azure managed database service from Imperva. Cloud Data Security provides important risk management capabilities not available in public cloud services.</p>
                    <div class=\"row no-gutters\">

                        <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-4 cds-callout-container\">
                            <div class=\"cds-callout hvr-grow\">
                                <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-discovery.svg"), "html", null, true);
        echo "\">
                                <div class=\"cds-callout-title\">Data Discovery and Classification</div>
                                <div class=\"cds-callout-text\">Automatically and continuously discovers all cloud data repositories</div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-4 cds-callout-container\">
                            <div class=\"cds-callout hvr-grow\">
                                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-cloud-discovery.svg"), "html", null, true);
        echo "\">
                                <div class=\"cds-callout-title\">Cloud Data Security Posture Management</div>
                                <div class=\"cds-callout-text\">Identifies security exposures before they are exploited</div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-4 cds-callout-container\">
                            <div class=\"cds-callout hvr-grow\">
                                <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-risk-analytics.svg"), "html", null, true);
        echo "\">
                                <div class=\"cds-callout-title\">Automatic and Instant Threat Detection</div>
                                <div class=\"cds-callout-text\">Immediately alert when potential malicious activity is detected</div>
                            </div>
                        </div>

                    </div>
                    <div style=\"margin-bottom: 30px;\"></div>
                </div>

                <div class=\"col-xl-4 col-lg-6 col-md-12 cds-col\">
                    <div class=\"cds-form-container\">
                        <div class=\"form-title\">Start your free trial of Imperva Cloud Data Security today!</div>
                        <form>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputFullname\" placeholder=\"Full Name\" style=\"margin-bottom: 20px;\">
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputFullname\" placeholder=\"Company Name\" style=\"margin-bottom: 20px;\">
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputCompanyname\"  placeholder=\"Business Email\" style=\"margin-bottom: 20px;\">
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPhonenumber\" placeholder=\"Phone Number\" style=\"margin-bottom: 20px;\">
                                <div style=\"float: left; margin-right: 10px; margin-bottom: 15px;\"><input type=\"checkbox\"></div> <div class=\"small-print\">I acknowledge and agree to the terms and conditions set forth in Imperva’s End User License and Services Agreement. </div>
                                <div style=\"clear:both;\"></div>
                            </div>
                            <button style=\"width: auto; color: #FFFFFF;\" type=\"submit\" class=\"btn-imperva-gradient-1\">Start Now</button>
                            <div style=\"clear:both;\"></div>
                            <p class=\"small-print\">During the term of the trial, Imperva reserves the right to limit bandwidth usage to 100 Mbps with an option to null-route traffic that exceeds this threshold. This will result in sites being unavailable to the Internet. This limitation only applies to trial users for the term of the trial.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "cds_landingpage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 47,  130 => 40,  120 => 33,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Imperva Cloud Data Security{% endblock %}

{% block body %}
    <style>
        @media screen and (max-width: 1200px) {
            .container-cds-landing h1 {
                font-size: 2.8em;
            }
        @media screen and (max-width: 992px) {
            .container-cds-landing h1 {
                font-size: 2.2em;
             }
            .container-cds-landing {
                padding-top: 100px;
                padding-bottom: 60px;
            }
        }
    </style>
    {{include('page_elements/main_nav.twig') }}
    <div class=\"container-fluid container-fluid-cds-landing\">
        <div class=\"container container-cds-landing\">
            <div class=\"row no-gutters\">
                <div class=\"col cds-col\">
                    <h1>Cloud Data Security: Simplify security for your AWS and Azure managed databases</h1>
                    <h2>Fast. Simple. Powerful.</h2>
                    <p>SaaS-based data posture management and protection for AWS and Azure managed database service from Imperva. Cloud Data Security provides important risk management capabilities not available in public cloud services.</p>
                    <div class=\"row no-gutters\">

                        <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-4 cds-callout-container\">
                            <div class=\"cds-callout hvr-grow\">
                                <img src=\"{{ asset('build/images/logo-data-discovery.svg') }}\">
                                <div class=\"cds-callout-title\">Data Discovery and Classification</div>
                                <div class=\"cds-callout-text\">Automatically and continuously discovers all cloud data repositories</div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-4 cds-callout-container\">
                            <div class=\"cds-callout hvr-grow\">
                                <img src=\"{{ asset('build/images/logo-data-cloud-discovery.svg') }}\">
                                <div class=\"cds-callout-title\">Cloud Data Security Posture Management</div>
                                <div class=\"cds-callout-text\">Identifies security exposures before they are exploited</div>
                            </div>
                        </div>
                        <div class=\"col-sm-12 col-md-12 col-lg-12 col-xl-4 cds-callout-container\">
                            <div class=\"cds-callout hvr-grow\">
                                <img src=\"{{ asset('build/images/logo-data-risk-analytics.svg') }}\">
                                <div class=\"cds-callout-title\">Automatic and Instant Threat Detection</div>
                                <div class=\"cds-callout-text\">Immediately alert when potential malicious activity is detected</div>
                            </div>
                        </div>

                    </div>
                    <div style=\"margin-bottom: 30px;\"></div>
                </div>

                <div class=\"col-xl-4 col-lg-6 col-md-12 cds-col\">
                    <div class=\"cds-form-container\">
                        <div class=\"form-title\">Start your free trial of Imperva Cloud Data Security today!</div>
                        <form>
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputFullname\" placeholder=\"Full Name\" style=\"margin-bottom: 20px;\">
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputFullname\" placeholder=\"Company Name\" style=\"margin-bottom: 20px;\">
                                <input type=\"email\" class=\"form-control\" id=\"exampleInputCompanyname\"  placeholder=\"Business Email\" style=\"margin-bottom: 20px;\">
                                <input type=\"text\" class=\"form-control\" id=\"exampleInputPhonenumber\" placeholder=\"Phone Number\" style=\"margin-bottom: 20px;\">
                                <div style=\"float: left; margin-right: 10px; margin-bottom: 15px;\"><input type=\"checkbox\"></div> <div class=\"small-print\">I acknowledge and agree to the terms and conditions set forth in Imperva’s End User License and Services Agreement. </div>
                                <div style=\"clear:both;\"></div>
                            </div>
                            <button style=\"width: auto; color: #FFFFFF;\" type=\"submit\" class=\"btn-imperva-gradient-1\">Start Now</button>
                            <div style=\"clear:both;\"></div>
                            <p class=\"small-print\">During the term of the trial, Imperva reserves the right to limit bandwidth usage to 100 Mbps with an option to null-route traffic that exceeds this threshold. This will result in sites being unavailable to the Internet. This limitation only applies to trial users for the term of the trial.</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "cds_landingpage/index.html.twig", "/Users/stephenyears/imperva_new/templates/cds_landingpage/index.html.twig");
    }
}
