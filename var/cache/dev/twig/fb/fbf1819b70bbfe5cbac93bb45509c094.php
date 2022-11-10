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

/* page_elements/product_portfolio.twig */
class __TwigTemplate_70f9aa64011d7594307361e8e97b3767 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/product_portfolio.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/product_portfolio.twig"));

        // line 1
        echo "<div class=\"container-fluid\" id=\"portfolio-container-fluid\">
    <section class=\"portfolio-wrapper\">
        <div class=\"container-xxl\" id=\"portfolio-container\">
            <div class=\"portfolio-title\">Comprehensive digital security</div>
            <div class=\"portfolio-subtitle\">We protect customers from cyber attacks through all stages of their digital transformation</div>

            <!-- Product Portfolio Navigation Tabs -->

            <div class=\"row product-row\">
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link active\" id=\"appsec-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#appsec\" role=\"tab\" aria-controls=\"appsec\" aria-selected=\"true\">
                                <div class=\"product-card appsec-product-card hvr-grow hvr-border-fade-appsec\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-application-security.svg\"></div>
                                    <div class=\"product-title\">Application<br />Security</div>
                                    <div class=\"product-text\">Automated protection for complex cloud native application architectures</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link\" id=\"networksec-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#networksec\" type=\"button\" role=\"tab\" aria-controls=\"networksec\" aria-selected=\"false\">
                                <div class=\"product-card networksec-product-card hvr-grow hvr-border-fade-networksec\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-network-security.svg\"></div>
                                    <div class=\"product-title\">Network<br />Security</div>
                                    <div class=\"product-text\">Availability accelerated by automation while protecting the network</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link\" id=\"datasec-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#datasec\" type=\"button\" role=\"tab\" aria-controls=\"datasec\" aria-selected=\"false\">
                                <div class=\"product-card datasec-product-card hvr-grow hvr-border-fade-datasec\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-data-security.svg\"></div>
                                    <div class=\"product-title\">Data<br />Security</div>
                                    <div class=\"product-text\">Data protection across multicloud, hybrid, and on-premises environments</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link\" id=\"cloudsec-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#cloudsec\" type=\"button\" role=\"tab\" aria-controls=\"cloudsec\" aria-selected=\"false\">
                                <div class=\"product-card cloudsec-product-card hvr-grow hvr-border-fade-cloudsec\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-cloud-security.svg\"></div>
                                    <div class=\"product-title\">Cloud Native<br />Security</div>
                                    <div class=\"product-text\">Cloud native technology to protect your business as it expands cloud operations</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link\" id=\"appperf-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#appperf\" type=\"button\" role=\"tab\" aria-controls=\"appperf\" aria-selected=\"false\">
                                <div class=\"product-card appperf-prodcut-card hvr-grow hvr-border-fade-appperf\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-application-performance.svg\"></div>
                                    <div class=\"product-title\">Application<br />Performance</div>
                                    <div class=\"product-text\">Automated protection for complex cloud native application architectures</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </section>
