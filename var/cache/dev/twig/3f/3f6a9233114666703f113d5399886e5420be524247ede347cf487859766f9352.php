<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_0e0e321685a82f1e77df45eddf85e33066eb97d5a085c123d8ce250383d3b494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7394ab80eeb42e205e6aaa5c642432f3bca10799401daa269c89421122e27c0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7394ab80eeb42e205e6aaa5c642432f3bca10799401daa269c89421122e27c0b->enter($__internal_7394ab80eeb42e205e6aaa5c642432f3bca10799401daa269c89421122e27c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_57778fcdd5109e010bc6d981bd1f9d17f52ec58dc295193a5e1753d0d31c983b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57778fcdd5109e010bc6d981bd1f9d17f52ec58dc295193a5e1753d0d31c983b->enter($__internal_57778fcdd5109e010bc6d981bd1f9d17f52ec58dc295193a5e1753d0d31c983b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--Based on Index/Portfolio.2-->
<html dir=\"ltr\" lang=\"en-US\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"author\" content=\"CodeBusters\"/>

    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 9
        echo "
    <!-- Basic Stylesheets
    ============================================= -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\"
          rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/style.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/swiper.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/dark.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/font-icons.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/animate.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/rating.css"), "html", null, true);
        echo "\" type=\"text/css\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/font-awesome.css"), "html", null, true);
        echo "\" type=\"text/css\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/components/bs-rating.css"), "html", null, true);
        echo "\" type=\"text/css\"  />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/include/rs-plugin/fonts/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\"  />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>

    ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
