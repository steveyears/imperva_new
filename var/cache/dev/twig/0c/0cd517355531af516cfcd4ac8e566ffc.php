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

/* page_elements/home-page-carousel.twig */
class __TwigTemplate_5f41577ba2271bc8b553c2f017d59c20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/home-page-carousel.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page_elements/home-page-carousel.twig"));

        // line 1
        echo "<style>
    @media screen and (max-width: 992px) {
        .carousel-inner {
            max-height: 700px;
        }

        #slide-text {
            top: 110px;
        }

        #slide-text h1 {
            font-size: 2.6em;
        }

        #slide-text h2 {
            font-size: 1.5em;
        }

        #slide-test p {
            font-size: 1em;
        }

        #slide-img {
            position: absolute;;
            top: 30px;
            left: 60%;
            width: 39%;
            z-index: 99999999;
            text-align: right;
        }

        .cdn-logo{
            width: 300px;
            height: auto;
        }

        .slide-dsf-logo {
            width: 200px;
            height: auto;
        }

        .waiting-room {
            width: 300px;
            height: auto;
        }

        .attack-analytics {
            width: 200px;
            height: auto;
        }

        .waaf-image {
            width: 240px;
            height: auto;
            padding-top: 100px;
        }

    }
</style>


<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"9200\">
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
    </ol>
    <div class=\"carousel-inner\">

        <!-- Slide 1 -->

        <div class=\"carousel-item active\">
            <div class=\"bg-video-wrap\">
                <div class=\"container\" id=\"slide-text-container\">
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                        <h1>Data Security Fabric</h1>
                        <h2>The first enterprise-scale, multicloud, hybrid solution to protect all data types</h2>
                        <p>Imperva® Data Security Fabric is the first data-centric solution that enables security and compliance teams to quickly and easily secure sensitive data no matter where it resides with an integrated, proactive approach to visibility and predictive analytics</p>
                        <button class=\"btn-imperva-gradient-big\">Learn More <i class=\"bi bi-arrow-right-circle\"></i></button>
                    </div>
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                        <img class=\"slide-dsf-logo\" src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-data-security-fabric-white.svg"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <video preload=\"none\"  class=\"bg-video\" id=\"carousel-video\" autoplay muted playsinline loop>
                    <source src=\"/build/videos/vid_background_1.mp4\" type=\"video/mp4\">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        </div>

        <!-- Slide 2 -->

        <div class=\"carousel-item\">
            <div class=\"container\" id=\"slide-text-container\">
                <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                    <h1>Content Accelerated</h1>
                    <h2>The Imperva® Content Delivery Network (CDN) improves website experience globally</h2>
                    <p>The Imperva Content Delivery Network (CDN) offers the best in speed, performance, and resilience by building content caching, load balancing, and failover into a comprehensive Web Application and API Protection (WAAP) platform to securely deliver your applications across the globe</p>
                    <button class=\"btn-imperva-gradient-big\">Free Trial <i class=\"bi bi-arrow-right-circle\"></i></button>
                </div>
                <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                    <img class=\"cdn-logo\" src=\"build/images/slide-image-cdn-icon.png\">
                </div>
            </div>
            <img class=\"d-block w-100\" src=\"/build/images/slide-bg-cdn.png\">
        </div>

        <!-- Slide 3 -->

        <div class=\"carousel-item\">
            <div class=\"bg-video-wrap-2\">
                <div class=\"container\" id=\"slide-text-container\">
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                        <h1>Imperva Waiting Room</h1>
                        <h2>Control web traffic for a better customer experience</h2>
                        <p>Waiting Room enables you to control visitor traffic during peak periods or when your site is undergoing maintenance, by placing your customers into a first-in-first-out virtual queuing system, updated with their estimated remaining wait time, where they remain until it is their turn to access your website</p>
                        <button class=\"btn-imperva-gradient-big\">Learn More <i class=\"bi bi-arrow-right-circle\"></i></button>
                    </div>
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                        <img class=\"waiting-room\" src=\"build/images/logo-waiting-room.svg\"><!-- Image Placeholder -->
                    </div>
                </div>
                <video preload=\"none\"  class=\"bg-video\" id=\"carousel-video-2\" autoplay muted playsinline loop>
                    <source src=\"/build/videos/vid_background.mp4\" type=\"video/mp4\">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        </div>

        <!-- Slide 4 -->

        <div class=\"carousel-item\">
            <div class=\"container\" id=\"slide-text-container\">
                <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\"  style=\"animation-delay: .1s;\">
                    <h1>The Right WAAP Solution</h1>
                    <h2>Join our webinar with WAAP experts to learn why</h2>
                    <p>Join Peter Klimek Director of Technology, Office of the CTO, and Luke Babarinde, Principal Architect, as they discuss why WAAP is the modern way to think about application security and how to adopt this into your security strategy</p>
                    <button class=\"btn-imperva-gradient-big\">Register Now <i class=\"bi bi-arrow-right-circle\"></i></button>
                </div>
                <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                    <img class=\"waaf-image\" src=\"build/images/slide-image-waaf.png.webp\">
                </div>
            </div>
            <img class=\"d-block w-100\" src=\"/build/images/slide-bg-waap.png\" alt=\"Second slide\">
        </div>

        <!-- Slide 5 -->

        <div class=\"carousel-item\">
            <div class=\"bg-video-wrap-3\">
                <div class=\"container\" id=\"slide-text-container\">
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                        <h1>Attack Analytics</h1>
                        <h2>Analyze millions of security events with Imperva artifical intelligence</h2>
                        <p>Imperva Attack Analytics detects application attacks by applying machine learning and domain expertise across the application security stack to reveal patterns in the noise - grouping security events into clusters of narratives so teams can quickly investigate</p>
                        <button class=\"btn-imperva-gradient-big\">Learn More <i class=\"bi bi-arrow-right-circle\"></i></button>
                    </div>
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                        <img class=\"attack-analytics\" src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/logo-attack-analytics-white.svg"), "html", null, true);
        echo "\">
                    </div>
                </div>
                <video preload=\"none\"  class=\"bg-video\" id=\"carousel-video-3\" autoplay muted playsinline loop>
                    <source src=\"/build/videos/vid_background_2.mp4\" type=\"video/mp4\">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        </div>

        <!-- End Slides -->

    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "page_elements/home-page-carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 161,  127 => 83,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    @media screen and (max-width: 992px) {
        .carousel-inner {
            max-height: 700px;
        }

        #slide-text {
            top: 110px;
        }

        #slide-text h1 {
            font-size: 2.6em;
        }

        #slide-text h2 {
            font-size: 1.5em;
        }

        #slide-test p {
            font-size: 1em;
        }

        #slide-img {
            position: absolute;;
            top: 30px;
            left: 60%;
            width: 39%;
            z-index: 99999999;
            text-align: right;
        }

        .cdn-logo{
            width: 300px;
            height: auto;
        }

        .slide-dsf-logo {
            width: 200px;
            height: auto;
        }

        .waiting-room {
            width: 300px;
            height: auto;
        }

        .attack-analytics {
            width: 200px;
            height: auto;
        }

        .waaf-image {
            width: 240px;
            height: auto;
            padding-top: 100px;
        }

    }