</div>
<div class=\"container-fluid\">
    <section>
        <div class=\"container-xxl\">

            <!-- Product Portfolio Information Panes -->

            <!-- Application Security -->

            <div class=\"tab-content\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"appsec\" role=\"tabpanel\" aria-labelledby=\"appsec-tab\">
                    <div class=\"container product-tab-content\">
                        <div class=\"row\">
                            <div class=\"col-md-6 tab-product-description appsec\">
                                <div class=\"product-tab-header appsec\">Imperva Application Security</div>
                                <div class=\"product-tab-title\">Protect from web to internal applications</div>
                                <p>Imperva protects modern and hybrid applications against advanced and multi-vector attacks regardless of where they are running.</p>
                                <ul>
                                    <li><strong>Replace 6+ point security products:</strong> One unified platform to protect against DDoS, bot, API, client-side, and supply chain attacks</li>
                                    <li><strong>Block with near-zero false positives:</strong> Over 90% of customers run in blocking mode to automatically protect without sacrifice</li>
                                    <li><strong>Respond faster across the enterprise:</strong> Adaptive control with hybrid deployments and managed services with threat research resources that extend your team</li>
                                    <li><strong>Deploy anywhere:</strong> Complete protection for applications regardless of whether they are on-premises, hybrid, or cloud-native</li>
                                </ul>
                                <div class=\"row\">
                                    <div class=\"col stat-container stat-container-appsec\">
                                        <div class=\"stat-number\">1.5T</div>
                                        <div class=\"stat-text\">requests analyzed per month</div>
                                    </div>
                                    <div class=\"col stat-container stat-container-appsec\">
                                        <div class=\"stat-number\">63B</div>
                                        <div class=\"stat-text\">attacks blocked per month</div>
                                    </div>
                                    <div class=\"col stat-container stat-container-appsec\">
                                        <div class=\"stat-number\">50+</div>
                                        <div class=\"stat-text\">distributed POPs</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-waf-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Web Application Firewall</h2>
                                            <p class=\"product-feature-text\">Maximize network and application availability with fast response to network and L7 DDoS attacks</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-client-side-protection-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Client Side Protection</h2>
                                            <p class=\"product-feature-text\">Prevent data theft from client-side attacks like formjacking, digital skimming, and Magecart</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-api-security-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">API Security</h2>
                                            <p class=\"product-feature-text\">Maximize network and application availability with fast response to network and L7 DDoS attacks</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-runtime-protection-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Runtime Protection</h2>
                                            <p class=\"product-feature-text\">Always on Zero Trust protection for applications</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-bot-protection-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Bot Protection</h2>
                                            <p class=\"product-feature-text\">Uninterrupted DNS resolution filters out bad traffic to only respond to legitimate requests</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-account-takeover-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Account Takeover</h2>
                                            <p class=\"product-feature-text\">Maximize network and application availability with fast response to network and L7 DDoS attacks</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Network Security -->

                <div class=\"tab-pane fade\" id=\"networksec\" role=\"tabpanel\" aria-labelledby=\"networksec-tab\">
                    <div class=\"container product-tab-content\">
                        <div class=\"row\">
                            <div class=\"col-md-6 tab-product-description networksec\">
                                <div class=\"product-tab-header networksec\">Imperva Network Security</div>
                                <div class=\"product-tab-title\">Availability accelerated by automation</div>
                                <p>Imperva speeds content delivery and protects against all manner of disruptive attacks to ensure high performance networks avoid disruption and are optimized for overall availability.</p>
                                <ul>
                                    <li><strong>Consistent network availability:</strong> Ensure faster connection speeds with machine learning for load balancing and failover</li>
                                    <li><strong>Fastest response to DDoS attacks:</strong> An industry-leading, 3-second SLA guarantees DDoS mitigation that minimizes the impact</li>
                                    <li><strong>Uninterrupted DNS resolution:</strong> Managed DNS and filtering out bad traffic to only respond to legitimate requests</li>
                                </ul>
                                <div class=\"row\">
                                    <div class=\"col stat-container stat-container-networksec\">
                                        <div class=\"stat-number\">91%</div>
                                        <div class=\"stat-text\">of organizations have experienced downtime from DDoS</div>
                                    </div>
                                    <div class=\"col stat-container stat-container-networksec\">
                                        <div class=\"stat-number\">60%</div>
                                        <div class=\"stat-text\">of all security incidents are denial of service</div>
                                    </div>
                                    <div class=\"col stat-container stat-container-networksec\">
                                        <div class=\"stat-number\">55%</div>
                                        <div class=\"stat-text\">of DDoS targets are hit more than once</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-ddos-dark.svg\">
                                            <h2 class=\"product-feature-title networksec\">DDoS Protection</h2>
                                            <p class=\"product-feature-text\">Maximize network and application availability with fast response to network and L7 DDoS attacks</p>
                                            <a class=\"product-learn-more networksec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-dns-dark.svg\">
                                            <h2 class=\"product-feature-title networksec\">Managed DNS</h2>
                                            <p class=\"product-feature-text\">Uninterrupted DNS resolution filters out bad traffic to only respond to legitimate requests</p>
                                            <a class=\"product-learn-more networksec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col md-6\">
                                        <div class=\"ddos-report\">
                                            <img src=\"/build/images/report-cover-ddos.webp\">
                                            <p>A quarterly summary of distributed denial of service (DDoS) attack activity as monitored and mitigated by Imperva during the first quarter 2022</p>
                                            <a class=\"product-learn-more networksec\" href=\"#\">Read the report <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Security -->

                <div class=\"tab-pane fade show\" id=\"datasec\" role=\"tabpanel\" aria-labelledby=\"datasec-tab\">
                    <div class=\"container product-tab-content\">
                        <div class=\"row\">
                            <div class=\"col-md-6 tab-product-description datasec\">
                                <div class=\"product-tab-header datasec\">Imperva Data Security</div>
                                <div class=\"product-tab-title\">Imperva Data Security Fabric is the first enterprise-scale, multicloud hybrid solution to protect all data types</div>
                                <p>Imperva Data Security Fabric (DSF) protects your data by augmenting traditional enterprise security approaches with controls for the
                                    data itself, to drive policy compliant data handling behavior, and help security staff pinpoint and mitigate data threats before they
                                    become damaging events.</p>
                                <ul>
                                    <li><strong>Broadest coverage:</strong> Provides broadest coverage across multicloud, hybrid, and on-premises environments</li>
                                    <li><strong>Protects any data source:</strong> Protects any data sources and types, across structured, semi-structured, & unstructured</li>
                                    <li><strong>Seamless ecosystem integration:</strong> Integrates with ecosystem technologies for both incident context and additional data capabilities</li>
                                    <li><strong>Unified, scalable service/ dashboard:</strong> Unifies visibility, control, automation & insights via a single data service or dashboard</li>
                                </ul>
                            <div class=\"row\">
                                <div class=\"col stat-container stat-container-datasec\">
                                    <div class=\"stat-number\">500K</div>
                                    <div class=\"stat-text\">databses under protection</div>
                                </div>
                                <div class=\"col stat-container stat-container-datasec\">
                                    <div class=\"stat-number\">25M</div>
                                    <div class=\"stat-text\">hours of customer admin time saved annually</div>
                                </div>
                                <div class=\"col stat-container stat-container-datasec\">
                                    <div class=\"stat-number\">19M</div>
                                    <div class=\"stat-text\">alerts reduced per day</div>
                                </div>
                            </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-activity-monitoring-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Activity Monitoring</h2>
                                            <p class=\"product-feature-text\">Identify and report unauthorized behavior without impacting operations or productivity</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-access-control-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Access Control</h2>
                                            <p class=\"product-feature-text\">Continuous monitoring of who’s accessing your sensitive data and what they’re doing with it</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-risk-analytics-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Risk Analytics</h2>
                                            <p class=\"product-feature-text\">Detect anomalous behavior, data exfiltration, non-standard access times, suspicious account creation, and more</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-discovery-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Discovery & Classification</h2>
                                            <p class=\"product-feature-text\">Discover ungoverned data, classify all data, and assess vulnerabilities</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-encryption-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Encryption, Tokenization</h2>
                                            <p class=\"product-feature-text\">Encrypt all of your data stores or use tokenized data for development</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-cloud-data-security-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Cloud Native Data Security</h2>
                                            <p class=\"product-feature-text\">Ensure that your data is secure in the cloud - no matter the scale or topology</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-loss-prevention-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Loss Prevention</h2>
                                            <p class=\"product-feature-text\">Proactively protect the confidentiality, integrity, and availability of business data</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-masking-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Masking</h2>
                                            <p class=\"product-feature-text\">Remove risk of exposed data across distributed environments – non-production and production</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more<i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud Native Security -->

                    <div class=\"tab-pane fade\" id=\"cloudsec\" role=\"tabpanel\" aria-labelledby=\"cloudsec-tab\">Hello World 4</div>

                    <!-- Application Performane -->

                    <div class=\"tab-pane fade\" id=\"appperf\" role=\"tabpanel\" aria-labelledby=\"appperf-tab\">Hello World 5</div>

            </div>
        </div>
    </section>
