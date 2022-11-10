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

/* datasecurity/index.html.twig */
class __TwigTemplate_110cdeb1797baa886a9c346f4140186f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datasecurity/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "datasecurity/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "datasecurity/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <script type=\"text/javascript\">
        window.addEventListener(\"resize\", function() {
            \"use strict\"; window.location.reload();
        });


        document.addEventListener(\"DOMContentLoaded\", function(){

            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element){
                element.addEventListener('click', function (e) {
                    e.stopPropagation();
                });
            });

            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {

                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
                    everydropdown.addEventListener('hidden.bs.dropdown', function () {
                        // after dropdown is hidden, then find all submenus
                        this.querySelectorAll('.megasubmenu').forEach(function(everysubmenu){
                            // hide every submenu as well
                            everysubmenu.style.display = 'none';
                        });
                    })
                });

                document.querySelectorAll('.has-megasubmenu a').forEach(function(element){
                    element.addEventListener('click', function (e) {

                        let nextEl = this.nextElementSibling;
                        if(nextEl && nextEl.classList.contains('megasubmenu')) {
                            // prevent opening link if link needs to open dropdown
                            e.preventDefault();

                            if(nextEl.style.display == 'block'){
                                nextEl.style.display = 'none';
                            } else {
                                nextEl.style.display = 'block';
                            }

                        }
                    });
                })
            }
            // end if innerWidth
        });
        // DOMContentLoaded  end
    </script>
