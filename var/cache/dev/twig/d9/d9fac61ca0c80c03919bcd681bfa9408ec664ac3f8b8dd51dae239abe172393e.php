<?php

/* CommandeBundle:Panier:base.html.twig */
class __TwigTemplate_54e2aefe5236fa5a790f39029067ac33d8a7053afe00f32c500bbbe308fdf43a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdc98cebce55597caa2708fd5146208bd561412d3f8ac6e1d8de7deb3a5c54ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdc98cebce55597caa2708fd5146208bd561412d3f8ac6e1d8de7deb3a5c54ee->enter($__internal_fdc98cebce55597caa2708fd5146208bd561412d3f8ac6e1d8de7deb3a5c54ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:base.html.twig"));

        $__internal_9269c48ad07aaa9e558c10c37da6e170b0c1c926046807c27321fba571d85cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9269c48ad07aaa9e558c10c37da6e170b0c1c926046807c27321fba571d85cc3->enter($__internal_9269c48ad07aaa9e558c10c37da6e170b0c1c926046807c27321fba571d85cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommandeBundle:Panier:base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from bootstraplovers.com/bootstrap4/resto-2.1/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 19:54:08 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
<body>
<!--===============main navigation + top bar==========================-->
<header class=\"header header-top-transparent\">
    <!--top bar-->
    <div class=\"top-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 hidden-sm-down\">
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a href=\"javascript:void(0)\"><i class=\"ion-ios-telephone\"></i> +216 20 748 765</a></li>
                        <li class=\"list-inline-item\"><a href=\"javascript:void(0)\"><i class=\"ion-email\"></i> Cupcake.Industries@gmail.com</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-6 text-right\">
                    <ul class=\"list-inline level-2\">
                        <li class=\"b-table list-inline-item\"><a href=\"#\" class=\" waves-float waves-button\">Book a Cake</a></li>
                        <li class=\"lang list-inline-item\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Lang </a>
                            <ul class=\"dropdown-menu lang-dropdown\">
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/spanish.png"), "html", null, true);
        echo "\" alt=\"Spanish\">Spanish</a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/italy.png"), "html", null, true);
        echo "\" alt=\"Italian\">Italian</a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/german.png"), "html", null, true);
        echo "\" alt=\"German\">German</a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/fr.png"), "html", null, true);
        echo "\" alt=\"French\">French</a></li>
                                <li><a href=\"javascript:void(0)\"><span><img class=\"flag\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/usa-flag.png"), "html", null, true);
        echo "\" alt=\"English\">English</span></a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/jp.png"), "html", null, true);
        echo "\" alt=\"Japanise\">Japanise</a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/in.png"), "html", null, true);
        echo "\" alt=\"Hindi\">Hindi</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end top bar-->
    <!--main navigation-->
    <nav class=\"navbar navbar-light navbar-expand-lg navbar-static-top sticky-header\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" aria-label=\"Toggle navigation\" class=\"navbar-toggler navbar-toggler-right collapsed\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-expanded=\"false\" aria-controls=\"navbarNavDropdown\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">

                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-light.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-default\">
                    <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo-dark.png"), "html", null, true);
        echo "\" alt=\"logo\" class=\"logo-scroll\">

                </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("");
        echo "\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("");
        echo "\">Produits</a></li>
                    ";
        // line 61
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 62
            echo "                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ", Deconnexion</a></li>
                    ";
        } else {
            // line 64
            echo "                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Inscription</a></li>
                    ";
        }
        // line 67
        echo "                </ul>
            </div><!--/.nav-collapse -->
<div class=\"float-right cart-nav nav-item\">
    <div class=\"dropdown\">
        <a href=\"javascript:void(0)\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"ion-ios-cart\"></i>

            <span class=\"badge badge-primary\" id=\"nbrproduits\" name=\"nbproduits\"> 0</span></a>

        <ul class=\"dropdown-menu dropdown-menu-right dropdown-cart\">
            <li>
                <ul class=\"list-unstyled\">
                    <!--
                                <li class=\"clearfix\">
                                    <a href=\"#\" class=\"float-left\">
                                        <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/img-2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\" width=\"60\">
                                    </a>
                                    <div class=\"oHidden\">
                                        <span class=\"close\"><i class=\"ion-ios-close-outline\"></i></span>
                                        <h4><a href=\"#\">Product Title</a></h4>
                                        <p class=\"text-white-gray\"><strong>\$299.00</strong> x 1</p>
                                    </div>
                                </li>