</head>
<body class=\"stretched\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">

    <!-- Header
    ============================================= -->
    <header id=\"header\" class=\"full-header\">

        <div id=\"header-wrap\">

            <div class=\"container clearfix\">

                <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                <!-- Logo
                ============================================= -->
                <div id=\"logo\">
                    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\" class=\"standard-logo\"
                       data-dark-logo=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/app-typo.png"), "html", null, true);
        echo "\"><img
                                src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/app-typo.png"), "html", null, true);
        echo "\" alt=\"Souk Lemdina Logo\"></a>
                </div><!-- #logo end -->
                ";
        // line 55
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 56
            echo "                <div id=\"top-account\" class=\"dropdown\">
                    <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><i class=\"icon-user\"></i><i class=\"icon-angle-down\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mon Profile</a></li>
                        <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
            echo "\">Messages &nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;&nbsp;<span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->getNbUnread(), "html", null, true);
            echo "</span></a></li>
                        <li><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheProfil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mes Évènements</a></li>
                        <li><a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_afficheUser");
            echo "\">Mes Espaces</a></li>
                        <li><a href=\"";
            // line 63
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Paramètres</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnecter<i class=\"icon-signout\"></i></a></li>
                    </ul>
                </div>
                ";
        }
        // line 69
        echo "                <!-- Primary Navigation
                ============================================= -->
                <nav id=\"primary-menu\">

                    <ul>
                        <li class=\"mega-menu\"><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\">
                                <div>Accueil</div>
                            </a></li>
                        <li><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_homepage");
        echo "\">
                                <div>Hdith ElSouk</div>
                            </a></li>
                        <li class=\"mega-menu\"><a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheEvent");
        echo "\">
                                <div>Évènements</div>
                            </a></li>
                        ";
        // line 83
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 84
            echo "                            <li class=\"mega-menu\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheWorkshop");
            echo "\">
                            <div>Ateliers</div>
                        ";
        } else {
            // line 87
            echo "                            <li class=\"mega-menu\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheVisitWorkshop");
            echo "\">
                                    <div>Ateliers</div>
                                </a></li>
                        ";
        }
        // line 91
        echo "                        <li class=\"mega-menu\"><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_affiche");
        echo "\">
                                <div>Explore</div>
                            </a></li>
                        <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_produits");
        echo "\">
                                <div>Boutique En Ligne</div>
                            </a></li>
                    </ul>

                    ";
        // line 99
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 100
            echo "                        <div id=\"top-search\">
                            <a href=\"#\" title=\"Rechercher Artisans\" id=\"top-search-trigger\"><i class=\"icon-search3\"></i><i class=\" icon-line-cross\"></i></a>
                            <form action=\"";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_recherche_profile");
            echo "\" method=\"post\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" value=\"\" placeholder=\"Écrire &amp; Appuyer Entrer..\">
                            </form>
                        </div>
                        <div id=\"top-cart\">
                            <a href=\"";
            // line 107
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\" icon-external-link\"></i></a>
                        </div>
                    ";
        } else {
            // line 110
            echo "                        <div id=\"top-cart\">
                            <a href=\"";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><i class=\" icon-user\"></i></a>
                        </div>
                        <div id=\"top-cart\">
                            <a href=\"";
            // line 114
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\" icon-download\"></i></a>
                        </div>
                    ";
        }
        // line 117
        echo "
                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
    ";
        // line 125
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 126
            echo "        ";
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->render($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), array("template" => "StockBundle::notification_list.html.twig"));
            echo "
    ";
        }
        // line 128
        echo "    <br>

    <div>
        ";
        // line 131
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 133
        echo "    </div>

    ";
        // line 135
        $this->displayBlock('body', $context, $blocks);
        // line 136
        echo "
    <!-- Footer
    ============================================= -->
    <footer id=\"footer\" class=\"dark\">

        <div class=\"container\">

            <!-- Footer Widgets
            ============================================= -->
            <div class=\"footer-widgets-wrap clearfix\">

                <div class=\"col_two_third\">

                    <div class=\"col_one_third\">

                        <div class=\"widget clearfix\">

                            <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/app.png"), "html", null, true);
        echo "\" height=\"87\" width=\"78\" alt=\"\"
                                 class=\"footer-logo\">

                            <div style=\"background: url('";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/world-map.png"), "html", null, true);
        echo "') no-repeat center center; background-size: 100%;\">
                                <address>
                                    <strong>Siège Social:</strong><br>
                                    Z.I. Chotrana II B.P. 160<br>
                                    Pôle Technologique El Ghazela - Ariana 2083<br>
                                </address>
                                <abbr title=\"Num.Tel\"><strong>Phone:</strong></abbr> (216) 52 888256<br>
                                <abbr title=\"Adresse Mail\"><strong>Email:</strong></abbr> info@souklemdina.tn
                            </div>

                        </div>

                    </div>

                    ";
        // line 170
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 171
            echo "                    <div class=\"col_one_third\">

                        <div class=\"widget widget_links clearfix\">

                            <h4>Mon Profile</h4>

                            <ul>
                                <li><a href=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mes Publications</a></li>
                                <li><a href=\"";
            // line 179
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) . "#tab-events"), "html", null, true);
            echo "\">Mes Évènements</a></li>
                                <li><a href=\"";
            // line 180
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_afficheUser");
            echo "\">Mes Espaces</a></li>
                                <li><a href=\"";
            // line 181
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Paramètres du Compte</a></li>
                                <li><a href=\"";
            // line 182
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnecter</a></li>
                            </ul>

                        </div>

                    </div>
                    ";
        }
        // line 189
        echo "
                    <div class=\"col_one_third col_last\">

                        <div class=\"widget clearfix\">
                            <h4>Évènements Récents</h4>

                            <div id=\"post-list-footer\">
                                ";
        // line 196
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EvenementBundle:Evenement:RecentDql"));
        echo "
                            </div>
                        </div>

                    </div>

                </div>

                <div class=\"col_one_third col_last\">

                    <div class=\"widget clearfix\" style=\"margin-bottom: -10px;margin-top: 60px;\">

                        <div class=\"row\">

                            <div class=\"col-md-6 bottommargin-sm\">
                                <div class=\"counter counter-small\"><span data-from=\"50\" data-to=\"18465\"
                                                                         data-refresh-interval=\"50\" data-speed=\"2000\"
                                                                         data-comma=\"true\"></span></div>
                                <h5 class=\"nobottommargin\">Profils Artisans</h5>
                            </div>

                            <div class=\"col-md-6 bottommargin-sm\">
                                <div class=\"counter counter-small\"><span data-from=\"100\" data-to=\"63453\"
                                                                         data-refresh-interval=\"50\" data-speed=\"2000\"
                                                                         data-comma=\"true\"></span></div>
                                <h5 class=\"nobottommargin\">Publications</h5>
                            </div>

                        </div>

                    </div>

                    <div style=\"margin-top: 20px; margin-left: 0px;\">

                        <div>
                            <a href=\"#\">
                                <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/team-onblack.png"), "html", null, true);
        echo "\" width=\"200\"
                                     alt=\"Logo CodeBusters\">
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href=\"http://esprit.tn\">
                                <img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/esprit-onblack.png"), "html", null, true);
        echo "\" alt=\"Logo Esprit\">
                            </a>
                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights &copy; 2018 All Rights Reserved by Souk Lemdina Inc.<br>
                    <div class=\"copyright-links\"><a href=\"#\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"https://github.com/RKayX2/SoukLemdina\"
                           class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>
                    <i class=\"icon-envelope2\"></i> info@souklemdina.tn <span class=\"middot\">&middot;</span> <i
                            class=\"icon-headphones\"></i> +00216-52-888-256 <span class=\"middot\">&middot;</span> <i
                            class=\"icon-skype2\"></i> SoukLemdinaOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/rating.js"), "html", null, true);
        echo "\"></script>