</style>


<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\" data-interval=\"9200\">
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
    </ol>
    <div class=\"carousel-inner\">

        <!-- Slide 1 -->

        <div class=\"carousel-item active\">
            <div class=\"bg-video-wrap\">
                <div class=\"container\" id=\"slide-text-container\">
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                        <h1>Data Security Fabric</h1>
                        <h2>The first enterprise-scale, multicloud, hybrid solution to protect all data types</h2>
                        <p>Imperva® Data Security Fabric is the first data-centric solution that enables security and compliance teams to quickly and easily secure sensitive data no matter where it resides with an integrated, proactive approach to visibility and predictive analytics</p>
                        <button class=\"btn-imperva-gradient-big\">Learn More <i class=\"bi bi-arrow-right-circle\"></i></button>
                    </div>
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                        <img class=\"slide-dsf-logo\" src=\"{{ asset('build/images/logo-data-security-fabric-white.svg') }}\">
                    </div>
                </div>
                <video preload=\"none\"  class=\"bg-video\" id=\"carousel-video\" autoplay muted playsinline loop>
                    <source src=\"/build/videos/vid_background_1.mp4\" type=\"video/mp4\">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        </div>

        <!-- Slide 2 -->

        <div class=\"carousel-item\">
            <div class=\"container\" id=\"slide-text-container\">
                <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                    <h1>Content Accelerated</h1>
                    <h2>The Imperva® Content Delivery Network (CDN) improves website experience globally</h2>
                    <p>The Imperva Content Delivery Network (CDN) offers the best in speed, performance, and resilience by building content caching, load balancing, and failover into a comprehensive Web Application and API Protection (WAAP) platform to securely deliver your applications across the globe</p>
                    <button class=\"btn-imperva-gradient-big\">Free Trial <i class=\"bi bi-arrow-right-circle\"></i></button>
                </div>
                <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                    <img class=\"cdn-logo\" src=\"build/images/slide-image-cdn-icon.png\">
                </div>
            </div>
            <img class=\"d-block w-100\" src=\"/build/images/slide-bg-cdn.png\">
        </div>

        <!-- Slide 3 -->

        <div class=\"carousel-item\">
            <div class=\"bg-video-wrap-2\">
                <div class=\"container\" id=\"slide-text-container\">
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                        <h1>Imperva Waiting Room</h1>
                        <h2>Control web traffic for a better customer experience</h2>
                        <p>Waiting Room enables you to control visitor traffic during peak periods or when your site is undergoing maintenance, by placing your customers into a first-in-first-out virtual queuing system, updated with their estimated remaining wait time, where they remain until it is their turn to access your website</p>
                        <button class=\"btn-imperva-gradient-big\">Learn More <i class=\"bi bi-arrow-right-circle\"></i></button>
                    </div>
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                        <img class=\"waiting-room\" src=\"build/images/logo-waiting-room.svg\"><!-- Image Placeholder -->
                    </div>
                </div>
                <video preload=\"none\"  class=\"bg-video\" id=\"carousel-video-2\" autoplay muted playsinline loop>
                    <source src=\"/build/videos/vid_background.mp4\" type=\"video/mp4\">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        </div>

        <!-- Slide 4 -->

        <div class=\"carousel-item\">
            <div class=\"container\" id=\"slide-text-container\">
                <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\"  style=\"animation-delay: .1s;\">
                    <h1>The Right WAAP Solution</h1>
                    <h2>Join our webinar with WAAP experts to learn why</h2>
                    <p>Join Peter Klimek Director of Technology, Office of the CTO, and Luke Babarinde, Principal Architect, as they discuss why WAAP is the modern way to think about application security and how to adopt this into your security strategy</p>
                    <button class=\"btn-imperva-gradient-big\">Register Now <i class=\"bi bi-arrow-right-circle\"></i></button>
                </div>
                <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                    <img class=\"waaf-image\" src=\"build/images/slide-image-waaf.png.webp\">
                </div>
            </div>
            <img class=\"d-block w-100\" src=\"/build/images/slide-bg-waap.png\" alt=\"Second slide\">
        </div>

        <!-- Slide 5 -->

        <div class=\"carousel-item\">
            <div class=\"bg-video-wrap-3\">
                <div class=\"container\" id=\"slide-text-container\">
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-text\" style=\"animation-delay: .1s;\">
                        <h1>Attack Analytics</h1>
                        <h2>Analyze millions of security events with Imperva artifical intelligence</h2>
                        <p>Imperva Attack Analytics detects application attacks by applying machine learning and domain expertise across the application security stack to reveal patterns in the noise - grouping security events into clusters of narratives so teams can quickly investigate</p>
                        <button class=\"btn-imperva-gradient-big\">Learn More <i class=\"bi bi-arrow-right-circle\"></i></button>
                    </div>
                    <div class=\"animate__animated animate__slideInRight\" id=\"slide-img\">
                        <img class=\"attack-analytics\" src=\"{{ asset('build/images/logo-attack-analytics-white.svg') }}\">
                    </div>
                </div>
                <video preload=\"none\"  class=\"bg-video\" id=\"carousel-video-3\" autoplay muted playsinline loop>
                    <source src=\"/build/videos/vid_background_2.mp4\" type=\"video/mp4\">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        </div>

        <!-- End Slides -->

    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
", "page_elements/home-page-carousel.twig", "/Users/stephenyears/imperva_new/templates/page_elements/home-page-carousel.twig");
    }
}
