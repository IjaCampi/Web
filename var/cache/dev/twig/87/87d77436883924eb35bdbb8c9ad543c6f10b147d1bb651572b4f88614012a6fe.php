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

/* front.html.twig */
class __TwigTemplate_c179068405644151bf73d37623f2eb9f695d587c12a6a43f300a5c819d3e9123 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Montana</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/favicon.png"), "html", null, true);
        echo "\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/magnific-popup.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/themify-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/nice-select.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/gijgo.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/slicknav.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/css/style.css"), "html", null, true);
        echo "\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class=\"header-area \">
        <div id=\"sticky-header\" class=\"main-header-area\">
            <div class=\"container-fluid p-0\">
                <div class=\"row align-items-center no-gutters\">
                    <div class=\"col-xl-5 col-lg-6\">
                        <div class=\"main-menu  d-none d-lg-block\">
                            <nav>
                                <ul id=\"navigation\">
                                    <li><a class=\"active\" href=\"index.html\">home</a></li>
                                    <li><a href=\"rooms.html\">rooms</a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"blog.html\">blog</a></li>
                                            <li><a href=\"single-blog.html\">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"elements.html\">elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-2\">
                        <div class=\"logo-img\">
                            <a href=\"index.html\">
                                <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/logo.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-xl-5 col-lg-4 d-none d-lg-block\">
                        <div class=\"book_room\">
                            <div class=\"socail_links\">
                                <ul>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-facebook-square\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-instagram\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"book_btn d-none d-lg-block\">
                                <a class=\"popup-with-form\" href=\"#test-form\">Book A Room</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<!-- slider_area_start -->
<div class=\"slider_area\">
    <div class=\"slider_active owl-carousel\">
        <div class=\"single_slider d-flex align-items-center justify-content-center slider_bg_1\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Montana Resort</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center justify-content-center slider_bg_2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Life is Beautiful</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider d-flex align-items-center justify-content-center slider_bg_1\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Montana Resort</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center justify-content-center slider_bg_2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Life is Beautiful</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- about_area_start -->
<!-- about_area_end -->

<!-- offers_area_start -->
<br><br><br>
<div class=\"offers_area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"section_title text-center mb-100\">
                    <h3>";
        // line 172
        $this->displayBlock('title', $context, $blocks);
        echo "</h3>
                </div>
            </div>
        </div>
        <div class=\"row\">
                ";
        // line 177
        $this->displayBlock('body', $context, $blocks);
        // line 178
        echo "        </div>
    </div>
</div>
<!-- offers_area_end -->

<!-- video_area_start -->
<!-- video_area_end -->

<!-- about_area_start -->
<!-- about_area_end -->

<!-- features_room_startt -->
<!-- features_room_end -->

<!-- forQuery_start -->

<!-- forQuery_end-->

<!-- instragram_area_start -->
<div class=\"instragram_area\">
    <div class=\"single_instagram\">
        <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/instragram/1.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
    <div class=\"single_instagram\">
        <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/instragram/2.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
    <div class=\"single_instagram\">
        <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/instragram/3.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
    <div class=\"single_instagram\">
        <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/instragram/4.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
    <div class=\"single_instagram\">
        <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/instragram/5.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
</div>
<!-- instragram_area_end -->

<!-- footer -->
<footer class=\"footer\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            address
                        </h3>
                        <p class=\"footer_text\"> 200, Green road, Mongla, <br>
                            New Yor City USA</p>
                        <a href=\"#\" class=\"line-button\">Get Direction</a>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Reservation
                        </h3>
                        <p class=\"footer_text\">+10 367 267 2678 <br>
                            reservation@montana.com</p>
                    </div>
                </div>
                <div class=\"col-xl-2 col-md-6 col-lg-2\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Navigation
                        </h3>
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Rooms</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6 col-lg-4\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Newsletter
                        </h3>
                        <form action=\"#\" class=\"newsletter_form\">
                            <input type=\"text\" placeholder=\"Enter your mail\">
                            <button type=\"submit\">Sign Up</button>
                        </form>
                        <p class=\"newsletter_text\">Subscribe newsletter to get updates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copy-right_text\">
        <div class=\"container\">
            <div class=\"footer_border\"></div>
            <div class=\"row\">
                <div class=\"col-xl-8 col-md-7 col-lg-9\">
                    <p class=\"copy_right\">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class=\"col-xl-4 col-md-5 col-lg-3\">
                    <div class=\"socail_links\">
                        <ul>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook-square\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- link that opens popup -->

