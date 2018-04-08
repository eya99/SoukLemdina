<?php

/* SUserBundle::layout.html.twig */
class __TwigTemplate_b376e386db9bf32ccc473d23de562b00c2095da4e42eab8660b7e0238ecedfa6 extends Twig_Template
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
        $__internal_7f91a4eb83090db1e0ed78acff50b6cd945038f90a6e12c71b80ccf74cc6efb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f91a4eb83090db1e0ed78acff50b6cd945038f90a6e12c71b80ccf74cc6efb6->enter($__internal_7f91a4eb83090db1e0ed78acff50b6cd945038f90a6e12c71b80ccf74cc6efb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUserBundle::layout.html.twig"));

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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>

    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
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
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\" class=\"standard-logo\"
                       data-dark-logo=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/app-typo.png"), "html", null, true);
        echo "\"><img
                                src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/app-typo.png"), "html", null, true);
        echo "\" alt=\"Souk Lemdina Logo\"></a>
                </div><!-- #logo end -->
                ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 51
            echo "                <div id=\"top-account\" class=\"dropdown\">
                    <a href=\"#\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\"><i class=\"icon-user\"></i><i class=\"icon-angle-down\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"dropdownMenu1\">
                        <li><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mon Profile</a></li>
                        <li><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_inbox");
            echo "\">Messages &nbsp;&nbsp;&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;&nbsp;<span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('FOS\MessageBundle\Twig\Extension\MessageExtension')->getNbUnread(), "html", null, true);
            echo "</span></a></li>
                        <li><a href=\"#\">Ma Boutique Personnelle</a></li>
                        <li><a href=\"#\">Mes Évènements</a></li>
                        <li><a href=\"#\">Mes Espaces</a></li>
                        <li><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_wishlist");
            echo "\">Ma Wishlist</a></li>
                        <li><a href=\"";
            // line 60
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Paramètres</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnecter<i class=\"icon-signout\"></i></a></li>
                    </ul>
                </div>
                ";
        }
        // line 66
        echo "                <!-- Primary Navigation
                ============================================= -->
                <nav id=\"primary-menu\">

                    <ul>
                        <li class=\"mega-menu\"><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\">
                                <div>Accueil</div>
                            </a></li>
                        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_homepage");
        echo "\">
                                <div>Hdith ElSouk</div>
                            </a></li>
                        <li class=\"mega-menu\"><a href=\"#\">
                                <div>Évènements</div>
                            </a></li>
                        ";
        // line 80
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 81
            echo "                            <li class=\"mega-menu\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheWorkshop");
            echo "\">
                            <div>Ateliers</div>
                        ";
        } else {
            // line 84
            echo "                            <li class=\"mega-menu\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheVisitWorkshop");
            echo "\">
                                    <div>Ateliers</div>
                                </a></li>
                        ";
        }
        // line 88
        echo "                        <li class=\"mega-menu\"><a href=\"#\">
                                <div>Explore</div>
                            </a></li>
                        <li><a href=\"";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_produits");
        echo "\">
                                <div>Boutique En Ligne</div>
                            </a></li>
                    </ul>

                    ";
        // line 96
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 97
            echo "                        <div id=\"top-search\">
                            <a href=\"#\" title=\"Rechercher Artisans\" id=\"top-search-trigger\"><i class=\"icon-search3\"></i><i class=\" icon-line-cross\"></i></a>
                            <form action=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_recherche_profile");
            echo "\" method=\"post\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" value=\"\" placeholder=\"Écrire &amp; Appuyer Entrer..\">
                            </form>
                        </div>
                        <div id=\"top-cart\">
                            <a href=\"";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\" icon-external-link\"></i></a>
                        </div>
                    ";
        } else {
            // line 107
            echo "                        <div id=\"top-cart\">
                            <a href=\"";
            // line 108
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><i class=\" icon-user\"></i></a>
                        </div>
                        <div id=\"top-cart\">
                            <a href=\"";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\" icon-download\"></i></a>
                        </div>
                    ";
        }
        // line 114
        echo "
                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
    ";
        // line 122
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 123
            echo "        ";
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->render($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), array("template" => "StockBundle::notification_list.html.twig"));
            echo "
    ";
        }
        // line 125
        echo "    <br>

    <div>
        ";
        // line 128
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 130
        echo "    </div>

    ";
        // line 132
        $this->displayBlock('body', $context, $blocks);
        // line 133
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
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/app.png"), "html", null, true);
        echo "\" height=\"87\" width=\"78\" alt=\"\"
                                 class=\"footer-logo\">

                            <div style=\"background: url('";
        // line 153
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
        // line 167
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 168
            echo "                    <div class=\"col_one_third\">

                        <div class=\"widget widget_links clearfix\">

                            <h4>Mon Profile</h4>

                            <ul>
                                <li><a href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mes Publications</a></li>
                                <li><a href=\"";
            // line 176
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) . "#tab-events"), "html", null, true);
            echo "\">Mes Évènements</a></li>
                                <li><a href=\"";
            // line 177
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) . "#tab-spaces"), "html", null, true);
            echo "\">Mes Espaces</a></li>
                                <li><a href=\"";
            // line 178
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Paramètres du Compte</a></li>
                                <li><a href=\"";
            // line 179
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnecter</a></li>
                            </ul>

                        </div>

                    </div>
                    ";
        }
        // line 186
        echo "
                    <div class=\"col_one_third col_last\">

                        <div class=\"widget clearfix\">
                            <h4>Évènements Récents</h4>

                            <div id=\"post-list-footer\">
                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
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
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/team-onblack.png"), "html", null, true);
        echo "\" width=\"200\"
                                     alt=\"Logo CodeBusters\">
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href=\"http://esprit.tn\">
                                <img src=\"";
        // line 265
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
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"";
        // line 324
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
        // line 360
        $this->displayBlock('javascripts', $context, $blocks);
        // line 361
        echo "