</div>


";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_elements/product_portfolio.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container-fluid\" id=\"portfolio-container-fluid\">
    <section class=\"portfolio-wrapper\">
        <div class=\"container-xxl\" id=\"portfolio-container\">
            <div class=\"portfolio-title\">Comprehensive digital security</div>
            <div class=\"portfolio-subtitle\">We protect customers from cyber attacks through all stages of their digital transformation</div>

            <!-- Product Portfolio Navigation Tabs -->

            <div class=\"row product-row\">
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link active\" id=\"appsec-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#appsec\" role=\"tab\" aria-controls=\"appsec\" aria-selected=\"true\">
                                <div class=\"product-card appsec-product-card hvr-grow hvr-border-fade-appsec\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-application-security.svg\"></div>
                                    <div class=\"product-title\">Application<br />Security</div>
                                    <div class=\"product-text\">Automated protection for complex cloud native application architectures</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link\" id=\"networksec-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#networksec\" type=\"button\" role=\"tab\" aria-controls=\"networksec\" aria-selected=\"false\">
                                <div class=\"product-card networksec-product-card hvr-grow hvr-border-fade-networksec\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-network-security.svg\"></div>
                                    <div class=\"product-title\">Network<br />Security</div>
                                    <div class=\"product-text\">Availability accelerated by automation while protecting the network</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link\" id=\"datasec-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#datasec\" type=\"button\" role=\"tab\" aria-controls=\"datasec\" aria-selected=\"false\">
                                <div class=\"product-card datasec-product-card hvr-grow hvr-border-fade-datasec\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-data-security.svg\"></div>
                                    <div class=\"product-title\">Data<br />Security</div>
                                    <div class=\"product-text\">Data protection across multicloud, hybrid, and on-premises environments</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link\" id=\"cloudsec-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#cloudsec\" type=\"button\" role=\"tab\" aria-controls=\"cloudsec\" aria-selected=\"false\">
                                <div class=\"product-card cloudsec-product-card hvr-grow hvr-border-fade-cloudsec\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-cloud-security.svg\"></div>
                                    <div class=\"product-title\">Cloud Native<br />Security</div>
                                    <div class=\"product-text\">Cloud native technology to protect your business as it expands cloud operations</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                    <div class=\"col-md-20percent\">
                        <li class=\"nav-item\" role=\"presentation\">
                            <div class=\"nav-link\" id=\"appperf-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#appperf\" type=\"button\" role=\"tab\" aria-controls=\"appperf\" aria-selected=\"false\">
                                <div class=\"product-card appperf-prodcut-card hvr-grow hvr-border-fade-appperf\">
                                    <div class=\"product-icon\"><img src=\"build/images/logo-application-performance.svg\"></div>
                                    <div class=\"product-title\">Application<br />Performance</div>
                                    <div class=\"product-text\">Automated protection for complex cloud native application architectures</div>
                                    <a class=\"product-learn-more neutral\">Learn More <i class=\"bi bi-arrow-down\"></i></a>
                                </div>
                            </div>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </section>
