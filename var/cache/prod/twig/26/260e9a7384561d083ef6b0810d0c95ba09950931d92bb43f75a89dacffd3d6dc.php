<?php

/* SocialBundle:Default:index.html.twig */
class __TwigTemplate_75da732cbec7e7e2bff9276a6ea8d9adb693addaf62f85dc941a159f157d84fb extends Twig_Template
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
        $__internal_c880178cb7811eb38167b933e874f832a1009bce38ba601ddafe2c101222acdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c880178cb7811eb38167b933e874f832a1009bce38ba601ddafe2c101222acdc->enter($__internal_c880178cb7811eb38167b933e874f832a1009bce38ba601ddafe2c101222acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c880178cb7811eb38167b933e874f832a1009bce38ba601ddafe2c101222acdc->leave($__internal_c880178cb7811eb38167b933e874f832a1009bce38ba601ddafe2c101222acdc_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe685f383d56384ed6006ff68699b1cd614514f5921b2484fc130a980d5a136a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe685f383d56384ed6006ff68699b1cd614514f5921b2484fc130a980d5a136a->enter($__internal_fe685f383d56384ed6006ff68699b1cd614514f5921b2484fc130a980d5a136a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fe685f383d56384ed6006ff68699b1cd614514f5921b2484fc130a980d5a136a->leave($__internal_fe685f383d56384ed6006ff68699b1cd614514f5921b2484fc130a980d5a136a_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a5b0c510f7c1f489f7771687f1081f908d12298e55d8a835185606b30ae845a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a5b0c510f7c1f489f7771687f1081f908d12298e55d8a835185606b30ae845a->enter($__internal_1a5b0c510f7c1f489f7771687f1081f908d12298e55d8a835185606b30ae845a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1a5b0c510f7c1f489f7771687f1081f908d12298e55d8a835185606b30ae845a->leave($__internal_1a5b0c510f7c1f489f7771687f1081f908d12298e55d8a835185606b30ae845a_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_6acef5b69e00517cef16b34ae9139e88a7972f163b58c17203a85699042e3570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6acef5b69e00517cef16b34ae9139e88a7972f163b58c17203a85699042e3570->enter($__internal_6acef5b69e00517cef16b34ae9139e88a7972f163b58c17203a85699042e3570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6acef5b69e00517cef16b34ae9139e88a7972f163b58c17203a85699042e3570->leave($__internal_6acef5b69e00517cef16b34ae9139e88a7972f163b58c17203a85699042e3570_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_71cdba67c1a51483bb8fb22d6f0c1861410c33bbee27e20f3f44437be1c187c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71cdba67c1a51483bb8fb22d6f0c1861410c33bbee27e20f3f44437be1c187c8->enter($__internal_71cdba67c1a51483bb8fb22d6f0c1861410c33bbee27e20f3f44437be1c187c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_71cdba67c1a51483bb8fb22d6f0c1861410c33bbee27e20f3f44437be1c187c8->leave($__internal_71cdba67c1a51483bb8fb22d6f0c1861410c33bbee27e20f3f44437be1c187c8_prof);

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
        return array (  194 => 94,  187 => 90,  181 => 87,  176 => 84,  170 => 83,  159 => 78,  135 => 57,  127 => 52,  123 => 51,  112 => 42,  109 => 41,  103 => 40,  68 => 11,  62 => 10,  50 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
