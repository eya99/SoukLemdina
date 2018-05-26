<?php

/* SocialBundle:Default:index.html.twig */
class __TwigTemplate_aca0b50fd72690fe165f0f7cb8a1a5170c18da40a193b9f4c374a6b33d40e82e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "SocialBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96e6e818c73b2e9dca127c2c1c3c933f9d353658226ffbf3c908ac62ca500ad0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e6e818c73b2e9dca127c2c1c3c933f9d353658226ffbf3c908ac62ca500ad0->enter($__internal_96e6e818c73b2e9dca127c2c1c3c933f9d353658226ffbf3c908ac62ca500ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Default:index.html.twig"));

        $__internal_0a4664e19297fbcd307edd3e730d525e581cd89b395f607a85172a50394f4760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4664e19297fbcd307edd3e730d525e581cd89b395f607a85172a50394f4760->enter($__internal_0a4664e19297fbcd307edd3e730d525e581cd89b395f607a85172a50394f4760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e6e818c73b2e9dca127c2c1c3c933f9d353658226ffbf3c908ac62ca500ad0->leave($__internal_96e6e818c73b2e9dca127c2c1c3c933f9d353658226ffbf3c908ac62ca500ad0_prof);

        
        $__internal_0a4664e19297fbcd307edd3e730d525e581cd89b395f607a85172a50394f4760->leave($__internal_0a4664e19297fbcd307edd3e730d525e581cd89b395f607a85172a50394f4760_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_54f6a18e8903a7507ea2cde4b996014ebffb5e38632fa05cedc7c70af5a9e7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54f6a18e8903a7507ea2cde4b996014ebffb5e38632fa05cedc7c70af5a9e7ad->enter($__internal_54f6a18e8903a7507ea2cde4b996014ebffb5e38632fa05cedc7c70af5a9e7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7775aec94ab4224c85ec227ac05b4c10fc90940adbf756b78d9b8eca726eb736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7775aec94ab4224c85ec227ac05b4c10fc90940adbf756b78d9b8eca726eb736->enter($__internal_7775aec94ab4224c85ec227ac05b4c10fc90940adbf756b78d9b8eca726eb736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 4
            echo "        <title>Hdith ElSouk - Publications</title>
    ";
        } else {
            // line 6
            echo "        <meta http-equiv=\"refresh\" content=\"5;url=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"/>
        <title>Visiteur - Non Connecté</title>
    ";
        }
        
        $__internal_7775aec94ab4224c85ec227ac05b4c10fc90940adbf756b78d9b8eca726eb736->leave($__internal_7775aec94ab4224c85ec227ac05b4c10fc90940adbf756b78d9b8eca726eb736_prof);

        
        $__internal_54f6a18e8903a7507ea2cde4b996014ebffb5e38632fa05cedc7c70af5a9e7ad->leave($__internal_54f6a18e8903a7507ea2cde4b996014ebffb5e38632fa05cedc7c70af5a9e7ad_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e71cd0b88e5dfda6036ea8b463517ffe89f87ced16323db9ad73d656a707ca6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71cd0b88e5dfda6036ea8b463517ffe89f87ced16323db9ad73d656a707ca6b->enter($__internal_e71cd0b88e5dfda6036ea8b463517ffe89f87ced16323db9ad73d656a707ca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_400de439169a64bcb8d1f771e0b730ddcd8f01c93d82a74c594e07d9b247cb6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400de439169a64bcb8d1f771e0b730ddcd8f01c93d82a74c594e07d9b247cb6b->enter($__internal_400de439169a64bcb8d1f771e0b730ddcd8f01c93d82a74c594e07d9b247cb6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <style type=\"text/css\">
        .fishes {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1;
        }

        .fish {
            position: absolute;
            top: -5px;
            left: -30px;
            z-index: 2;
        }

        .cccontainer {
            height: 80%;
            width: 96%;
            max-width: 350px;
            max-height: 100px;
            margin: auto; /* to center the container */
        }

        .iiimg {
            width: 100%;
            height: 100%;
        }
    </style>
";
        
        $__internal_400de439169a64bcb8d1f771e0b730ddcd8f01c93d82a74c594e07d9b247cb6b->leave($__internal_400de439169a64bcb8d1f771e0b730ddcd8f01c93d82a74c594e07d9b247cb6b_prof);

        
        $__internal_e71cd0b88e5dfda6036ea8b463517ffe89f87ced16323db9ad73d656a707ca6b->leave($__internal_e71cd0b88e5dfda6036ea8b463517ffe89f87ced16323db9ad73d656a707ca6b_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9b4b5e5ec2daece54f487160af627d1510586316eb79846750347b678bdf144 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b4b5e5ec2daece54f487160af627d1510586316eb79846750347b678bdf144->enter($__internal_c9b4b5e5ec2daece54f487160af627d1510586316eb79846750347b678bdf144_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4699ee1bc14ee2d1a02cdcf094c6f34c947aa8ab8f21c19671844e3c99b66482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4699ee1bc14ee2d1a02cdcf094c6f34c947aa8ab8f21c19671844e3c99b66482->enter($__internal_4699ee1bc14ee2d1a02cdcf094c6f34c947aa8ab8f21c19671844e3c99b66482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 41
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 42
            echo "        <br><br>
        <section id=\"content\">

            <div class=\"container clearfix\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-9\">
                        <div class=\"row clearfix\">
                            <div class=\"col-md-12\">
                                <div class=\"col-xs-12 bottommargin-sm\">
                                    ";
            // line 51
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "
                                    ";
            // line 52
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                                </div>

                                <div class=\"tab-content clearfix\" id=\"tab-posts\">
                                    <div class=\"row topmargin-sm clearfix\" id=\"zidni\">
                                        ";
            // line 57
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SocialBundle:Default:posts", array("deb" => 0, "fin" => 2)));
            echo "
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class=\"line visible-xs-block\"></div>

            </div>

            </div>
            <div><br><br><br></div>

        </section>
    ";
        } else {
            // line 78
            echo "        <br>
        Vous devez vous connecter avant d'accéder à l'accueil du hdith essouk.
        <br>
    ";
        }
        
        $__internal_4699ee1bc14ee2d1a02cdcf094c6f34c947aa8ab8f21c19671844e3c99b66482->leave($__internal_4699ee1bc14ee2d1a02cdcf094c6f34c947aa8ab8f21c19671844e3c99b66482_prof);

        
        $__internal_c9b4b5e5ec2daece54f487160af627d1510586316eb79846750347b678bdf144->leave($__internal_c9b4b5e5ec2daece54f487160af627d1510586316eb79846750347b678bdf144_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c80a60a2fc493ece456ffe5ff3f384ee8f24460a07a974ea420e300bb1b0c368 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c80a60a2fc493ece456ffe5ff3f384ee8f24460a07a974ea420e300bb1b0c368->enter($__internal_c80a60a2fc493ece456ffe5ff3f384ee8f24460a07a974ea420e300bb1b0c368_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_eb22cedcaa0e62261257f893bd0adce8108fb9a1fde4ed66d0393cce3cace652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb22cedcaa0e62261257f893bd0adce8108fb9a1fde4ed66d0393cce3cace652->enter($__internal_eb22cedcaa0e62261257f893bd0adce8108fb9a1fde4ed66d0393cce3cace652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script>
        deb = 0;
        fin = 2;
        var pathToRedirect = '";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_postsAX_home", array("deb" => "ABC", "fin" => "DEF")), "html", null, true);
        echo "';
        \$(window).scroll(function () {
            if (\$(window).scrollTop() + \$(window).height() >= \$(document).height() - 700) {
                if (fin + 1 <= ";
        // line 90
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) - 1), "html", null, true);
        echo ") {
                    deb = fin + 1;
                    fin = deb;
                }
                if (fin + 1 <= ";
        // line 94
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) - 1), "html", null, true);
        echo ") {
                    fin = fin + 1;
                }
                else {
                    return 0;
                }
                var finalPath = pathToRedirect.replace(\"ABC\", deb).replace(\"DEF\", fin);
                getmoredata(finalPath);
            }
        });

        function getmoredata(finalPath) {
            \$.ajax({
                type: 'POST',
                url: finalPath,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (response) {
                    \$(\"#zidni\").append(response);
                    console.log(response);
                }
            });
        }
    </script>
    <script>
        jQuery(\"#tabs-profile\").on(\"tabsactivate\", function (event, ui) {
            jQuery('.flexslider .slide').resize();
        });
    </script>
";
        
        $__internal_eb22cedcaa0e62261257f893bd0adce8108fb9a1fde4ed66d0393cce3cace652->leave($__internal_eb22cedcaa0e62261257f893bd0adce8108fb9a1fde4ed66d0393cce3cace652_prof);

        
        $__internal_c80a60a2fc493ece456ffe5ff3f384ee8f24460a07a974ea420e300bb1b0c368->leave($__internal_c80a60a2fc493ece456ffe5ff3f384ee8f24460a07a974ea420e300bb1b0c368_prof);

    }

    public function getTemplateName()
    {
        return "SocialBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 94,  214 => 90,  208 => 87,  203 => 84,  194 => 83,  180 => 78,  156 => 57,  148 => 52,  144 => 51,  133 => 42,  130 => 41,  121 => 40,  83 => 11,  74 => 10,  59 => 6,  55 => 4,  52 => 3,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SUserBundle::layout.html.twig\" %}
{% block head %}
    {% if is_granted(\"ROLE_USER\") %}
        <title>Hdith ElSouk - Publications</title>
    {% else %}
        <meta http-equiv=\"refresh\" content=\"5;url={{ path('fos_user_security_login') }}\"/>
        <title>Visiteur - Non Connecté</title>
    {% endif %}
{% endblock %}
{% block stylesheets %}
    <style type=\"text/css\">
        .fishes {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1;
        }

        .fish {
            position: absolute;
            top: -5px;
            left: -30px;
            z-index: 2;
        }

        .cccontainer {
            height: 80%;
            width: 96%;
            max-width: 350px;
            max-height: 100px;
            margin: auto; /* to center the container */
        }

        .iiimg {
            width: 100%;
            height: 100%;
        }
    </style>
{% endblock %}
{% block body %}
    {% if is_granted(\"ROLE_USER\") %}
        <br><br>
        <section id=\"content\">

            <div class=\"container clearfix\">
                <div class=\"row clearfix\">
                    <div class=\"col-sm-9\">
                        <div class=\"row clearfix\">
                            <div class=\"col-md-12\">
                                <div class=\"col-xs-12 bottommargin-sm\">
                                    {{ form_start(form) }}
                                    {{ form_end(form) }}
                                </div>

                                <div class=\"tab-content clearfix\" id=\"tab-posts\">
                                    <div class=\"row topmargin-sm clearfix\" id=\"zidni\">
                                        {{ render(controller('SocialBundle:Default:posts',{'deb': 0,'fin': 2})) }}
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <div class=\"line visible-xs-block\"></div>

            </div>

            </div>
            <div><br><br><br></div>

        </section>
    {% else %}
        <br>
        Vous devez vous connecter avant d'accéder à l'accueil du hdith essouk.
        <br>
    {% endif %}
{% endblock %}
{% block javascripts %}
    <script>
        deb = 0;
        fin = 2;
        var pathToRedirect = '{{ path('social_postsAX_home', {'deb': 'ABC','fin':'DEF'} ) }}';
        \$(window).scroll(function () {
            if (\$(window).scrollTop() + \$(window).height() >= \$(document).height() - 700) {
                if (fin + 1 <= {{ (posts|length - 1) }}) {
                    deb = fin + 1;
                    fin = deb;
                }
                if (fin + 1 <= {{ (posts|length - 1) }}) {
                    fin = fin + 1;
                }
                else {
                    return 0;
                }
                var finalPath = pathToRedirect.replace(\"ABC\", deb).replace(\"DEF\", fin);
                getmoredata(finalPath);
            }
        });

        function getmoredata(finalPath) {
            \$.ajax({
                type: 'POST',
                url: finalPath,
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function (response) {
                    \$(\"#zidni\").append(response);
                    console.log(response);
                }
            });
        }
    </script>
    <script>
        jQuery(\"#tabs-profile\").on(\"tabsactivate\", function (event, ui) {
            jQuery('.flexslider .slide').resize();
        });
    </script>
{% endblock %}", "SocialBundle:Default:index.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Default/index.html.twig");
    }
}
