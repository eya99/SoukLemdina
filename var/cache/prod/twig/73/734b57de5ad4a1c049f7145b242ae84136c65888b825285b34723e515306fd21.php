<?php

/* SocialBundle:Default:index.html.twig */
class __TwigTemplate_54e70965fdaaae32dec525b8c77e640c3d33b69be642127107a37229e765674d extends Twig_Template
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
        $__internal_63c0a771caa227df1c1e58bc899ff16de66cf79861cbab4b168803707c40104c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63c0a771caa227df1c1e58bc899ff16de66cf79861cbab4b168803707c40104c->enter($__internal_63c0a771caa227df1c1e58bc899ff16de66cf79861cbab4b168803707c40104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63c0a771caa227df1c1e58bc899ff16de66cf79861cbab4b168803707c40104c->leave($__internal_63c0a771caa227df1c1e58bc899ff16de66cf79861cbab4b168803707c40104c_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_77ac6dd42ece902c63c19b6d55c56687812fca9cc3725ed52ee29c83acd2b7dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ac6dd42ece902c63c19b6d55c56687812fca9cc3725ed52ee29c83acd2b7dc->enter($__internal_77ac6dd42ece902c63c19b6d55c56687812fca9cc3725ed52ee29c83acd2b7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_77ac6dd42ece902c63c19b6d55c56687812fca9cc3725ed52ee29c83acd2b7dc->leave($__internal_77ac6dd42ece902c63c19b6d55c56687812fca9cc3725ed52ee29c83acd2b7dc_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_224b71e49f4e13c7c81e3bef515762e3342cbf7e0c8ac6c78839344989109c58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224b71e49f4e13c7c81e3bef515762e3342cbf7e0c8ac6c78839344989109c58->enter($__internal_224b71e49f4e13c7c81e3bef515762e3342cbf7e0c8ac6c78839344989109c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_224b71e49f4e13c7c81e3bef515762e3342cbf7e0c8ac6c78839344989109c58->leave($__internal_224b71e49f4e13c7c81e3bef515762e3342cbf7e0c8ac6c78839344989109c58_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbc2265be1f3d0e8d7d3f8dbfd7f1887f0f5b217a5d3b77f87713b95a3ba859c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc2265be1f3d0e8d7d3f8dbfd7f1887f0f5b217a5d3b77f87713b95a3ba859c->enter($__internal_cbc2265be1f3d0e8d7d3f8dbfd7f1887f0f5b217a5d3b77f87713b95a3ba859c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SocialBundle:Default:posts", array("deb" => 0, "fin" => 3)));
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
        
        $__internal_cbc2265be1f3d0e8d7d3f8dbfd7f1887f0f5b217a5d3b77f87713b95a3ba859c->leave($__internal_cbc2265be1f3d0e8d7d3f8dbfd7f1887f0f5b217a5d3b77f87713b95a3ba859c_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5ee461368b6c081133f94a84fd8aa08b49a2164580ec422aa3d8d4040e5de210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee461368b6c081133f94a84fd8aa08b49a2164580ec422aa3d8d4040e5de210->enter($__internal_5ee461368b6c081133f94a84fd8aa08b49a2164580ec422aa3d8d4040e5de210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script>
        deb = 0;
        fin = 1;
        var pathToRedirect = '";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_postsAX_home", array("deb" => "ABC", "fin" => "DEF")), "html", null, true);
        echo "';
        \$(window).scroll(function () {
            if (\$(window).scrollTop() + \$(window).height() >= \$(document).height()-700) {
                if (fin + 1 <= ";
        // line 90
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) - 1), "html", null, true);
        echo ") {
                    deb = fin + 1;
                    fin = deb + 1;
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
        
        $__internal_5ee461368b6c081133f94a84fd8aa08b49a2164580ec422aa3d8d4040e5de210->leave($__internal_5ee461368b6c081133f94a84fd8aa08b49a2164580ec422aa3d8d4040e5de210_prof);

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
        return array (  187 => 90,  181 => 87,  176 => 84,  170 => 83,  159 => 78,  135 => 57,  127 => 52,  123 => 51,  112 => 42,  109 => 41,  103 => 40,  68 => 11,  62 => 10,  50 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
                                        {{ render(controller('SocialBundle:Default:posts',{'deb': 0,'fin': 3})) }}
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
        fin = 1;
        var pathToRedirect = '{{ path('social_postsAX_home', {'deb': 'ABC','fin':'DEF'} ) }}';
        \$(window).scroll(function () {
            if (\$(window).scrollTop() + \$(window).height() >= \$(document).height()-700) {
                if (fin + 1 <= {{ (posts|length - 1) }}) {
                    deb = fin + 1;
                    fin = deb + 1;
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