<div style=\"height:1000px; background: #212121;\">
    <div class=\"container-fluid\" id=\"main-nav-container-fluid\">
        <div class=\"container-xxl pb-2 pt-2\" id=\"main-nav-container\">
            <nav class=\"navbar sticky-top navbar-expand-lg\">
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"/build/images/logo-imperva.svg\" alt=\"Imperva\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" data-bs-auto-close=\"outside\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse mr-auto\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-link nav-item dropdown\">
                            <a href=\"#\" class=\"dropdown-link menu-products\" data-toggle=\"dropdown\" id=\"products\">Products</a>
                            <ul class=\"dropdown-menu products-menu\" role=\"menu\">
                                <div class=\"container\">
                                    <div class=\"vertical-tab\" role=\"tabpanel\">
                                        <!-- Nav tabs -->
                                        <div class=\"nav-tab-container\">
                                            <ul class=\"nav-tabs\" id=\"myMegaTab\" role=\"tablist\">
                                                <li><div class=\"nav-link active\" id=\"application-performance-tab\" data-bs-target=\"#application-performance\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"application-performance\" aria-selected=\"true\">
                                                        <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-application-performance.svg"), "html", null, true);
        echo "\">Application Performance
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"nav-link\" id=\"application-security-tab\" data-bs-target=\"#application-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"application-security\" aria-selected=\"false\">
                                                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-application-security.svg"), "html", null, true);
        echo "\">Application Security
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"nav-link\" id=\"data-security-tab\" data-bs-target=\"#data-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"dara-security\" aria-selected=\"false\">
                                                        <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-security.svg"), "html", null, true);
        echo "\">Data Security
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"nav-link\" id=\"network-security-tab\" data-bs-target=\"#network-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"network-security\" aria-selected=\"false\">
                                                        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-network-security.svg"), "html", null, true);
        echo "\">Network Security
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class=\"tab-link\">
                                                <a href=\"#\">Imperva Plans<i class=\"bi bi-arrow-right-square\"></i></a>
                                            </div>
                                        </div>
                                        <!-- Tab panes -->
                                        <div class=\"tab-content\" id=\"myMegaTabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"application-performance\" role=\"tabpanel\" aria-labelledby=\"application-performance-tab\">
                                                <div class=\"container\">
                                                    <div class=\"megaTabCol0\">
                                                        <div class=\"megaTabHeader appperf\">
                                                            <div class=\"megaTabTitle appperf\">Application Performance Overview</div>
                                                            <div class=\"megaTabTitleText\">Automated protection for complex cloud native application architectures</div>
                                                        </div>
                                                        <div class=\"megaTabCol1\">
                                                            <ul style=\"padding: 0;\">
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-cdn.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Content Delivery Network</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-bot-protection.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Advanced Bot Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-api-security.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">API Security</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-runtime-protection.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Runtime Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <div class=\"megaTabCol1\">
                                                            <ul style=\"padding: 0;\">
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-client-side-protection.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Client Side Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-serverless-protection.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Serverless Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-attack-analytics.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Attack Analytics</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-account-takeover.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Account Takeover</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <div class=\"megaTabCol2\">
                                                            <img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/report-cover-bots.png"), "html", null, true);
        echo "\">
                                                            <div class=\"report-download-button\">
                                                                <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Get Featured Report <i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"application-security\" role=\"tabpanel\" aria-labelledby=\"application-security-tab\">
                                                <div class=\"container\">
                                                    <div class=\"megaTabCol0\">
                                                        <div class=\"megaTabHeader appsec\">
                                                            <div class=\"megaTabTitle appsec\">Application Security Overview</div>
                                                            <div class=\"megaTabTitleText\">Automated protection for complex cloud native application architectures</div>
                                                        </div>
                                                        <div class=\"megaTabCol1\">
                                                            <ul style=\"padding: 0;\">
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-waf.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Web Application Firewall</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-bot-protection.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Advanced Bot Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-api-security.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">API Security</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-runtime-protection.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Runtime Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <div class=\"megaTabCol1\">
                                                            <ul style=\"padding: 0;\">
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-client-side-protection.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Client Side Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-serverless-protection.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Serverless Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-attack-analytics.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Attack Analytics</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-account-takeover.svg"), "html", null, true);
        echo "\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Account Takeover</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <div class=\"megaTabCol2\">
                                                            <img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/report-cover-bots.png"), "html", null, true);
        echo "\">
                                                            <div class=\"report-download-button\">
                                                                <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Get Featured Report <i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"data-security\" role=\"tabpanel\" aria-labelledby=\"data-security-tab\">
                                                Data Security Text
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"network-security\" role=\"tabpanel\" aria-labelledby=\"network-security-tab\">
                                                Data Security Text
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-solutions\">Solutions</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-support\">Support</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-partners\">Partners</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-customers\">Customers</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-resources\">Resources</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-company\">Company</a></li>
                    </ul>
                </div>
                <button type=\"button\" class=\"btn-imperva-action float-right\">Free Trial</button>
            </nav>
        </div>
    </div>

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "datasecurity/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  415 => 286,  402 => 276,  390 => 267,  378 => 258,  366 => 249,  350 => 236,  338 => 227,  326 => 218,  314 => 209,  292 => 190,  279 => 180,  267 => 171,  255 => 162,  243 => 153,  227 => 140,  215 => 131,  203 => 122,  191 => 113,  167 => 92,  159 => 87,  151 => 82,  143 => 77,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <script type=\"text/javascript\">
        window.addEventListener(\"resize\", function() {
            \"use strict\"; window.location.reload();
        });


        document.addEventListener(\"DOMContentLoaded\", function(){

            /////// Prevent closing from click inside dropdown
            document.querySelectorAll('.dropdown-menu').forEach(function(element){
                element.addEventListener('click', function (e) {
                    e.stopPropagation();
                });
            });

            // make it as accordion for smaller screens
            if (window.innerWidth < 992) {

                // close all inner dropdowns when parent is closed
                document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
                    everydropdown.addEventListener('hidden.bs.dropdown', function () {
                        // after dropdown is hidden, then find all submenus
                        this.querySelectorAll('.megasubmenu').forEach(function(everysubmenu){
                            // hide every submenu as well
                            everysubmenu.style.display = 'none';
                        });
                    })
                });

                document.querySelectorAll('.has-megasubmenu a').forEach(function(element){
                    element.addEventListener('click', function (e) {

                        let nextEl = this.nextElementSibling;
                        if(nextEl && nextEl.classList.contains('megasubmenu')) {
                            // prevent opening link if link needs to open dropdown
                            e.preventDefault();

                            if(nextEl.style.display == 'block'){
                                nextEl.style.display = 'none';
                            } else {
                                nextEl.style.display = 'block';
                            }

                        }
                    });
                })
            }
            // end if innerWidth
        });
        // DOMContentLoaded  end
    </script>