</div>
<div class=\"container-fluid\">
    <section>
        <div class=\"container-xxl\">

            <!-- Product Portfolio Information Panes -->

            <!-- Application Security -->

            <div class=\"tab-content\" id=\"myTabContent\">
                <div class=\"tab-pane fade show active\" id=\"appsec\" role=\"tabpanel\" aria-labelledby=\"appsec-tab\">
                    <div class=\"container product-tab-content\">
                        <div class=\"row\">
                            <div class=\"col-md-6 tab-product-description appsec\">
                                <div class=\"product-tab-header appsec\">Imperva Application Security</div>
                                <div class=\"product-tab-title\">Protect from web to internal applications</div>
                                <p>Imperva protects modern and hybrid applications against advanced and multi-vector attacks regardless of where they are running.</p>
                                <ul>
                                    <li><strong>Replace 6+ point security products:</strong> One unified platform to protect against DDoS, bot, API, client-side, and supply chain attacks</li>
                                    <li><strong>Block with near-zero false positives:</strong> Over 90% of customers run in blocking mode to automatically protect without sacrifice</li>
                                    <li><strong>Respond faster across the enterprise:</strong> Adaptive control with hybrid deployments and managed services with threat research resources that extend your team</li>
                                    <li><strong>Deploy anywhere:</strong> Complete protection for applications regardless of whether they are on-premises, hybrid, or cloud-native</li>
                                </ul>
                                <div class=\"row\">
                                    <div class=\"col stat-container stat-container-appsec\">
                                        <div class=\"stat-number\">1.5T</div>
                                        <div class=\"stat-text\">requests analyzed per month</div>
                                    </div>
                                    <div class=\"col stat-container stat-container-appsec\">
                                        <div class=\"stat-number\">63B</div>
                                        <div class=\"stat-text\">attacks blocked per month</div>
                                    </div>
                                    <div class=\"col stat-container stat-container-appsec\">
                                        <div class=\"stat-number\">50+</div>
                                        <div class=\"stat-text\">distributed POPs</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-waf-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Web Application Firewall</h2>
                                            <p class=\"product-feature-text\">Maximize network and application availability with fast response to network and L7 DDoS attacks</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-client-side-protection-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Client Side Protection</h2>
                                            <p class=\"product-feature-text\">Prevent data theft from client-side attacks like formjacking, digital skimming, and Magecart</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-api-security-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">API Security</h2>
                                            <p class=\"product-feature-text\">Maximize network and application availability with fast response to network and L7 DDoS attacks</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-runtime-protection-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Runtime Protection</h2>
                                            <p class=\"product-feature-text\">Always on Zero Trust protection for applications</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-bot-protection-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Bot Protection</h2>
                                            <p class=\"product-feature-text\">Uninterrupted DNS resolution filters out bad traffic to only respond to legitimate requests</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-account-takeover-dark.svg\">
                                            <h2 class=\"product-feature-title appsec\">Account Takeover</h2>
                                            <p class=\"product-feature-text\">Maximize network and application availability with fast response to network and L7 DDoS attacks</p>
                                            <a class=\"product-learn-more appsec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Network Security -->

                <div class=\"tab-pane fade\" id=\"networksec\" role=\"tabpanel\" aria-labelledby=\"networksec-tab\">
                    <div class=\"container product-tab-content\">
                        <div class=\"row\">
                            <div class=\"col-md-6 tab-product-description networksec\">
                                <div class=\"product-tab-header networksec\">Imperva Network Security</div>
                                <div class=\"product-tab-title\">Availability accelerated by automation</div>
                                <p>Imperva speeds content delivery and protects against all manner of disruptive attacks to ensure high performance networks avoid disruption and are optimized for overall availability.</p>
                                <ul>
                                    <li><strong>Consistent network availability:</strong> Ensure faster connection speeds with machine learning for load balancing and failover</li>
                                    <li><strong>Fastest response to DDoS attacks:</strong> An industry-leading, 3-second SLA guarantees DDoS mitigation that minimizes the impact</li>
                                    <li><strong>Uninterrupted DNS resolution:</strong> Managed DNS and filtering out bad traffic to only respond to legitimate requests</li>
                                </ul>
                                <div class=\"row\">
                                    <div class=\"col stat-container stat-container-networksec\">
                                        <div class=\"stat-number\">91%</div>
                                        <div class=\"stat-text\">of organizations have experienced downtime from DDoS</div>
                                    </div>
                                    <div class=\"col stat-container stat-container-networksec\">
                                        <div class=\"stat-number\">60%</div>
                                        <div class=\"stat-text\">of all security incidents are denial of service</div>
                                    </div>
                                    <div class=\"col stat-container stat-container-networksec\">
                                        <div class=\"stat-number\">55%</div>
                                        <div class=\"stat-text\">of DDoS targets are hit more than once</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-ddos-dark.svg\">
                                            <h2 class=\"product-feature-title networksec\">DDoS Protection</h2>
                                            <p class=\"product-feature-text\">Maximize network and application availability with fast response to network and L7 DDoS attacks</p>
                                            <a class=\"product-learn-more networksec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-dns-dark.svg\">
                                            <h2 class=\"product-feature-title networksec\">Managed DNS</h2>
                                            <p class=\"product-feature-text\">Uninterrupted DNS resolution filters out bad traffic to only respond to legitimate requests</p>
                                            <a class=\"product-learn-more networksec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col md-6\">
                                        <div class=\"ddos-report\">
                                            <img src=\"/build/images/report-cover-ddos.webp\">
                                            <p>A quarterly summary of distributed denial of service (DDoS) attack activity as monitored and mitigated by Imperva during the first quarter 2022</p>
                                            <a class=\"product-learn-more networksec\" href=\"#\">Read the report <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Data Security -->

                <div class=\"tab-pane fade show\" id=\"datasec\" role=\"tabpanel\" aria-labelledby=\"datasec-tab\">
                    <div class=\"container product-tab-content\">
                        <div class=\"row\">
                            <div class=\"col-md-6 tab-product-description datasec\">
                                <div class=\"product-tab-header datasec\">Imperva Data Security</div>
                                <div class=\"product-tab-title\">Imperva Data Security Fabric is the first enterprise-scale, multicloud hybrid solution to protect all data types</div>
                                <p>Imperva Data Security Fabric (DSF) protects your data by augmenting traditional enterprise security approaches with controls for the
                                    data itself, to drive policy compliant data handling behavior, and help security staff pinpoint and mitigate data threats before they
                                    become damaging events.</p>
                                <ul>
                                    <li><strong>Broadest coverage:</strong> Provides broadest coverage across multicloud, hybrid, and on-premises environments</li>
                                    <li><strong>Protects any data source:</strong> Protects any data sources and types, across structured, semi-structured, & unstructured</li>
                                    <li><strong>Seamless ecosystem integration:</strong> Integrates with ecosystem technologies for both incident context and additional data capabilities</li>
                                    <li><strong>Unified, scalable service/ dashboard:</strong> Unifies visibility, control, automation & insights via a single data service or dashboard</li>
                                </ul>
                            <div class=\"row\">
                                <div class=\"col stat-container stat-container-datasec\">
                                    <div class=\"stat-number\">500K</div>
                                    <div class=\"stat-text\">databses under protection</div>
                                </div>
                                <div class=\"col stat-container stat-container-datasec\">
                                    <div class=\"stat-number\">25M</div>
                                    <div class=\"stat-text\">hours of customer admin time saved annually</div>
                                </div>
                                <div class=\"col stat-container stat-container-datasec\">
                                    <div class=\"stat-number\">19M</div>
                                    <div class=\"stat-text\">alerts reduced per day</div>
                                </div>
                            </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-activity-monitoring-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Activity Monitoring</h2>
                                            <p class=\"product-feature-text\">Identify and report unauthorized behavior without impacting operations or productivity</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-access-control-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Access Control</h2>
                                            <p class=\"product-feature-text\">Continuous monitoring of who’s accessing your sensitive data and what they’re doing with it</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-risk-analytics-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Risk Analytics</h2>
                                            <p class=\"product-feature-text\">Detect anomalous behavior, data exfiltration, non-standard access times, suspicious account creation, and more</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-discovery-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Discovery & Classification</h2>
                                            <p class=\"product-feature-text\">Discover ungoverned data, classify all data, and assess vulnerabilities</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-encryption-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Encryption, Tokenization</h2>
                                            <p class=\"product-feature-text\">Encrypt all of your data stores or use tokenized data for development</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-cloud-data-security-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Cloud Native Data Security</h2>
                                            <p class=\"product-feature-text\">Ensure that your data is secure in the cloud - no matter the scale or topology</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-loss-prevention-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Loss Prevention</h2>
                                            <p class=\"product-feature-text\">Proactively protect the confidentiality, integrity, and availability of business data</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more <i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                    <div class=\"col-md-6\">
                                        <div class=\"product-feature\">
                                            <img class=\"product-feature-icon\" src=\"/build/images/logo-data-masking-dark.svg\">
                                            <h2 class=\"product-feature-title datasec\">Data Masking</h2>
                                            <p class=\"product-feature-text\">Remove risk of exposed data across distributed environments – non-production and production</p>
                                            <a class=\"product-learn-more datasec\" href=\"#\">Learn more<i class=\"bi-arrow-right\"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Cloud Native Security -->

                    <div class=\"tab-pane fade\" id=\"cloudsec\" role=\"tabpanel\" aria-labelledby=\"cloudsec-tab\">Hello World 4</div>

                    <!-- Application Performane -->

                    <div class=\"tab-pane fade\" id=\"appperf\" role=\"tabpanel\" aria-labelledby=\"appperf-tab\">Hello World 5</div>

            </div>
        </div>
    </section>
</div>


", "page_elements/product_portfolio.twig", "/Users/stephenyears/imperva_new/templates/page_elements/product_portfolio.twig");
    }
}