<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/components/bs-switches.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(window).load(function () {
        var swiperParent = new Swiper('.swiper-parent', {
            paginationClickable: false,
            slidesPerView: 4,
            grabCursor: true,
            prevButton: '#slider-arrow-left',
            nextButton: '#slider-arrow-right'
        });

        var swiperNested1 = new Swiper('.swiper-nested-1', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 3,
            prevButton: '#sw1-arrow-top',
            nextButton: '#sw1-arrow-bottom'
        });

        var swiperNested2 = new Swiper('.swiper-nested-2', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 2,
            prevButton: '#sw2-arrow-top',
            nextButton: '#sw2-arrow-bottom'
        });

        var swiperNested3 = new Swiper('.swiper-nested-3', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 2,
            prevButton: '#sw3-arrow-top',
            nextButton: '#sw3-arrow-bottom'
        });
    });
</script>
";
        // line 332
        $this->displayBlock('javascripts', $context, $blocks);
        // line 333
        echo "
</body>
</html>


";
        
        $__internal_7394ab80eeb42e205e6aaa5c642432f3bca10799401daa269c89421122e27c0b->leave($__internal_7394ab80eeb42e205e6aaa5c642432f3bca10799401daa269c89421122e27c0b_prof);

        
        $__internal_57778fcdd5109e010bc6d981bd1f9d17f52ec58dc295193a5e1753d0d31c983b->leave($__internal_57778fcdd5109e010bc6d981bd1f9d17f52ec58dc295193a5e1753d0d31c983b_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_082f50707ae5f6efde4de27a68e2038c796708355b042cf625841b1b229c45b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082f50707ae5f6efde4de27a68e2038c796708355b042cf625841b1b229c45b6->enter($__internal_082f50707ae5f6efde4de27a68e2038c796708355b042cf625841b1b229c45b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2781e7f5c2d5eb539e0f63f96f0d0460d637e822443fbe7a68e0cf165143f0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2781e7f5c2d5eb539e0f63f96f0d0460d637e822443fbe7a68e0cf165143f0f4->enter($__internal_2781e7f5c2d5eb539e0f63f96f0d0460d637e822443fbe7a68e0cf165143f0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2781e7f5c2d5eb539e0f63f96f0d0460d637e822443fbe7a68e0cf165143f0f4->leave($__internal_2781e7f5c2d5eb539e0f63f96f0d0460d637e822443fbe7a68e0cf165143f0f4_prof);

        
        $__internal_082f50707ae5f6efde4de27a68e2038c796708355b042cf625841b1b229c45b6->leave($__internal_082f50707ae5f6efde4de27a68e2038c796708355b042cf625841b1b229c45b6_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf2381caf99d585f512a006b0c5d574553ab0b3b5866b679eb60fe76ba1c82d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf2381caf99d585f512a006b0c5d574553ab0b3b5866b679eb60fe76ba1c82d2->enter($__internal_cf2381caf99d585f512a006b0c5d574553ab0b3b5866b679eb60fe76ba1c82d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e267f68ba387ff70f5c4f0601cbca897852e507d0fb6ec782ca62ea081c230b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e267f68ba387ff70f5c4f0601cbca897852e507d0fb6ec782ca62ea081c230b2->enter($__internal_e267f68ba387ff70f5c4f0601cbca897852e507d0fb6ec782ca62ea081c230b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e267f68ba387ff70f5c4f0601cbca897852e507d0fb6ec782ca62ea081c230b2->leave($__internal_e267f68ba387ff70f5c4f0601cbca897852e507d0fb6ec782ca62ea081c230b2_prof);

        
        $__internal_cf2381caf99d585f512a006b0c5d574553ab0b3b5866b679eb60fe76ba1c82d2->leave($__internal_cf2381caf99d585f512a006b0c5d574553ab0b3b5866b679eb60fe76ba1c82d2_prof);

    }

    // line 131
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_676854f847e7f5c134978efc137bd051b7df6b5c784616f826e36933eb1070af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_676854f847e7f5c134978efc137bd051b7df6b5c784616f826e36933eb1070af->enter($__internal_676854f847e7f5c134978efc137bd051b7df6b5c784616f826e36933eb1070af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a74cd903e197376edb2ed241804406f6279620d7276a49edaf92e2635d647901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a74cd903e197376edb2ed241804406f6279620d7276a49edaf92e2635d647901->enter($__internal_a74cd903e197376edb2ed241804406f6279620d7276a49edaf92e2635d647901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 132
        echo "        ";
        
        $__internal_a74cd903e197376edb2ed241804406f6279620d7276a49edaf92e2635d647901->leave($__internal_a74cd903e197376edb2ed241804406f6279620d7276a49edaf92e2635d647901_prof);

        
        $__internal_676854f847e7f5c134978efc137bd051b7df6b5c784616f826e36933eb1070af->leave($__internal_676854f847e7f5c134978efc137bd051b7df6b5c784616f826e36933eb1070af_prof);

    }

    // line 135
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eeab28c6809764a98b29cf36aa0ab80b98500d759348663796094dbb0ef6eda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eeab28c6809764a98b29cf36aa0ab80b98500d759348663796094dbb0ef6eda->enter($__internal_5eeab28c6809764a98b29cf36aa0ab80b98500d759348663796094dbb0ef6eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5c7a960037ad84ae3de3f69ec8669ded31bde909cfe0a2ccbc8d9b6df8981f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7a960037ad84ae3de3f69ec8669ded31bde909cfe0a2ccbc8d9b6df8981f31->enter($__internal_5c7a960037ad84ae3de3f69ec8669ded31bde909cfe0a2ccbc8d9b6df8981f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5c7a960037ad84ae3de3f69ec8669ded31bde909cfe0a2ccbc8d9b6df8981f31->leave($__internal_5c7a960037ad84ae3de3f69ec8669ded31bde909cfe0a2ccbc8d9b6df8981f31_prof);

        
        $__internal_5eeab28c6809764a98b29cf36aa0ab80b98500d759348663796094dbb0ef6eda->leave($__internal_5eeab28c6809764a98b29cf36aa0ab80b98500d759348663796094dbb0ef6eda_prof);

    }

    // line 332
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5c4ebf5f85f6fbc171eb9d479c477d28f2bb439fd94cf7b94b5f104a078300c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c4ebf5f85f6fbc171eb9d479c477d28f2bb439fd94cf7b94b5f104a078300c->enter($__internal_d5c4ebf5f85f6fbc171eb9d479c477d28f2bb439fd94cf7b94b5f104a078300c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4cf24b160dac30fe6d953166fee38c1aa2c4b78b9e9e50e88550a37a6070e02c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf24b160dac30fe6d953166fee38c1aa2c4b78b9e9e50e88550a37a6070e02c->enter($__internal_4cf24b160dac30fe6d953166fee38c1aa2c4b78b9e9e50e88550a37a6070e02c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4cf24b160dac30fe6d953166fee38c1aa2c4b78b9e9e50e88550a37a6070e02c->leave($__internal_4cf24b160dac30fe6d953166fee38c1aa2c4b78b9e9e50e88550a37a6070e02c_prof);

        
        $__internal_d5c4ebf5f85f6fbc171eb9d479c477d28f2bb439fd94cf7b94b5f104a078300c->leave($__internal_d5c4ebf5f85f6fbc171eb9d479c477d28f2bb439fd94cf7b94b5f104a078300c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  635 => 332,  618 => 135,  608 => 132,  599 => 131,  582 => 29,  565 => 8,  550 => 333,  548 => 332,  509 => 296,  504 => 294,  498 => 291,  494 => 290,  490 => 289,  435 => 237,  427 => 232,  388 => 196,  379 => 189,  369 => 182,  365 => 181,  361 => 180,  357 => 179,  353 => 178,  344 => 171,  342 => 170,  325 => 156,  319 => 153,  300 => 136,  298 => 135,  294 => 133,  292 => 131,  287 => 128,  281 => 126,  279 => 125,  269 => 117,  263 => 114,  257 => 111,  254 => 110,  248 => 107,  240 => 102,  236 => 100,  234 => 99,  226 => 94,  219 => 91,  211 => 87,  204 => 84,  202 => 83,  196 => 80,  190 => 77,  184 => 74,  177 => 69,  170 => 65,  165 => 63,  161 => 62,  157 => 61,  151 => 60,  147 => 59,  142 => 56,  140 => 55,  135 => 53,  131 => 52,  127 => 51,  104 => 30,  102 => 29,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  41 => 9,  39 => 8,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--Based on Index/Portfolio.2-->
<html dir=\"ltr\" lang=\"en-US\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <meta name=\"author\" content=\"CodeBusters\"/>

    {% block head %}{% endblock %}

    <!-- Basic Stylesheets
    ============================================= -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\"
          rel=\"stylesheet\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/bootstrap.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/style.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/swiper.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/dark.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/font-icons.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/animate.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/magnific-popup.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/responsive.css') }}\" type=\"text/css\"/>
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/rating.css') }}\" type=\"text/css\"  />
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/font-awesome.min.css') }}\" type=\"text/css\"  />
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/font-awesome.css') }}\" type=\"text/css\"  />
    <link rel=\"stylesheet\" href=\"{{ asset('Template/css/components/bs-rating.css') }}\" type=\"text/css\"  />
    <link rel=\"stylesheet\" href=\"{{ asset('Template/include/rs-plugin/fonts/font-awesome/css/font-awesome.min.css') }}\" type=\"text/css\"  />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>

    {% block stylesheets %}{% endblock %}

</head>
<body class=\"stretched\">

<!-- Document Wrapper
============================================= -->
<div id=\"wrapper\" class=\"clearfix\">

    <!-- Header
    ============================================= -->
    <header id=\"header\" class=\"full-header\">

        <div id=\"header-wrap\">

            <div class=\"container clearfix\">

                <div id=\"primary-menu-trigger\"><i class=\"icon-reorder\"></i></div>

                <!-- Logo
                ============================================= -->
                <div id=\"logo\">
                    <a href=\"{{ path('fos_visitor_home') }}\" class=\"standard-logo\"
                       data-dark-logo=\"{{ asset('Template/images/logos/app-typo.png') }}\"><img
                                src=\"{{ asset('Template/images/logos/app-typo.png') }}\" alt=\"Souk Lemdina Logo\"></a>
                </div><!-- #logo end -->
                {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                <div id=\"top-account\" class=\"dropdown\">
                    <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><i class=\"icon-user\"></i><i class=\"icon-angle-down\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"{{ path('social_check_profile',{'id':app.user.id}) }}\">Mon Profile</a></li>
                        <li><a href=\"{{ path('fos_message_inbox') }}\">Messages &nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;&nbsp;<span>{{ fos_message_nb_unread() }}</span></a></li>
                        <li><a href=\"{{ path('_AfficheProfil',{'id':app.user.id}) }}\">Mes Évènements</a></li>
                        <li><a href=\"{{ path('_afficheUser') }}\">Mes Espaces</a></li>
                        <li><a href=\"{{ path('fos_user_profile_edit') }}\">Paramètres</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnecter<i class=\"icon-signout\"></i></a></li>
                    </ul>
                </div>
                {% endif %}
                <!-- Primary Navigation
                ============================================= -->
                <nav id=\"primary-menu\">

                    <ul>
                        <li class=\"mega-menu\"><a href=\"{{ path('fos_visitor_home') }}\">
                                <div>Accueil</div>
                            </a></li>
                        <li><a href=\"{{ path('social_homepage') }}\">
                                <div>Hdith ElSouk</div>
                            </a></li>
                        <li class=\"mega-menu\"><a href=\"{{ path('_AfficheEvent') }}\">
                                <div>Évènements</div>
                            </a></li>
                        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                            <li class=\"mega-menu\"><a href=\"{{ path('_AfficheWorkshop') }}\">
                            <div>Ateliers</div>
                        {% else %}
                            <li class=\"mega-menu\"><a href=\"{{ path('_AfficheVisitWorkshop') }}\">
                                    <div>Ateliers</div>
                                </a></li>
                        {% endif %}
                        <li class=\"mega-menu\"><a href=\"{{ path('_affiche') }}\">
                                <div>Explore</div>
                            </a></li>
                        <li><a href=\"{{ path('affiche_produits') }}\">
                                <div>Boutique En Ligne</div>
                            </a></li>
                    </ul>

                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                        <div id=\"top-search\">
                            <a href=\"#\" title=\"Rechercher Artisans\" id=\"top-search-trigger\"><i class=\"icon-search3\"></i><i class=\" icon-line-cross\"></i></a>
                            <form action=\"{{ path('social_recherche_profile') }}\" method=\"post\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" value=\"\" placeholder=\"Écrire &amp; Appuyer Entrer..\">
                            </form>
                        </div>
                        <div id=\"top-cart\">
                            <a href=\"{{ path('fos_user_security_logout') }}\"><i class=\" icon-external-link\"></i></a>
                        </div>
                    {% else %}
                        <div id=\"top-cart\">
                            <a href=\"{{ path('fos_user_registration_register') }}\"><i class=\" icon-user\"></i></a>
                        </div>
                        <div id=\"top-cart\">
                            <a href=\"{{ path('fos_user_security_login') }}\"><i class=\" icon-download\"></i></a>
                        </div>
                    {% endif %}

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
        {{ mgilet_notification_render(app.user,{'template':'StockBundle::notification_list.html.twig'}) }}
    {% endif %}
    <br>

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>

    {% block body %}{% endblock %}

    <!-- Footer
    ============================================= -->
    <footer id=\"footer\" class=\"dark\">

        <div class=\"container\">

            <!-- Footer Widgets
            ============================================= -->
            <div class=\"footer-widgets-wrap clearfix\">

                <div class=\"col_two_third\">

                    <div class=\"col_one_third\">

                        <div class=\"widget clearfix\">

                            <img src=\"{{ asset('Template/images/logos/app.png') }}\" height=\"87\" width=\"78\" alt=\"\"
                                 class=\"footer-logo\">

                            <div style=\"background: url('{{ asset('Template/images/world-map.png') }}') no-repeat center center; background-size: 100%;\">
                                <address>
                                    <strong>Siège Social:</strong><br>
                                    Z.I. Chotrana II B.P. 160<br>
                                    Pôle Technologique El Ghazela - Ariana 2083<br>
                                </address>
                                <abbr title=\"Num.Tel\"><strong>Phone:</strong></abbr> (216) 52 888256<br>
                                <abbr title=\"Adresse Mail\"><strong>Email:</strong></abbr> info@souklemdina.tn
                            </div>

                        </div>

                    </div>

                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <div class=\"col_one_third\">

                        <div class=\"widget widget_links clearfix\">

                            <h4>Mon Profile</h4>

                            <ul>
                                <li><a href=\"{{ path('social_check_profile',{'id':app.user.id}) }}\">Mes Publications</a></li>
                                <li><a href=\"{{ path('social_check_profile',{'id':app.user.id}) ~ '#tab-events'}}\">Mes Évènements</a></li>
                                <li><a href=\"{{ path('_afficheUser')}}\">Mes Espaces</a></li>
                                <li><a href=\"{{ path('fos_user_profile_edit') }}\">Paramètres du Compte</a></li>
                                <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnecter</a></li>
                            </ul>

                        </div>

                    </div>
                    {% endif %}

                    <div class=\"col_one_third col_last\">

                        <div class=\"widget clearfix\">
                            <h4>Évènements Récents</h4>

                            <div id=\"post-list-footer\">
                                {{ render(controller('EvenementBundle:Evenement:RecentDql')) }}
                            </div>
                        </div>

                    </div>

                </div>

                <div class=\"col_one_third col_last\">

                    <div class=\"widget clearfix\" style=\"margin-bottom: -10px;margin-top: 60px;\">

                        <div class=\"row\">

                            <div class=\"col-md-6 bottommargin-sm\">
                                <div class=\"counter counter-small\"><span data-from=\"50\" data-to=\"18465\"
                                                                         data-refresh-interval=\"50\" data-speed=\"2000\"
                                                                         data-comma=\"true\"></span></div>
                                <h5 class=\"nobottommargin\">Profils Artisans</h5>
                            </div>

                            <div class=\"col-md-6 bottommargin-sm\">
                                <div class=\"counter counter-small\"><span data-from=\"100\" data-to=\"63453\"
                                                                         data-refresh-interval=\"50\" data-speed=\"2000\"
                                                                         data-comma=\"true\"></span></div>
                                <h5 class=\"nobottommargin\">Publications</h5>
                            </div>

                        </div>

                    </div>

                    <div style=\"margin-top: 20px; margin-left: 0px;\">

                        <div>
                            <a href=\"#\">
                                <img src=\"{{ asset('Template/images/logos/team-onblack.png') }}\" width=\"200\"
                                     alt=\"Logo CodeBusters\">
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href=\"http://esprit.tn\">
                                <img src=\"{{ asset('Template/images/logos/esprit-onblack.png') }}\" alt=\"Logo Esprit\">
                            </a>
                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id=\"copyrights\">

            <div class=\"container clearfix\">

                <div class=\"col_half\">
                    Copyrights &copy; 2018 All Rights Reserved by Souk Lemdina Inc.<br>
                    <div class=\"copyright-links\"><a href=\"#\">Terms of Use</a> / <a href=\"#\">Privacy Policy</a></div>
                </div>

                <div class=\"col_half col_last tright\">
                    <div class=\"fright clearfix\">
                        <a href=\"https://github.com/RKayX2/SoukLemdina\"
                           class=\"social-icon si-small si-borderless si-github\">
                            <i class=\"icon-github\"></i>
                            <i class=\"icon-github\"></i>
                        </a>
                    </div>

                    <div class=\"clear\"></div>
                    <i class=\"icon-envelope2\"></i> info@souklemdina.tn <span class=\"middot\">&middot;</span> <i
                            class=\"icon-headphones\"></i> +00216-52-888-256 <span class=\"middot\">&middot;</span> <i
                            class=\"icon-skype2\"></i> SoukLemdinaOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id=\"gotoTop\" class=\"icon-angle-up\"></div>

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('Template/js/plugins.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('Template/js/rating.js') }}\"></script>
<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"{{ asset('Template/js/functions.js') }}\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"{{ asset('Template/js/components/bs-switches.js') }}\"></script>
<script type=\"text/javascript\">
    jQuery(window).load(function () {
        var swiperParent = new Swiper('.swiper-parent', {
            paginationClickable: false,
            slidesPerView: 4,
            grabCursor: true,
            prevButton: '#slider-arrow-left',
            nextButton: '#slider-arrow-right'
        });

        var swiperNested1 = new Swiper('.swiper-nested-1', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 3,
            prevButton: '#sw1-arrow-top',
            nextButton: '#sw1-arrow-bottom'
        });

        var swiperNested2 = new Swiper('.swiper-nested-2', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 2,
            prevButton: '#sw2-arrow-top',
            nextButton: '#sw2-arrow-bottom'
        });

        var swiperNested3 = new Swiper('.swiper-nested-3', {
            direction: 'vertical',
            paginationClickable: false,
            slidesPerView: 2,
            prevButton: '#sw3-arrow-top',
            nextButton: '#sw3-arrow-bottom'
        });
    });
</script>
{% block javascripts %}{% endblock %}

</body>
</html>


", "@FOSUser/layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/layout.html.twig");
    }
}