-->
                    <li class=\"clearfix\">

                        <div class=\"float-right\">
                            <a href=\"#\" class=\"btn btn-primary\" id=\"panier\">Au panier</a>
                        </div>
                        <h4>
                            <!--  <small>Subtotal - </small> \$49.99-->
                        </h4>
                    </li><!--/cart item-->
                </ul>
            </li>
        </ul>
    </div>
</div>
</div>
</nav>
</header>
";
        // line 107
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "
<script>
    jQuery(document).ready(function () {
        jQuery(\"#slider1\").revolution({
            sliderType: \"standard\",
            jsFileLocation: \"../../revolution/js/\",
            sliderLayout: \"fullscreen\",
            dottedOverlay: \"none\",
            delay: 9000,
            navigation: {
                arrows: {enable: true}
            },
            parallax: {
                type: \"on\",
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                origo: \"enterpoint\",
                speed: 400,
                bgparallax: \"on\",
                disable_onmobile: \"off\"
            },
            gridwidth: 1170,
            gridheight: 600
        });
    });
</script>
</body>
</html>
";
        
        $__internal_fdc98cebce55597caa2708fd5146208bd561412d3f8ac6e1d8de7deb3a5c54ee->leave($__internal_fdc98cebce55597caa2708fd5146208bd561412d3f8ac6e1d8de7deb3a5c54ee_prof);

        
        $__internal_9269c48ad07aaa9e558c10c37da6e170b0c1c926046807c27321fba571d85cc3->leave($__internal_9269c48ad07aaa9e558c10c37da6e170b0c1c926046807c27321fba571d85cc3_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2fb83f26e7434b824e2a943a635af1b7059d42a8e6e9b45be2d2888ef47b18d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fb83f26e7434b824e2a943a635af1b7059d42a8e6e9b45be2d2888ef47b18d9->enter($__internal_2fb83f26e7434b824e2a943a635af1b7059d42a8e6e9b45be2d2888ef47b18d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d6d0e8e168ba7017a9061458efc4e6166dea2dcaca16e436b2e4ba33681b5bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d0e8e168ba7017a9061458efc4e6166dea2dcaca16e436b2e4ba33681b5bfa->enter($__internal_d6d0e8e168ba7017a9061458efc4e6166dea2dcaca16e436b2e4ba33681b5bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d6d0e8e168ba7017a9061458efc4e6166dea2dcaca16e436b2e4ba33681b5bfa->leave($__internal_d6d0e8e168ba7017a9061458efc4e6166dea2dcaca16e436b2e4ba33681b5bfa_prof);

        
        $__internal_2fb83f26e7434b824e2a943a635af1b7059d42a8e6e9b45be2d2888ef47b18d9->leave($__internal_2fb83f26e7434b824e2a943a635af1b7059d42a8e6e9b45be2d2888ef47b18d9_prof);

    }

    public function getTemplateName()
    {
        return "CommandeBundle:Panier:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 107,  188 => 108,  186 => 107,  157 => 81,  141 => 67,  136 => 65,  131 => 64,  123 => 62,  121 => 61,  117 => 60,  113 => 59,  104 => 53,  100 => 52,  79 => 34,  75 => 33,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  55 => 28,  26 => 1,);
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
<html lang=\"en\">

<!-- Mirrored from bootstraplovers.com/bootstrap4/resto-2.1/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Feb 2018 19:54:08 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
</head>
<body>
<!--===============main navigation + top bar==========================-->
<header class=\"header header-top-transparent\">
    <!--top bar-->
    <div class=\"top-bar\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6 hidden-sm-down\">
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item\"><a href=\"javascript:void(0)\"><i class=\"ion-ios-telephone\"></i> +216 20 748 765</a></li>
                        <li class=\"list-inline-item\"><a href=\"javascript:void(0)\"><i class=\"ion-email\"></i> Cupcake.Industries@gmail.com</a></li>
                    </ul>
                </div>
                <div class=\"col-sm-6 text-right\">
                    <ul class=\"list-inline level-2\">
                        <li class=\"b-table list-inline-item\"><a href=\"#\" class=\" waves-float waves-button\">Book a Cake</a></li>
                        <li class=\"lang list-inline-item\"><a href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">Lang </a>
                            <ul class=\"dropdown-menu lang-dropdown\">
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"{{asset('assets/images/spanish.png')}}\" alt=\"Spanish\">Spanish</a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"{{asset('assets/images/italy.png')}}\" alt=\"Italian\">Italian</a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"{{asset('assets/images/german.png')}}\" alt=\"German\">German</a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"{{asset('assets/images/fr.png')}}\" alt=\"French\">French</a></li>
                                <li><a href=\"javascript:void(0)\"><span><img class=\"flag\" src=\"{{asset('assets/images/usa-flag.png')}}\" alt=\"English\">English</span></a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"{{asset('assets/images/jp.png')}}\" alt=\"Japanise\">Japanise</a></li>
                                <li><a href=\"javascript:void(0)\"><img class=\"flag\" src=\"{{asset('assets/images/in.png')}}\" alt=\"Hindi\">Hindi</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end top bar-->
    <!--main navigation-->
    <nav class=\"navbar navbar-light navbar-expand-lg navbar-static-top sticky-header\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" aria-label=\"Toggle navigation\" class=\"navbar-toggler navbar-toggler-right collapsed\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-expanded=\"false\" aria-controls=\"navbarNavDropdown\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">

                    <img src=\"{{asset('assets/images/logo-light.png')}}\" alt=\"logo\" class=\"logo-default\">
                    <img src=\"{{asset('assets/images/logo-dark.png')}}\" alt=\"logo\" class=\"logo-scroll\">

                </a>
            </div>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav ml-auto\">
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('') }}\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('') }}\">Produits</a></li>
                    {% if app.user %}
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_security_logout') }}\">{{ app.user.username }}, Deconnexion</a></li>
                    {%  else %}
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_security_login') }}\">Connexion</a></li>
                        <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('fos_user_registration_register') }}\">Inscription</a></li>
                    {%  endif %}
                </ul>
            </div><!--/.nav-collapse -->