<!-- form itself end-->
<form id=\"test-form\" class=\"white-popup-block mfp-hide\">
    <div class=\"popup_box \">
        <div class=\"popup_inner\">
            <h3>Check Availability</h3>
            <form action=\"#\">
                <div class=\"row\">
                    <div class=\"col-xl-6\">
                        <input id=\"datepicker\" placeholder=\"Check in date\">
                    </div>
                    <div class=\"col-xl-6\">
                        <input id=\"datepicker2\" placeholder=\"Check out date\">
                    </div>
                    <div class=\"col-xl-6\">
                        <select class=\"form-select wide\" id=\"default-select\" class=\"\">
                            <option data-display=\"Adult\">1</option>
                            <option value=\"1\">2</option>
                            <option value=\"2\">3</option>
                            <option value=\"3\">4</option>
                        </select>
                    </div>
                    <div class=\"col-xl-6\">
                        <select class=\"form-select wide\" id=\"default-select\" class=\"\">
                            <option data-display=\"Children\">1</option>
                            <option value=\"1\">2</option>
                            <option value=\"2\">3</option>
                            <option value=\"3\">4</option>
                        </select>
                    </div>
                    <div class=\"col-xl-12\">
                        <select class=\"form-select wide\" id=\"default-select\" class=\"\">
                            <option data-display=\"Room type\">Room type</option>
                            <option value=\"1\">Laxaries Rooms</option>
                            <option value=\"2\">Deluxe Room</option>
                            <option value=\"3\">Signature Room</option>
                            <option value=\"4\">Couple Room</option>
                        </select>
                    </div>
                    <div class=\"col-xl-12\">
                        <button type=\"submit\" class=\"boxed-btn3\">Check Availability</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- JS here -->
<script src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/modernizr-3.5.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/vendor/jquery-1.12.4.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 382
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 383
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/ajax-form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 389
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/imagesloaded.pkgd.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/scrollIt.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.scrollUp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.slicknav.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/gijgo.min.js"), "html", null, true);
        echo "\"></script>

<!--contact js-->
<script src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/contact.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.ajaxchimp.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.form.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/mail-script.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 406
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/js/main.js"), "html", null, true);
        echo "\"></script>
<script>
    \$('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class=\"fa fa-caret-down\"></span>'
        }
    });
    \$('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class=\"fa fa-caret-down\"></span>'
        }

    });
</script>



</body>

</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 172
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 177
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  619 => 177,  607 => 172,  578 => 406,  573 => 404,  569 => 403,  565 => 402,  561 => 401,  557 => 400,  551 => 397,  547 => 396,  543 => 395,  539 => 394,  535 => 393,  531 => 392,  527 => 391,  523 => 390,  519 => 389,  515 => 388,  511 => 387,  507 => 386,  503 => 385,  499 => 384,  495 => 383,  491 => 382,  487 => 381,  483 => 380,  331 => 231,  320 => 223,  309 => 215,  298 => 207,  287 => 199,  264 => 178,  262 => 177,  254 => 172,  146 => 67,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  66 => 17,  62 => 16,  55 => 12,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html class=\"no-js\" lang=\"zxx\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
    <title>Montana</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- <link rel=\"manifest\" href=\"site.webmanifest\"> -->
    <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ asset('front/img/favicon.png') }}\">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/magnific-popup.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/themify-icons.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/nice-select.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/gijgo.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/slicknav.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('front/css/style.css') }}\">
    <!-- <link rel=\"stylesheet\" href=\"css/responsive.css\"> -->
</head>

