<?php

/* SUserBundle::layout.html.twig */
class __TwigTemplate_8de989f6d831a9252b6dfef2ec9f4b3efeadd08eeeebee2809f287ec5d58d505 extends Twig_Template
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
        $__internal_19a44febf420ee26bfafee19da58b060c7298360f096c28ff6184933205d7aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a44febf420ee26bfafee19da58b060c7298360f096c28ff6184933205d7aa6->enter($__internal_19a44febf420ee26bfafee19da58b060c7298360f096c28ff6184933205d7aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SUserBundle::layout.html.twig"));

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
                        <li><a href=\"#\">Ma Boutique Personnelle</a></li>
                        <li><a href=\"#\">Mes Évènements</a></li>
                        <li><a href=\"#\">Mes Espaces</a></li>
                        <li><a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_wishlist");
            echo "\">Ma Wishlist</a></li>
                        <li><a href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Paramètres</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnecter<i class=\"icon-signout\"></i></a></li>
                    </ul>
                </div>
                ";
        }
        // line 71
        echo "                <!-- Primary Navigation
                ============================================= -->
                <nav id=\"primary-menu\">

                    <ul>
                        <li class=\"mega-menu\"><a href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\">
                                <div>Accueil</div>
                            </a></li>
                        <li><a href=\"";
        // line 79
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_homepage");
        echo "\">
                                <div>Hdith ElSouk</div>
                            </a></li>
                        <li class=\"mega-menu\"><a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheEvent");
        echo "\">
                                <div>Évènements</div>
                            </a></li>
                        ";
        // line 85
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 86
            echo "                            <li class=\"mega-menu\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheWorkshop");
            echo "\">
                            <div>Ateliers</div>
                        ";
        } else {
            // line 89
            echo "                            <li class=\"mega-menu\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheVisitWorkshop");
            echo "\">
                                    <div>Ateliers</div>
                                </a></li>
                        ";
        }
        // line 93
        echo "                        <li class=\"mega-menu\"><a href=\"#\">
                                <div>Explore</div>
                            </a></li>
                        <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("affiche_produits");
        echo "\">
                                <div>Boutique En Ligne</div>
                            </a></li>
                    </ul>

                    ";
        // line 101
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 102
            echo "                        <div id=\"top-search\">
                            <a href=\"#\" title=\"Rechercher Artisans\" id=\"top-search-trigger\"><i class=\"icon-search3\"></i><i class=\" icon-line-cross\"></i></a>
                            <form action=\"";
            // line 104
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_recherche_profile");
            echo "\" method=\"post\">
                                <input type=\"text\" name=\"q\" class=\"form-control\" value=\"\" placeholder=\"Écrire &amp; Appuyer Entrer..\">
                            </form>
                        </div>
                        <div id=\"top-cart\">
                            <a href=\"";
            // line 109
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\"><i class=\" icon-external-link\"></i></a>
                        </div>
                    ";
        } else {
            // line 112
            echo "                        <div id=\"top-cart\">
                            <a href=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\"><i class=\" icon-user\"></i></a>
                        </div>
                        <div id=\"top-cart\">
                            <a href=\"";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\" icon-download\"></i></a>
                        </div>
                    ";
        }
        // line 119
        echo "
                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->
    ";
        // line 127
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 128
            echo "        ";
            echo $this->env->getExtension('Mgilet\NotificationBundle\Twig\NotificationExtension')->render($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), array("template" => "StockBundle::notification_list.html.twig"));
            echo "
    ";
        }
        // line 130
        echo "    <br>

    <div>
        ";
        // line 133
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 135
        echo "    </div>

    ";
        // line 137
        $this->displayBlock('body', $context, $blocks);
        // line 138
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
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/app.png"), "html", null, true);
        echo "\" height=\"87\" width=\"78\" alt=\"\"
                                 class=\"footer-logo\">

                            <div style=\"background: url('";
        // line 158
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
        // line 172
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 173
            echo "                    <div class=\"col_one_third\">

                        <div class=\"widget widget_links clearfix\">

                            <h4>Mon Profile</h4>

                            <ul>
                                <li><a href=\"";
            // line 180
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Mes Publications</a></li>
                                <li><a href=\"";
            // line 181
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) . "#tab-events"), "html", null, true);
            echo "\">Mes Évènements</a></li>
                                <li><a href=\"";
            // line 182
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) . "#tab-spaces"), "html", null, true);
            echo "\">Mes Espaces</a></li>
                                <li><a href=\"";
            // line 183
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Paramètres du Compte</a></li>
                                <li><a href=\"";
            // line 184
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnecter</a></li>
                            </ul>

                        </div>

                    </div>
                    ";
        }
        // line 191
        echo "
                    <div class=\"col_one_third col_last\">

                        <div class=\"widget clearfix\">
                            <h4>Évènements Récents</h4>

                            <div id=\"post-list-footer\">
                                ";
        // line 198
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
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/logos/team-onblack.png"), "html", null, true);
        echo "\" width=\"200\"
                                     alt=\"Logo CodeBusters\">
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <a href=\"http://esprit.tn\">
                                <img src=\"";
        // line 239
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
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/rating.js"), "html", null, true);
        echo "\"></script>