<div class=\"float-right cart-nav nav-item\">
    <div class=\"dropdown\">
        <a href=\"javascript:void(0)\" class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"ion-ios-cart\"></i>

            <span class=\"badge badge-primary\" id=\"nbrproduits\" name=\"nbproduits\"> 0</span></a>

        <ul class=\"dropdown-menu dropdown-menu-right dropdown-cart\">
            <li>
                <ul class=\"list-unstyled\">
                    <!--
                                <li class=\"clearfix\">
                                    <a href=\"#\" class=\"float-left\">
                                        <img src=\"{{asset('assets/images/img-2.jpg')}}\" class=\"img-fluid\" alt=\"\" width=\"60\">
                                    </a>
                                    <div class=\"oHidden\">
                                        <span class=\"close\"><i class=\"ion-ios-close-outline\"></i></span>
                                        <h4><a href=\"#\">Product Title</a></h4>
                                        <p class=\"text-white-gray\"><strong>\$299.00</strong> x 1</p>
                                    </div>
                                </li>
-->
                    <li class=\"clearfix\">

                        <div class=\"float-right\">
                            <a href=\"#\" class=\"btn btn-primary\" id=\"panier\">Au panier</a>
                        </div>
                        <h4>
                            <!--  <small>Subtotal - </small> \$49.99-->
                        </h4>
                    </li><!--/cart item-->
                </ul>
            </li>
        </ul>
    </div>
</div>
</div>
</nav>
</header>
{% block javascripts %}{% endblock %}

<script>
    jQuery(document).ready(function () {
        jQuery(\"#slider1\").revolution({
            sliderType: \"standard\",
            jsFileLocation: \"../../revolution/js/\",
            sliderLayout: \"fullscreen\",
            dottedOverlay: \"none\",
            delay: 9000,
            navigation: {
                arrows: {enable: true}
            },
            parallax: {
                type: \"on\",
                levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65, 70, 75, 80, 85],
                origo: \"enterpoint\",
                speed: 400,
                bgparallax: \"on\",
                disable_onmobile: \"off\"
            },
            gridwidth: 1170,
            gridheight: 600
        });
    });
</script>
</body>
</html>
", "CommandeBundle:Panier:base.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/CommandeBundle/Resources/views/Panier/base.html.twig");
    }
}