<div style=\"height:1000px; background: #212121;\">
    <div class=\"container-fluid\" id=\"main-nav-container-fluid\">
        <div class=\"container-xxl pb-2 pt-2\" id=\"main-nav-container\">
            <nav class=\"navbar sticky-top navbar-expand-lg\">
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"/build/images/logo-imperva.svg\" alt=\"Imperva\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\" data-bs-auto-close=\"outside\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse mr-auto\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav mr-auto\">
                        <li class=\"nav-link nav-item dropdown\">
                            <a href=\"#\" class=\"dropdown-link menu-products\" data-toggle=\"dropdown\" id=\"products\">Products</a>
                            <ul class=\"dropdown-menu products-menu\" role=\"menu\">
                                <div class=\"container\">
                                    <div class=\"vertical-tab\" role=\"tabpanel\">
                                        <!-- Nav tabs -->
                                        <div class=\"nav-tab-container\">
                                            <ul class=\"nav-tabs\" id=\"myMegaTab\" role=\"tablist\">
                                                <li><div class=\"nav-link active\" id=\"application-performance-tab\" data-bs-target=\"#application-performance\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"application-performance\" aria-selected=\"true\">
                                                        <img src=\"{{ asset('build/images/logo-application-performance.svg') }}\">Application Performance
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"nav-link\" id=\"application-security-tab\" data-bs-target=\"#application-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"application-security\" aria-selected=\"false\">
                                                        <img src=\"{{ asset('build/images/logo-application-security.svg') }}\">Application Security
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"nav-link\" id=\"data-security-tab\" data-bs-target=\"#data-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"dara-security\" aria-selected=\"false\">
                                                        <img src=\"{{ asset('build/images/logo-data-security.svg') }}\">Data Security
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"nav-link\" id=\"network-security-tab\" data-bs-target=\"#network-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"network-security\" aria-selected=\"false\">
                                                        <img src=\"{{ asset('build/images/logo-network-security.svg') }}\">Network Security
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class=\"tab-link\">
                                                <a href=\"#\">Imperva Plans<i class=\"bi bi-arrow-right-square\"></i></a>
                                            </div>
                                        </div>
                                        <!-- Tab panes -->
                                        <div class=\"tab-content\" id=\"myMegaTabContent\">
                                            <div class=\"tab-pane fade show active\" id=\"application-performance\" role=\"tabpanel\" aria-labelledby=\"application-performance-tab\">
                                                <div class=\"container\">
                                                    <div class=\"megaTabCol0\">
                                                        <div class=\"megaTabHeader appperf\">
                                                            <div class=\"megaTabTitle appperf\">Application Performance Overview</div>
                                                            <div class=\"megaTabTitleText\">Automated protection for complex cloud native application architectures</div>
                                                        </div>
                                                        <div class=\"megaTabCol1\">
                                                            <ul style=\"padding: 0;\">
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-cdn.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Content Delivery Network</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-bot-protection.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Advanced Bot Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-api-security.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">API Security</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-runtime-protection.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Runtime Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <div class=\"megaTabCol1\">
                                                            <ul style=\"padding: 0;\">
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-client-side-protection.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Client Side Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-serverless-protection.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Serverless Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-attack-analytics.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Attack Analytics</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-account-takeover.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Account Takeover</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <div class=\"megaTabCol2\">
                                                            <img src=\"{{ asset('build/images/report-cover-bots.png') }}\">
                                                            <div class=\"report-download-button\">
                                                                <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Get Featured Report <i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"application-security\" role=\"tabpanel\" aria-labelledby=\"application-security-tab\">
                                                <div class=\"container\">
                                                    <div class=\"megaTabCol0\">
                                                        <div class=\"megaTabHeader appsec\">
                                                            <div class=\"megaTabTitle appsec\">Application Security Overview</div>
                                                            <div class=\"megaTabTitleText\">Automated protection for complex cloud native application architectures</div>
                                                        </div>
                                                        <div class=\"megaTabCol1\">
                                                            <ul style=\"padding: 0;\">
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-waf.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Web Application Firewall</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-bot-protection.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Advanced Bot Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-api-security.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">API Security</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-runtime-protection.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Runtime Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <div class=\"megaTabCol1\">
                                                            <ul style=\"padding: 0;\">
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-client-side-protection.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Client Side Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-serverless-protection.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Serverless Protection</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-attack-analytics.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Attack Analytics</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                                <a href=\"#\">
                                                                    <li class=\"megaTabSub\">
                                                                        <img class=\"align-top\" src=\"{{ asset('build/images/logo-account-takeover.svg') }}\">
                                                                        <div class=\"megaTabSubContainer\">
                                                                            <div class=\"megaTabSubtitle\">Account Takeover</div>
                                                                            <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                        </div>
                                                                    </li>
                                                                </a>
                                                            </ul>
                                                        </div>
                                                        <div class=\"megaTabCol2\">
                                                            <img src=\"{{ asset('build/images/report-cover-bots.png') }}\">
                                                            <div class=\"report-download-button\">
                                                                <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Get Featured Report <i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"data-security\" role=\"tabpanel\" aria-labelledby=\"data-security-tab\">
                                                Data Security Text
                                            </div>
                                            <div class=\"tab-pane fade\" id=\"network-security\" role=\"tabpanel\" aria-labelledby=\"network-security-tab\">
                                                Data Security Text
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-solutions\">Solutions</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-support\">Support</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-partners\">Partners</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-customers\">Customers</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-resources\">Resources</a></li>
                        <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-company\">Company</a></li>
                    </ul>
                </div>
                <button type=\"button\" class=\"btn-imperva-action float-right\">Free Trial</button>
            </nav>
        </div>
    </div>

    </div>
{% endblock %}
", "datasecurity/index.html.twig", "/Users/stephenyears/imperva_new/templates/datasecurity/index.html.twig");
    }
}