</body>
</html>


";
        
        $__internal_7f91a4eb83090db1e0ed78acff50b6cd945038f90a6e12c71b80ccf74cc6efb6->leave($__internal_7f91a4eb83090db1e0ed78acff50b6cd945038f90a6e12c71b80ccf74cc6efb6_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e25ebddc118e3e891d292b26d9e064b4325367f9f5fa2edfc68fc064a0f3168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e25ebddc118e3e891d292b26d9e064b4325367f9f5fa2edfc68fc064a0f3168->enter($__internal_3e25ebddc118e3e891d292b26d9e064b4325367f9f5fa2edfc68fc064a0f3168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3e25ebddc118e3e891d292b26d9e064b4325367f9f5fa2edfc68fc064a0f3168->leave($__internal_3e25ebddc118e3e891d292b26d9e064b4325367f9f5fa2edfc68fc064a0f3168_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad67c8b1b9125ab5f95242edb6d04344310e252984fba87cfd0436a78f9c46fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad67c8b1b9125ab5f95242edb6d04344310e252984fba87cfd0436a78f9c46fe->enter($__internal_ad67c8b1b9125ab5f95242edb6d04344310e252984fba87cfd0436a78f9c46fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ad67c8b1b9125ab5f95242edb6d04344310e252984fba87cfd0436a78f9c46fe->leave($__internal_ad67c8b1b9125ab5f95242edb6d04344310e252984fba87cfd0436a78f9c46fe_prof);

    }

    // line 128
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d082ae8c27f38477c141da4da1275281f8d6f3fe63bed00a47eca9a4b207859f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d082ae8c27f38477c141da4da1275281f8d6f3fe63bed00a47eca9a4b207859f->enter($__internal_d082ae8c27f38477c141da4da1275281f8d6f3fe63bed00a47eca9a4b207859f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 129
        echo "        ";
        
        $__internal_d082ae8c27f38477c141da4da1275281f8d6f3fe63bed00a47eca9a4b207859f->leave($__internal_d082ae8c27f38477c141da4da1275281f8d6f3fe63bed00a47eca9a4b207859f_prof);

    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c416797fd9b161061dc7aaf559d90a189a131506e4084883644c8c3a0ce3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c416797fd9b161061dc7aaf559d90a189a131506e4084883644c8c3a0ce3c1->enter($__internal_a9c416797fd9b161061dc7aaf559d90a189a131506e4084883644c8c3a0ce3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9c416797fd9b161061dc7aaf559d90a189a131506e4084883644c8c3a0ce3c1->leave($__internal_a9c416797fd9b161061dc7aaf559d90a189a131506e4084883644c8c3a0ce3c1_prof);

    }

    // line 360
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee7f9776ace054978b83e67c404ecc4e697d4247c3635cace5d70dc7c89f267c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee7f9776ace054978b83e67c404ecc4e697d4247c3635cace5d70dc7c89f267c->enter($__internal_ee7f9776ace054978b83e67c404ecc4e697d4247c3635cace5d70dc7c89f267c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ee7f9776ace054978b83e67c404ecc4e697d4247c3635cace5d70dc7c89f267c->leave($__internal_ee7f9776ace054978b83e67c404ecc4e697d4247c3635cace5d70dc7c89f267c_prof);

    }

    public function getTemplateName()
    {
        return "SUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 360,  593 => 132,  586 => 129,  580 => 128,  569 => 24,  558 => 8,  546 => 361,  544 => 360,  505 => 324,  500 => 322,  493 => 318,  489 => 317,  434 => 265,  426 => 260,  350 => 186,  340 => 179,  336 => 178,  332 => 177,  328 => 176,  324 => 175,  315 => 168,  313 => 167,  296 => 153,  290 => 150,  271 => 133,  269 => 132,  265 => 130,  263 => 128,  258 => 125,  252 => 123,  250 => 122,  240 => 114,  234 => 111,  228 => 108,  225 => 107,  219 => 104,  211 => 99,  207 => 97,  205 => 96,  197 => 91,  192 => 88,  184 => 84,  177 => 81,  175 => 80,  166 => 74,  160 => 71,  153 => 66,  146 => 62,  141 => 60,  137 => 59,  128 => 55,  124 => 54,  119 => 51,  117 => 50,  112 => 48,  108 => 47,  104 => 46,  81 => 25,  79 => 24,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  38 => 9,  36 => 8,  27 => 1,);
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
                        <li><a href=\"#\">Ma Boutique Personnelle</a></li>
                        <li><a href=\"#\">Mes Évènements</a></li>
                        <li><a href=\"#\">Mes Espaces</a></li>
                        <li><a href=\"{{ path('affiche_wishlist') }}\">Ma Wishlist</a></li>
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
                        <li class=\"mega-menu\"><a href=\"#\">
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
                        <li class=\"mega-menu\"><a href=\"#\">
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
                                <li><a href=\"{{ path('social_check_profile',{'id':app.user.id}) ~ '#tab-spaces'}}\">Mes Espaces</a></li>
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
                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class=\"spost clearfix\">
                                    <div class=\"entry-c\">
                                        <div class=\"entry-title\">
                                            <h4><a href=\"#\">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class=\"entry-meta\">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
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


", "SUserBundle::layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/layout.html.twig");
    }
}