<body>
<!--[if lte IE 9]>
<p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- header-start -->
<header>
    <div class=\"header-area \">
        <div id=\"sticky-header\" class=\"main-header-area\">
            <div class=\"container-fluid p-0\">
                <div class=\"row align-items-center no-gutters\">
                    <div class=\"col-xl-5 col-lg-6\">
                        <div class=\"main-menu  d-none d-lg-block\">
                            <nav>
                                <ul id=\"navigation\">
                                    <li><a class=\"active\" href=\"index.html\">home</a></li>
                                    <li><a href=\"rooms.html\">rooms</a></li>
                                    <li><a href=\"about.html\">About</a></li>
                                    <li><a href=\"#\">blog <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"blog.html\">blog</a></li>
                                            <li><a href=\"single-blog.html\">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"#\">pages <i class=\"ti-angle-down\"></i></a>
                                        <ul class=\"submenu\">
                                            <li><a href=\"elements.html\">elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"contact.html\">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class=\"col-xl-2 col-lg-2\">
                        <div class=\"logo-img\">
                            <a href=\"index.html\">
                                <img src=\"{{ asset('front/img/logo.png') }}\" alt=\"\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-xl-5 col-lg-4 d-none d-lg-block\">
                        <div class=\"book_room\">
                            <div class=\"socail_links\">
                                <ul>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-facebook-square\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\">
                                            <i class=\"fa fa-instagram\"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"book_btn d-none d-lg-block\">
                                <a class=\"popup-with-form\" href=\"#test-form\">Book A Room</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12\">
                        <div class=\"mobile_menu d-block d-lg-none\"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header-end -->

<!-- slider_area_start -->
<div class=\"slider_area\">
    <div class=\"slider_active owl-carousel\">
        <div class=\"single_slider d-flex align-items-center justify-content-center slider_bg_1\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Montana Resort</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center justify-content-center slider_bg_2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Life is Beautiful</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider d-flex align-items-center justify-content-center slider_bg_1\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Montana Resort</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"single_slider  d-flex align-items-center justify-content-center slider_bg_2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"slider_text text-center\">
                            <h3>Life is Beautiful</h3>
                            <p>Unlock to enjoy the view of Martine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider_area_end -->

<!-- about_area_start -->
<!-- about_area_end -->

<!-- offers_area_start -->
<br><br><br>
<div class=\"offers_area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"section_title text-center mb-100\">
                    <h3>{% block title %}{% endblock %}</h3>
                </div>
            </div>
        </div>
        <div class=\"row\">
                {% block body %}{% endblock %}
        </div>
    </div>
</div>
<!-- offers_area_end -->

<!-- video_area_start -->
<!-- video_area_end -->

<!-- about_area_start -->
<!-- about_area_end -->

<!-- features_room_startt -->
<!-- features_room_end -->

<!-- forQuery_start -->

<!-- forQuery_end-->

<!-- instragram_area_start -->
<div class=\"instragram_area\">
    <div class=\"single_instagram\">
        <img src=\"{{ asset('front/img/instragram/1.png') }}\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
    <div class=\"single_instagram\">
        <img src=\"{{ asset('front/img/instragram/2.png') }}\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
    <div class=\"single_instagram\">
        <img src=\"{{ asset('front/img/instragram/3.png') }}\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
    <div class=\"single_instagram\">
        <img src=\"{{ asset('front/img/instragram/4.png') }}\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
    <div class=\"single_instagram\">
        <img src=\"{{ asset('front/img/instragram/5.png') }}\" alt=\"\">
        <div class=\"ovrelay\">
            <a href=\"#\">
                <i class=\"fa fa-instagram\"></i>
            </a>
        </div>
    </div>
</div>
<!-- instragram_area_end -->

<!-- footer -->
<footer class=\"footer\">
    <div class=\"footer_top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            address
                        </h3>
                        <p class=\"footer_text\"> 200, Green road, Mongla, <br>
                            New Yor City USA</p>
                        <a href=\"#\" class=\"line-button\">Get Direction</a>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6 col-lg-3\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Reservation
                        </h3>
                        <p class=\"footer_text\">+10 367 267 2678 <br>
                            reservation@montana.com</p>
                    </div>
                </div>
                <div class=\"col-xl-2 col-md-6 col-lg-2\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Navigation
                        </h3>
                        <ul>
                            <li><a href=\"#\">Home</a></li>
                            <li><a href=\"#\">Rooms</a></li>
                            <li><a href=\"#\">About</a></li>
                            <li><a href=\"#\">News</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xl-4 col-md-6 col-lg-4\">
                    <div class=\"footer_widget\">
                        <h3 class=\"footer_title\">
                            Newsletter
                        </h3>
                        <form action=\"#\" class=\"newsletter_form\">
                            <input type=\"text\" placeholder=\"Enter your mail\">
                            <button type=\"submit\">Sign Up</button>
                        </form>
                        <p class=\"newsletter_text\">Subscribe newsletter to get updates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"copy-right_text\">
        <div class=\"container\">
            <div class=\"footer_border\"></div>
            <div class=\"row\">
                <div class=\"col-xl-8 col-md-7 col-lg-9\">
                    <p class=\"copy_right\">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
                <div class=\"col-xl-4 col-md-5 col-lg-3\">
                    <div class=\"socail_links\">
                        <ul>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-facebook-square\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-twitter\"></i>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <i class=\"fa fa-instagram\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- link that opens popup -->

