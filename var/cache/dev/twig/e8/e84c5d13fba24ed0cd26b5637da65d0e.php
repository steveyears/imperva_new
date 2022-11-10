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

/* page_elements/main_nav.twig */
class __TwigTemplate_9bd140631f8fc94ce500bdfe0d5b8213 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/main_nav.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/main_nav.twig"));

        // line 1
        echo "
<div class=\"container-fluid\" id=\"main-nav-container-fluid\">
    <div class=\"container-xxl pb-2 pt-2\" id=\"main-nav-container\">
        <nav class=\"navbar navbar-expand-lg\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"/build/images/logo-imperva.svg\" alt=\"Imperva\">
            </a>
            <a class=\"offcanvas-button\" type=\"button\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample\" style=\"margin-top: -10px;\">
                <i class=\"bi bi-list\" style=\"font-size: 30px;\"></i>
            </a>
            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-link nav-item dropdown\">
                        <a href=\"#\" class=\"dropdown-link menu-products hvr-underline-from-center\" data-toggle=\"dropdown\" id=\"products\">Products</a>
                        <ul class=\"dropdown-menu products-menu\" role=\"menu\">
                            <div class=\"container\">
                                <div class=\"vertical-tab\" role=\"tabpanel\">

                                    <!-- Mega Menu Side Navigation Tabs -->

                                    <div class=\"nav-tab-container\">
                                        <ul class=\"nav-tabs\" id=\"myMegaTab\" role=\"tablist\">
                                            <li>
                                                <div class=\"nav-link active\" id=\"application-security-tab\" data-bs-target=\"#application-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"application-security\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-application-security.svg"), "html", null, true);
        echo "\">Application Security
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"nav-link\" id=\"data-security-tab\" data-bs-target=\"#data-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"dara-security\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-security.svg"), "html", null, true);
        echo "\">Data Security
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"nav-link\" id=\"network-security-tab\" data-bs-target=\"#network-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"network-security\" aria-selected=\"false\">
                                                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-network-security.svg"), "html", null, true);
        echo "\">Network Security
                                                </div>
                                            </li>
                                            <li>
                                                <div class=\"nav-link\" id=\"application-performance-tab\" data-bs-target=\"#application-performance\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"application-performance\" aria-selected=\"true\">
                                                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-application-performance.svg"), "html", null, true);
        echo "\">Application Performance
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Tab Pane Application Performance -->

                                    <div class=\"tab-content\" id=\"myMegaTabContent\">
                                        <div class=\"tab-pane fade\" id=\"application-performance\" role=\"tabpanel\" aria-labelledby=\"application-performance-tab\">
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
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-cdn.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Content Delivery Network</div>
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
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-waiting-room-small.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Waiting Room</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                                    <div class=\"megaTabCol2\">
                                                        <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/menu-callout-appperf-netrefer.webp"), "html", null, true);
        echo "\">
                                                        <div class=\"report-download-button\">
                                                            <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Read Customer Story<i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tab Pane Application Security -->

                                        <div class=\"tab-pane fade show active\" id=\"application-security\" role=\"tabpanel\" aria-labelledby=\"application-security-tab\">
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
        // line 105
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
        // line 114
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
        // line 123
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
        // line 132
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
        // line 145
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
        // line 154
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
        // line 163
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
        // line 172
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
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/report-cover-bots.png"), "html", null, true);
        echo "\">
                                                        <div class=\"report-download-button\">
                                                            <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Get Featured Report<i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tab Pane Data Security -->

                                        <div class=\"tab-pane fade\" id=\"data-security\" role=\"tabpanel\" aria-labelledby=\"data-security-tab\">
                                            <div class=\"container\">
                                                <div class=\"megaTabCol0\">
                                                    <div class=\"megaTabHeader datasec\">
                                                        <div class=\"megaTabTitle datasec\">Data Security Fabric Overview</div>
                                                        <div class=\"megaTabTitleText\">Imperva Data Security Fabric is the first enterprise-scale, multicloud, hybrid solution to protect all data types</div>
                                                    </div>
                                                    <div class=\"megaTabCol1\">
                                                        <ul style=\"padding: 0;\">
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-activity-monitoring.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Activity Monitoring</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-risk-analytics.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Risk Analytics</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-encryption.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Encryption & Tokenization</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-loss-prevention.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Loss Prevention</div>
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
        // line 244
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-access-control.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Access Control</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-discovery.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Discovery & Classification</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-cloud-data-security.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Cloud Native Data Security</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-masking.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Masking</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                                    <div class=\"megaTabCol2\">
                                                        <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/report-cover-dsf.png"), "html", null, true);
        echo "\">
                                                        <div class=\"report-download-button\">
                                                            <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">View Data Sheet<i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tab Pane Network Security -->

                                        <div class=\"tab-pane fade\" id=\"network-security\" role=\"tabpanel\" aria-labelledby=\"network-security-tab\">
                                            <div class=\"container\">
                                                <div class=\"megaTabCol0\">
                                                    <div class=\"megaTabHeader networksec\">
                                                        <div class=\"megaTabTitle networksec\">Network Protection Overview</div>
                                                        <div class=\"megaTabTitleText\">Imperva DDoS Protection secures all your assets at the edge for uninterrupted operation. Ensure business continuity with guaranteed uptime.</div>
                                                    </div>
                                                    <div class=\"megaTabCol1\">
                                                        <ul style=\"padding: 0;\">
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-ddos.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">DDoS Protection</div>
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
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-dns.svg"), "html", null, true);
        echo "\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Managed DNS</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                                    <div class=\"megaTabCol2\">
                                                        <img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/report-cover-ddos.png"), "html", null, true);
        echo "\">
                                                        <div class=\"report-download-button\">
                                                            <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Get Featured Report<i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Products Mega Menu Tab Panes -->

                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-solutions hvr-underline-from-center\">Solutions</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-support hvr-underline-from-center\">Support</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-partners hvr-underline-from-center\">Partners</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-customers hvr-underline-from-center\">Customers</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-resources hvr-underline-from-center\">Resources</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-company hvr-underline-from-center\">Company</a></li>
                </ul>
                <div class=\"my-2 my-lg-0\">
                    <button type=\"button\" class=\"btn-imperva-action float-right\">Free Trial</button>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\">
    <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Offcanvas</h5>
        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">
        <div>
            Some text as placeholder. To do: create off-canvas menu
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_elements/main_nav.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  451 => 326,  438 => 316,  422 => 303,  397 => 281,  384 => 271,  372 => 262,  360 => 253,  348 => 244,  332 => 231,  320 => 222,  308 => 213,  296 => 204,  271 => 182,  258 => 172,  246 => 163,  234 => 154,  222 => 145,  206 => 132,  194 => 123,  182 => 114,  170 => 105,  145 => 83,  132 => 73,  116 => 60,  93 => 40,  85 => 35,  77 => 30,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container-fluid\" id=\"main-nav-container-fluid\">
    <div class=\"container-xxl pb-2 pt-2\" id=\"main-nav-container\">
        <nav class=\"navbar navbar-expand-lg\">
            <a class=\"navbar-brand\" href=\"#\">
                <img src=\"/build/images/logo-imperva.svg\" alt=\"Imperva\">
            </a>
            <a class=\"offcanvas-button\" type=\"button\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasExample\" style=\"margin-top: -10px;\">
                <i class=\"bi bi-list\" style=\"font-size: 30px;\"></i>
            </a>
            <div class=\"collapse navbar-collapse\">
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-link nav-item dropdown\">
                        <a href=\"#\" class=\"dropdown-link menu-products hvr-underline-from-center\" data-toggle=\"dropdown\" id=\"products\">Products</a>
                        <ul class=\"dropdown-menu products-menu\" role=\"menu\">
                            <div class=\"container\">
                                <div class=\"vertical-tab\" role=\"tabpanel\">

                                    <!-- Mega Menu Side Navigation Tabs -->

                                    <div class=\"nav-tab-container\">
                                        <ul class=\"nav-tabs\" id=\"myMegaTab\" role=\"tablist\">
                                            <li>
                                                <div class=\"nav-link active\" id=\"application-security-tab\" data-bs-target=\"#application-security\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"application-security\" aria-selected=\"false\">
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
                                            <li>
                                                <div class=\"nav-link\" id=\"application-performance-tab\" data-bs-target=\"#application-performance\" data-bs-toggle=\"tab\" type=\"button\" role=\"tab\" aria-controls=\"application-performance\" aria-selected=\"true\">
                                                    <img src=\"{{ asset('build/images/logo-application-performance.svg') }}\">Application Performance
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Tab Pane Application Performance -->

                                    <div class=\"tab-content\" id=\"myMegaTabContent\">
                                        <div class=\"tab-pane fade\" id=\"application-performance\" role=\"tabpanel\" aria-labelledby=\"application-performance-tab\">
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
                                                        </ul>
                                                    </div>
                                                    <div class=\"megaTabCol1\">
                                                        <ul style=\"padding: 0;\">
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-waiting-room-small.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Waiting Room</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                                    <div class=\"megaTabCol2\">
                                                        <img src=\"{{ asset('build/images/menu-callout-appperf-netrefer.webp') }}\">
                                                        <div class=\"report-download-button\">
                                                            <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Read Customer Story<i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tab Pane Application Security -->

                                        <div class=\"tab-pane fade show active\" id=\"application-security\" role=\"tabpanel\" aria-labelledby=\"application-security-tab\">
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
                                                            <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Get Featured Report<i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tab Pane Data Security -->

                                        <div class=\"tab-pane fade\" id=\"data-security\" role=\"tabpanel\" aria-labelledby=\"data-security-tab\">
                                            <div class=\"container\">
                                                <div class=\"megaTabCol0\">
                                                    <div class=\"megaTabHeader datasec\">
                                                        <div class=\"megaTabTitle datasec\">Data Security Fabric Overview</div>
                                                        <div class=\"megaTabTitleText\">Imperva Data Security Fabric is the first enterprise-scale, multicloud, hybrid solution to protect all data types</div>
                                                    </div>
                                                    <div class=\"megaTabCol1\">
                                                        <ul style=\"padding: 0;\">
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-data-activity-monitoring.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Activity Monitoring</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-data-risk-analytics.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Risk Analytics</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-data-encryption.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Encryption & Tokenization</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-data-loss-prevention.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Loss Prevention</div>
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
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-data-access-control.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Access Control</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-data-discovery.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Discovery & Classification</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-cloud-data-security.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Cloud Native Data Security</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-data-masking.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Data Masking</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                                    <div class=\"megaTabCol2\">
                                                        <img src=\"{{ asset('build/images/report-cover-dsf.png') }}\">
                                                        <div class=\"report-download-button\">
                                                            <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">View Data Sheet<i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tab Pane Network Security -->

                                        <div class=\"tab-pane fade\" id=\"network-security\" role=\"tabpanel\" aria-labelledby=\"network-security-tab\">
                                            <div class=\"container\">
                                                <div class=\"megaTabCol0\">
                                                    <div class=\"megaTabHeader networksec\">
                                                        <div class=\"megaTabTitle networksec\">Network Protection Overview</div>
                                                        <div class=\"megaTabTitleText\">Imperva DDoS Protection secures all your assets at the edge for uninterrupted operation. Ensure business continuity with guaranteed uptime.</div>
                                                    </div>
                                                    <div class=\"megaTabCol1\">
                                                        <ul style=\"padding: 0;\">
                                                            <a href=\"#\">
                                                                <li class=\"megaTabSub\">
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-ddos.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">DDoS Protection</div>
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
                                                                    <img class=\"align-top\" src=\"{{ asset('build/images/logo-dns.svg') }}\">
                                                                    <div class=\"megaTabSubContainer\">
                                                                        <div class=\"megaTabSubtitle\">Managed DNS</div>
                                                                        <div class=\"megaTabSubtitleText\">Lorem ipsum es mit dolores, oren ipsum es mit dolores</div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        </ul>
                                                    </div>
                                                    <div class=\"megaTabCol2\">
                                                        <img src=\"{{ asset('build/images/report-cover-ddos.png') }}\">
                                                        <div class=\"report-download-button\">
                                                            <a href=\"#\"><button class=\"btn-imperva-gradient-1\" style=\"padding: 10px 20px;\">Get Featured Report<i class=\"bi bi-arrow-right-circle\"></i></button></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- End Products Mega Menu Tab Panes -->

                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-solutions hvr-underline-from-center\">Solutions</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-support hvr-underline-from-center\">Support</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-partners hvr-underline-from-center\">Partners</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-customers hvr-underline-from-center\">Customers</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-resources hvr-underline-from-center\">Resources</a></li>
                    <li class=\"nav-link nav-item dropdown\"><a href=\"#\" class=\"dropdown-link menu-company hvr-underline-from-center\">Company</a></li>
                </ul>
                <div class=\"my-2 my-lg-0\">
                    <button type=\"button\" class=\"btn-imperva-action float-right\">Free Trial</button>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasExample\" aria-labelledby=\"offcanvasExampleLabel\">
    <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">Offcanvas</h5>
        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">
        <div>
            Some text as placeholder. To do: create off-canvas menu
        </div>
    </div>
</div>
", "page_elements/main_nav.twig", "/Users/stephenyears/imperva_new/templates/page_elements/main_nav.twig");
    }
}
