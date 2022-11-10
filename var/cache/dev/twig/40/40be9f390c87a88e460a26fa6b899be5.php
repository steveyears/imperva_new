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

/* page_elements/articles_promo.twig */
class __TwigTemplate_22fcb93f7584d17f4a1bb1aee7d60ce6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/articles_promo.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/articles_promo.twig"));

        // line 1
        echo "<div class=\"container-fluid articles-promo\">
    <div class=\"container card-holder\">
        <div class=\"articles-promo-title\">
            <span class=\"insights\">Insights</span>/ From the blog and beyond
        </div>
        <div class=\"scrolling-learn-articles\">
            <div class=\"article-card\">
                <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/article-8-cover.webp"), "html", null, true);
        echo "\">
                <div class=\"article-text\">
                    <h3>Simplifying Data Security In Modern Multi And Hybrid Cloud Environments</h3>
                    <p>To increase the value of raw logs, many organizations implement Imperva Data Security Fabric (DSF) as a database log pre-processor to Splunk. </p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/article-1-cover.webp"), "html", null, true);
        echo "\">
                <div class=\"article-text\">
                    <h3>Data-Centric CyberSecurity Framework for Digital Transformation</h3>
                    <p>Building on the National Institute of Standards and Technology’s (NIST) CyberSecurity framework, this whitepaper proposes a security and compliance framework for cloud data. </p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/article-9-cover.webp"), "html", null, true);
        echo "\">
                <div class=\"article-text\">
                    <h3>Imperva Data Security Fabric Unstructured Data Discover and Classify</h3>
                    <p>Most organizations have very little insight into the unstructured data for which they are responsible to secure, or what risk exposure the data presents. Imperva is changing this.</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/article-7-cover.webp"), "html", null, true);
        echo "\">
                <div class=\"article-text\">
                    <h3>Lessons Learned from Analyzing 100 Data Breaches</h3>
                    <p>Imperva’s Threat Research Team continuously analyzes data breaches in real time to help you secure data more effectively in your organization’s on-premise and cloud-managed infrastructures. </p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/article-4-cover.webp"), "html", null, true);
        echo "\">
                <div class=\"article-text\">
                    <h3>Protect your Oracle Cloud Infrastructure (OCI) compute resources and data with Imperva</h3>
                    <p>Oracle Cloud Infrastructure (OCI) technologies and capabilities have transformed the way organizations build, deploy, and scale their applications and data</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/article-5-cover.webp"), "html", null, true);
        echo "\">
                <div class=\"article-text\">
                    <h3>Splunk Optimization and Cost Savings using Imperva Data Security Fabric</h3>
                    <p>Building on the National Institute of Standards and Technology’s (NIST) CyberSecurity framework, this whitepaper proposes a security and compliance framework for cloud data. This comprehensive framework includes:</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/article-3-cover.webp"), "html", null, true);
        echo "\">
                <div class=\"article-text\">
                    <h3>How to Create a Data Security Strategy When Moving Workloads to the Cloud</h3>
                    <p>Gartner reports 84% of organizations say traditional security solutions don’t work in cloud environments. How can organizations ensure data security when moving workloads to the cloud?</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/article-6-cover.webp"), "html", null, true);
        echo "\">
                <div class=\"article-text\">
                    <h3>Imperva Data Security Fabric Unstructured Data Discover and Classify</h3>
                    <p>Most organizations have very little insight into the unstructured data for which they are responsible to secure, or what risk exposure the data presents. Imperva is changing this.</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/article-2-cover.webp"), "html", null, true);
        echo "\">
                <div class=\"article-text\">
                    <h3>Control Peak Traffic and Access to Your Website with a Virtual Waiting Room</h3>
                    <p>If you're a service that deals with sensitive information, you need to control peak traffic safely and securely. </p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
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
        return "page_elements/articles_promo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 72,  129 => 64,  118 => 56,  107 => 48,  96 => 40,  85 => 32,  74 => 24,  63 => 16,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid articles-promo\">
    <div class=\"container card-holder\">
        <div class=\"articles-promo-title\">
            <span class=\"insights\">Insights</span>/ From the blog and beyond
        </div>
        <div class=\"scrolling-learn-articles\">
            <div class=\"article-card\">
                <img src=\"{{ asset('build/images/article-8-cover.webp') }}\">
                <div class=\"article-text\">
                    <h3>Simplifying Data Security In Modern Multi And Hybrid Cloud Environments</h3>
                    <p>To increase the value of raw logs, many organizations implement Imperva Data Security Fabric (DSF) as a database log pre-processor to Splunk. </p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"{{ asset('build/images/article-1-cover.webp') }}\">
                <div class=\"article-text\">
                    <h3>Data-Centric CyberSecurity Framework for Digital Transformation</h3>
                    <p>Building on the National Institute of Standards and Technology’s (NIST) CyberSecurity framework, this whitepaper proposes a security and compliance framework for cloud data. </p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"{{ asset('build/images/article-9-cover.webp') }}\">
                <div class=\"article-text\">
                    <h3>Imperva Data Security Fabric Unstructured Data Discover and Classify</h3>
                    <p>Most organizations have very little insight into the unstructured data for which they are responsible to secure, or what risk exposure the data presents. Imperva is changing this.</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"{{ asset('build/images/article-7-cover.webp') }}\">
                <div class=\"article-text\">
                    <h3>Lessons Learned from Analyzing 100 Data Breaches</h3>
                    <p>Imperva’s Threat Research Team continuously analyzes data breaches in real time to help you secure data more effectively in your organization’s on-premise and cloud-managed infrastructures. </p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"{{ asset('build/images/article-4-cover.webp') }}\">
                <div class=\"article-text\">
                    <h3>Protect your Oracle Cloud Infrastructure (OCI) compute resources and data with Imperva</h3>
                    <p>Oracle Cloud Infrastructure (OCI) technologies and capabilities have transformed the way organizations build, deploy, and scale their applications and data</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"{{ asset('build/images/article-5-cover.webp') }}\">
                <div class=\"article-text\">
                    <h3>Splunk Optimization and Cost Savings using Imperva Data Security Fabric</h3>
                    <p>Building on the National Institute of Standards and Technology’s (NIST) CyberSecurity framework, this whitepaper proposes a security and compliance framework for cloud data. This comprehensive framework includes:</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"{{ asset('build/images/article-3-cover.webp') }}\">
                <div class=\"article-text\">
                    <h3>How to Create a Data Security Strategy When Moving Workloads to the Cloud</h3>
                    <p>Gartner reports 84% of organizations say traditional security solutions don’t work in cloud environments. How can organizations ensure data security when moving workloads to the cloud?</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"{{ asset('build/images/article-6-cover.webp') }}\">
                <div class=\"article-text\">
                    <h3>Imperva Data Security Fabric Unstructured Data Discover and Classify</h3>
                    <p>Most organizations have very little insight into the unstructured data for which they are responsible to secure, or what risk exposure the data presents. Imperva is changing this.</p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
            <div class=\"article-card\">
                <img src=\"{{ asset('build/images/article-2-cover.webp') }}\">
                <div class=\"article-text\">
                    <h3>Control Peak Traffic and Access to Your Website with a Virtual Waiting Room</h3>
                    <p>If you're a service that deals with sensitive information, you need to control peak traffic safely and securely. </p>
                    <a href=\"#\" class=\"product-learn-more\">Read more <i class=\"bi bi-arrow-right\"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
", "page_elements/articles_promo.twig", "/Users/stephenyears/imperva_new/templates/page_elements/articles_promo.twig");
    }
}