<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>
<!-- Bootstrap Switch Plugin -->
<script type=\"text/javascript\" src=\"";
        // line 298
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
        // line 334
        $this->displayBlock('javascripts', $context, $blocks);
        // line 335
        echo "
</body>
</html>


";
        
        $__internal_19a44febf420ee26bfafee19da58b060c7298360f096c28ff6184933205d7aa6->leave($__internal_19a44febf420ee26bfafee19da58b060c7298360f096c28ff6184933205d7aa6_prof);

    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        $__internal_9a73986546dbd82541884375267a30b35f49584586832b6a3c78cd8e481152f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a73986546dbd82541884375267a30b35f49584586832b6a3c78cd8e481152f6->enter($__internal_9a73986546dbd82541884375267a30b35f49584586832b6a3c78cd8e481152f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9a73986546dbd82541884375267a30b35f49584586832b6a3c78cd8e481152f6->leave($__internal_9a73986546dbd82541884375267a30b35f49584586832b6a3c78cd8e481152f6_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f8073aa0c917d570d15d8e92d41bbd6795db10c9b46b38006a2b4dd63ba3756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f8073aa0c917d570d15d8e92d41bbd6795db10c9b46b38006a2b4dd63ba3756->enter($__internal_4f8073aa0c917d570d15d8e92d41bbd6795db10c9b46b38006a2b4dd63ba3756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4f8073aa0c917d570d15d8e92d41bbd6795db10c9b46b38006a2b4dd63ba3756->leave($__internal_4f8073aa0c917d570d15d8e92d41bbd6795db10c9b46b38006a2b4dd63ba3756_prof);

    }

    // line 133
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ceb4a0059381ffb6e464b9a58acb12ec300cc3d260ff32d3ffebb00aa9452393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb4a0059381ffb6e464b9a58acb12ec300cc3d260ff32d3ffebb00aa9452393->enter($__internal_ceb4a0059381ffb6e464b9a58acb12ec300cc3d260ff32d3ffebb00aa9452393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 134
        echo "        ";
        
        $__internal_ceb4a0059381ffb6e464b9a58acb12ec300cc3d260ff32d3ffebb00aa9452393->leave($__internal_ceb4a0059381ffb6e464b9a58acb12ec300cc3d260ff32d3ffebb00aa9452393_prof);

    }

    // line 137
    public function block_body($context, array $blocks = array())
    {
        $__internal_39fcadeae0b03def149334c67b05dcae3ff231d517b23831f38b62febed3d534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39fcadeae0b03def149334c67b05dcae3ff231d517b23831f38b62febed3d534->enter($__internal_39fcadeae0b03def149334c67b05dcae3ff231d517b23831f38b62febed3d534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39fcadeae0b03def149334c67b05dcae3ff231d517b23831f38b62febed3d534->leave($__internal_39fcadeae0b03def149334c67b05dcae3ff231d517b23831f38b62febed3d534_prof);

    }

    // line 334
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_193103ee81871a635076830a794cdc7d4da5da176ddb5f04d3eb0632eb643378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193103ee81871a635076830a794cdc7d4da5da176ddb5f04d3eb0632eb643378->enter($__internal_193103ee81871a635076830a794cdc7d4da5da176ddb5f04d3eb0632eb643378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_193103ee81871a635076830a794cdc7d4da5da176ddb5f04d3eb0632eb643378->leave($__internal_193103ee81871a635076830a794cdc7d4da5da176ddb5f04d3eb0632eb643378_prof);

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
        return array (  602 => 334,  591 => 137,  584 => 134,  578 => 133,  567 => 29,  556 => 8,  544 => 335,  542 => 334,  503 => 298,  498 => 296,  492 => 293,  488 => 292,  484 => 291,  429 => 239,  421 => 234,  382 => 198,  373 => 191,  363 => 184,  359 => 183,  355 => 182,  351 => 181,  347 => 180,  338 => 173,  336 => 172,  319 => 158,  313 => 155,  294 => 138,  292 => 137,  288 => 135,  286 => 133,  281 => 130,  275 => 128,  273 => 127,  263 => 119,  257 => 116,  251 => 113,  248 => 112,  242 => 109,  234 => 104,  230 => 102,  228 => 101,  220 => 96,  215 => 93,  207 => 89,  200 => 86,  198 => 85,  192 => 82,  186 => 79,  180 => 76,  173 => 71,  166 => 67,  161 => 65,  157 => 64,  148 => 60,  144 => 59,  139 => 56,  137 => 55,  132 => 53,  128 => 52,  124 => 51,  101 => 30,  99 => 29,  93 => 26,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  65 => 19,  61 => 18,  57 => 17,  53 => 16,  49 => 15,  45 => 14,  38 => 9,  36 => 8,  27 => 1,);
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


", "SUserBundle::layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/layout.html.twig");
    }
}