<!-- form itself end-->
<form id=\"test-form\" class=\"white-popup-block mfp-hide\">
    <div class=\"popup_box \">
        <div class=\"popup_inner\">
            <h3>Check Availability</h3>
            <form action=\"#\">
                <div class=\"row\">
                    <div class=\"col-xl-6\">
                        <input id=\"datepicker\" placeholder=\"Check in date\">
                    </div>
                    <div class=\"col-xl-6\">
                        <input id=\"datepicker2\" placeholder=\"Check out date\">
                    </div>
                    <div class=\"col-xl-6\">
                        <select class=\"form-select wide\" id=\"default-select\" class=\"\">
                            <option data-display=\"Adult\">1</option>
                            <option value=\"1\">2</option>
                            <option value=\"2\">3</option>
                            <option value=\"3\">4</option>
                        </select>
                    </div>
                    <div class=\"col-xl-6\">
                        <select class=\"form-select wide\" id=\"default-select\" class=\"\">
                            <option data-display=\"Children\">1</option>
                            <option value=\"1\">2</option>
                            <option value=\"2\">3</option>
                            <option value=\"3\">4</option>
                        </select>
                    </div>
                    <div class=\"col-xl-12\">
                        <select class=\"form-select wide\" id=\"default-select\" class=\"\">
                            <option data-display=\"Room type\">Room type</option>
                            <option value=\"1\">Laxaries Rooms</option>
                            <option value=\"2\">Deluxe Room</option>
                            <option value=\"3\">Signature Room</option>
                            <option value=\"4\">Couple Room</option>
                        </select>
                    </div>
                    <div class=\"col-xl-12\">
                        <button type=\"submit\" class=\"boxed-btn3\">Check Availability</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</form>
<!-- form itself end -->

<!-- JS here -->
<script src=\"{{ asset('front/js/vendor/modernizr-3.5.0.min.js') }}\"></script>
<script src=\"{{ asset('front/js/vendor/jquery-1.12.4.min.js') }}\"></script>
<script src=\"{{ asset('front/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('front/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('front/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('front/js/isotope.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('front/js/ajax-form.js') }}\"></script>
<script src=\"{{ asset('front/js/waypoints.min.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery.counterup.min.js') }}\"></script>
<script src=\"{{ asset('front/js/imagesloaded.pkgd.min.js') }}\"></script>
<script src=\"{{ asset('front/js/scrollIt.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery.scrollUp.min.js') }}\"></script>
<script src=\"{{ asset('front/js/wow.min.js') }}\"></script>
<script src=\"{{ asset('front/js/nice-select.min.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery.slicknav.min.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('front/js/plugins.js') }}\"></script>
<script src=\"{{ asset('front/js/gijgo.min.js') }}\"></script>

<!--contact js-->
<script src=\"{{ asset('front/js/contact.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery.ajaxchimp.min.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery.form.js') }}\"></script>
<script src=\"{{ asset('front/js/jquery.validate.min.js') }}\"></script>
<script src=\"{{ asset('front/js/mail-script.js') }}\"></script>

<script src=\"{{ asset('front/js/main.js') }}\"></script>
<script>
    \$('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class=\"fa fa-caret-down\"></span>'
        }
    });
    \$('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class=\"fa fa-caret-down\"></span>'
        }

    });
</script>



</body>

</html>", "front.html.twig", "C:\\Users\\Rzouga\\Desktop\\Nerr\\Campping\\templates\\front.html.twig");
    }
}
