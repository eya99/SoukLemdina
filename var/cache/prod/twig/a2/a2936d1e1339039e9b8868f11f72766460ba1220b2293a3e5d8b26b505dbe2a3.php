<?php

/* SocialBundle:Profile:check.html.twig */
class __TwigTemplate_325084c37a7dab7b7c86dbfd0ff5540493d55ddff578ab09dbfe43f8891c3903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "SocialBundle:Profile:check.html.twig", 1);
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
        $__internal_739d84103e60ec959bb21ef653b6a2dc105ccad4660c05f07f8dd759bedecedd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739d84103e60ec959bb21ef653b6a2dc105ccad4660c05f07f8dd759bedecedd->enter($__internal_739d84103e60ec959bb21ef653b6a2dc105ccad4660c05f07f8dd759bedecedd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Profile:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_739d84103e60ec959bb21ef653b6a2dc105ccad4660c05f07f8dd759bedecedd->leave($__internal_739d84103e60ec959bb21ef653b6a2dc105ccad4660c05f07f8dd759bedecedd_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_eaa2f4f5f03eb5ce7a2ed727dcf9974c774e9159d8f82214063a95ebffd1570f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa2f4f5f03eb5ce7a2ed727dcf9974c774e9159d8f82214063a95ebffd1570f->enter($__internal_eaa2f4f5f03eb5ce7a2ed727dcf9974c774e9159d8f82214063a95ebffd1570f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 4
            echo "        <title>";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "lastname", array())), "html", null, true);
            echo " - Profile</title>
    ";
        } else {
            // line 6
            echo "        <meta http-equiv=\"refresh\" content=\"5;url=";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"/>
        <title>Visiteur - Non Connecté</title>
    ";
        }
        
        $__internal_eaa2f4f5f03eb5ce7a2ed727dcf9974c774e9159d8f82214063a95ebffd1570f->leave($__internal_eaa2f4f5f03eb5ce7a2ed727dcf9974c774e9159d8f82214063a95ebffd1570f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_617ade38a479da6bf28fd4a6687b835bcd88c25ebba5dab2a138289e47902887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617ade38a479da6bf28fd4a6687b835bcd88c25ebba5dab2a138289e47902887->enter($__internal_617ade38a479da6bf28fd4a6687b835bcd88c25ebba5dab2a138289e47902887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "    <style type=\"text/css\">
        .cccontainer {
            height: 90%;
            width: 96%;
            max-width: 100px;
            max-height: 100px;
            margin: auto; /* to center the container */
        }

        .iiimg {
            width: 25%;
            height: 25%;
        }
    </style>
";
        
        $__internal_617ade38a479da6bf28fd4a6687b835bcd88c25ebba5dab2a138289e47902887->leave($__internal_617ade38a479da6bf28fd4a6687b835bcd88c25ebba5dab2a138289e47902887_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f594fdf30bb569f0f17cbdf1502debb18400b24561c2e1e6a32086493f56d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f594fdf30bb569f0f17cbdf1502debb18400b24561c2e1e6a32086493f56d6f->enter($__internal_7f594fdf30bb569f0f17cbdf1502debb18400b24561c2e1e6a32086493f56d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 28
            echo "        <br><br>
        <section id=\"content\">

            <div class=\"container clearfix\">

                <div class=\"row clearfix\">

                    <div class=\"col-sm-9\">
                        ";
            // line 36
            if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 37
                echo "                        <a title=\"Modifier les paramètres du profile\"
                           href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_modifier_profile", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()))), "html", null, true);
                echo "\">
                            ";
            }
            // line 40
            echo "                            ";
            if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "image", array())) {
                // line 41
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "image", array()))), "html", null, true);
                echo "\" class=\"alignleft img-circle img-thumbnail
                                    notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">
                            ";
            } else {
                // line 44
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/icons/avatar.jpg"), "html", null, true);
                echo "\"
                                     class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\"
                                     alt=\"Avatar\" style=\"max-width: 84px;\">
                            ";
            }
            // line 48
            echo "                            ";
            if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 49
                echo "                        </a>
                        ";
            }
            // line 51
            echo "
                        <div class=\"heading-block noborder\">
                            <div id=\"sss\">";
            // line 53
            if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 54
                echo "                                ";
                if (array_key_exists("f", $context)) {
                    // line 55
                    echo "                                    ";
                    // line 58
                    echo "                                    <a onclick=\"hottlisuivre()\" title=\"Ne Plus Suivre ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()), "html", null, true);
                    echo "\"
                                       href=\"#\">
                                        <strong>NE PLUS SUIVRE</strong></a>
                                ";
                } else {
                    // line 62
                    echo "                                    ";
                    // line 65
                    echo "                                    <a onclick=\"hottlineplussuivre()\" title=\"Suivre ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()), "html", null, true);
                    echo "\"
                                       href=\"#\">
                                        <strong>SUIVRE</strong></a>
                                ";
                }
                // line 69
                echo "                                    &nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;
                                    <a title=\"Envoyer un message à ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_message_thread_new2", array("username" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "username", array()))), "html", null, true);
                echo "\">
                                        <i class=\"icon-comments\"></i>
                                    </a>
                            ";
            }
            // line 73
            echo "</div>
                            <h3>";
            // line 74
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "lastname", array())), "html", null, true);
            echo "</h3>
                            <span>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "tagline", array()), "html", null, true);
            echo "</span>
                        </div>

                        <div class=\"clear\"></div>

                        <div class=\"row clearfix\">

                            <div class=\"col-md-12\">

                                <div class=\"tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all\"
                                     id=\"tabs-profile\">

                                    <ul class=\"tab-nav clearfix\">
                                        <li><a href=\"#tab-posts\"><i class=\"icon-pencil2\"></i>Publications</a></li>
                                        <li><a href=\"#tab-followers\"><i class=\"icon-users\"></i>Followers</a></li>
                                        <li><a href=\"#tab-events\"><i class=\"icon-calendar3\"></i>Évènements</a></li>
                                        <li><a href=\"#tab-boutique\"><i class=\"icon-gift\"></i>Boutique Personnelle</a></li>
                                        <li><a href=\"#tab-spaces\"><i class=\"icon-screenshot\"></i>Espaces</a></li>
                                        <li><a href=\"#tab-workshops\"><i class=\"icon-briefcase\"></i>Ateliers</a></li>
                                    </ul>

                                    <div class=\"tab-container\">

                                        <div class=\"tab-content clearfix\" id=\"tab-posts\">
                                            ";
            // line 99
            if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 100
                echo "                                                <div class=\"panel-body\" style=\"padding: 40px;\">
                                                    <div class=\"ipost clearfix\">
                                                        <div class=\"row clearfix\">
                                                            <div class=\"col-xs-12 bottommargin-sm\">
                                                                ";
                // line 104
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
                echo "
                                                                ";
                // line 105
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
                echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
            }
            // line 111
            echo "                                            <div class=\"row topmargin-sm clearfix\">
                                                ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 113
                echo "                                                    <div class=\"col-xs-12 bottommargin-sm\">
                                                        <div class=\"ipost clearfix\">
                                                            <div class=\"row clearfix\">
                                                                <div class=\"col-sm-4\">
                                                                    <div class=\"entry-image\">
                                                                        <a href=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["post"], "image", array()))), "html", null, true);
                echo "\"
                                                                           data-lightbox=\"image\"><img class=\"image_fade\"
                                                                                                      src=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["post"], "image", array()))), "html", null, true);
                echo "\"
                                                                                                      alt=\"Image de la publication\"></a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-sm-8\">
                                                                    <div class=\"entry-title\">
                                                                        <h3><a href=\"#comments\">";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
                echo "</a>
                                                                        </h3>
                                                                    </div>
                                                                    <ul class=\"entry-meta clearfix\">
                                                                        <li>
                                                                            <i class=\"icon-calendar3\"></i> ";
                // line 131
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array())), "html", null, true);
                echo "
                                                                        </li>
                                                                        <li><a href=\"#comments\"><i
                                                                                        class=\"icon-comments\"></i>
                                                                                13</a></li>
                                                                        ";
                // line 136
                if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    // line 137
                    echo "                                                                            <li>
                                                                                <a href=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_modifier_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                    echo "\">Modifier</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href=\"";
                    // line 141
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_delete_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                    echo "\"
                                                                                   onclick=\"return confirm('Voulez-vous vraiment' +
                                                                                        'supprimer cette publication ?')\">Supprimer</a>
                                                                            </li>
                                                                        ";
                }
                // line 146
                echo "                                                                    </ul>
                                                                    <div class=\"entry-content\">
                                                                        <p>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "texte", array()), "html", null, true);
                echo "</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-followers\">
                                            ";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SocialBundle:Default:followers", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()))));
            echo "
                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-events\">
                                            ";
            // line 162
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EvenementBundle:Evenement:AfficheTabEv", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()))));
            echo "
                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-boutique\">

                                            <div class=\"row topmargin-sm\">
                                                <div class=\"col-md-3 col-sm-6 bottommargin\">

                                                    <div class=\"team\">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class=\"tab-content clearfix\" id=\"tab-spaces\">
                                            ";
            // line 180
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("LocalBundle:Local:AfficheUserTab"));
            echo "
                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-workshops\">
                                            ";
            // line 183
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("WorkshopBundle:Workshop:AfficheProfile", array("id" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()))));
            echo "
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class=\"line visible-xs-block\"></div>

                    <div class=\"col-sm-3 clearfix\">

                        <div class=\"fancy-title topmargin title-border\">
                            ";
            // line 201
            if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 202
                echo "                                <h4>About Me</h4>
                            ";
            } else {
                // line 204
                echo "                                <h4>About ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "lastname", array())), "html", null, true);
                echo "</h4>
                            ";
            }
            // line 206
            echo "                        </div>

                        <p>Date de naissance: ";
            // line 208
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "datenaiss", array()), "d/m/Y"), "html", null, true);
            echo "<br>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "aboutMe", array()), "html", null, true);
            echo "</p>

                    </div>

                </div>

            </div>


        </section>
    ";
        } else {
            // line 219
            echo "        <br>
        Vous devez vous connecter avant d'accéder à un des profiles des utilisateurs.
        <br>
    ";
        }
        
        $__internal_7f594fdf30bb569f0f17cbdf1502debb18400b24561c2e1e6a32086493f56d6f->leave($__internal_7f594fdf30bb569f0f17cbdf1502debb18400b24561c2e1e6a32086493f56d6f_prof);

    }

    // line 224
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5d425a8a20091f3f1c5e7e3a99d3cf035ad9da7d63dfd9047aa149207dea0f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d425a8a20091f3f1c5e7e3a99d3cf035ad9da7d63dfd9047aa149207dea0f77->enter($__internal_5d425a8a20091f3f1c5e7e3a99d3cf035ad9da7d63dfd9047aa149207dea0f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 225
        echo "    <script>
        function hottlineplussuivre() {
            \$.ajax({
                type: 'POST',
                url: '";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_suivreAX_user", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()))), "html", null, true);
        echo "',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(response){
                    document.getElementById(\"tab-followers\").innerHTML = response;
                }
            });
            ";
        // line 237
        echo "            document.getElementById(\"sss\").innerHTML = '<a onclick=\"hottlisuivre()\" title=\"Ne Plus Suivre ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()), "html", null, true);
        echo "\" href=\"#\"> <strong>NE PLUS SUIVRE</strong></a>';
        }

        function hottlisuivre() {
            \$.ajax({
                type: 'POST',
                url: '";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_pasuivreAX_user", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()))), "html", null, true);
        echo "',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(response){
                    document.getElementById(\"tab-followers\").innerHTML = response;
                }
            });
            ";
        // line 251
        echo "            document.getElementById(\"sss\").innerHTML = '<a onclick=\"hottlineplussuivre()\" title=\"Suivre ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()), "html", null, true);
        echo "\" href=\"#\"><strong>SUIVRE</strong></a>';
        }
    </script>
    <script>
        jQuery(\"#tabs-profile\").on(\"tabsactivate\", function (event, ui) {
            jQuery('.flexslider .slide').resize();
        });
    </script>
";
        
        $__internal_5d425a8a20091f3f1c5e7e3a99d3cf035ad9da7d63dfd9047aa149207dea0f77->leave($__internal_5d425a8a20091f3f1c5e7e3a99d3cf035ad9da7d63dfd9047aa149207dea0f77_prof);

    }

    public function getTemplateName()
    {
        return "SocialBundle:Profile:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  466 => 251,  456 => 243,  446 => 237,  436 => 229,  430 => 225,  424 => 224,  413 => 219,  397 => 208,  393 => 206,  387 => 204,  383 => 202,  381 => 201,  360 => 183,  354 => 180,  333 => 162,  327 => 159,  321 => 155,  308 => 148,  304 => 146,  296 => 141,  290 => 138,  287 => 137,  285 => 136,  277 => 131,  269 => 126,  260 => 120,  255 => 118,  248 => 113,  244 => 112,  241 => 111,  232 => 105,  228 => 104,  222 => 100,  220 => 99,  193 => 75,  189 => 74,  186 => 73,  177 => 70,  174 => 69,  166 => 65,  164 => 62,  156 => 58,  154 => 55,  151 => 54,  149 => 53,  145 => 51,  141 => 49,  138 => 48,  130 => 44,  123 => 41,  120 => 40,  115 => 38,  112 => 37,  110 => 36,  100 => 28,  97 => 27,  91 => 26,  70 => 11,  64 => 10,  52 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
        <title>{{ profile.idUser.firstname ~ ' ' ~ profile.idUser.lastname }} - Profile</title>
    {% else %}
        <meta http-equiv=\"refresh\" content=\"5;url={{ path('fos_user_security_login') }}\"/>
        <title>Visiteur - Non Connecté</title>
    {% endif %}
{% endblock %}
{% block stylesheets %}
    <style type=\"text/css\">
        .cccontainer {
            height: 90%;
            width: 96%;
            max-width: 100px;
            max-height: 100px;
            margin: auto; /* to center the container */
        }

        .iiimg {
            width: 25%;
            height: 25%;
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
                        {% if profile.idUser.id == app.user.id %}
                        <a title=\"Modifier les paramètres du profile\"
                           href=\"{{ path('social_modifier_profile',{'id': profile.id}) }}\">
                            {% endif %}
                            {% if profile.image %}
                                <img src=\"{{ asset('uploads/images/' ~ profile.image) }}\" class=\"alignleft img-circle img-thumbnail
                                    notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">
                            {% else %}
                                <img src=\"{{ asset('Template/images/icons/avatar.jpg') }}\"
                                     class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\"
                                     alt=\"Avatar\" style=\"max-width: 84px;\">
                            {% endif %}
                            {% if profile.idUser.id == app.user.id %}
                        </a>
                        {% endif %}

                        <div class=\"heading-block noborder\">
                            <div id=\"sss\">{% if profile.idUser.id != app.user.id %}
                                {% if f is defined %}
                                    {#<a title=\"Ne Plus Suivre {{ profile.idUser.firstname }}\"
                                       href=\"{{ path('social_pasuivre_user',{'id': profile.id}) }}\">
                                        <strong>NE PLUS SUIVRE</strong></a>#}
                                    <a onclick=\"hottlisuivre()\" title=\"Ne Plus Suivre {{ profile.idUser.firstname }}\"
                                       href=\"#\">
                                        <strong>NE PLUS SUIVRE</strong></a>
                                {% else %}
                                    {#<a title=\"Suivre {{ profile.idUser.firstname }}\"
                                       href=\"{{ path('social_suivre_user',{'id': profile.id}) }}\">
                                        <strong>SUIVRE</strong></a>#}
                                    <a onclick=\"hottlineplussuivre()\" title=\"Suivre {{ profile.idUser.firstname }}\"
                                       href=\"#\">
                                        <strong>SUIVRE</strong></a>
                                {% endif %}
                                    &nbsp;&nbsp;&nbsp;||&nbsp;&nbsp;&nbsp;
                                    <a title=\"Envoyer un message à {{ profile.idUser.firstname }}\" href=\"{{ path('fos_message_thread_new2',{'username': profile.idUser.username}) }}\">
                                        <i class=\"icon-comments\"></i>
                                    </a>
                            {% endif %}</div>
                            <h3>{{ profile.idUser.firstname ~ ' ' ~ profile.idUser.lastname }}</h3>
                            <span>{{ profile.tagline }}</span>
                        </div>

                        <div class=\"clear\"></div>

                        <div class=\"row clearfix\">

                            <div class=\"col-md-12\">

                                <div class=\"tabs tabs-bb clearfix ui-tabs ui-widget ui-widget-content ui-corner-all\"
                                     id=\"tabs-profile\">

                                    <ul class=\"tab-nav clearfix\">
                                        <li><a href=\"#tab-posts\"><i class=\"icon-pencil2\"></i>Publications</a></li>
                                        <li><a href=\"#tab-followers\"><i class=\"icon-users\"></i>Followers</a></li>
                                        <li><a href=\"#tab-events\"><i class=\"icon-calendar3\"></i>Évènements</a></li>
                                        <li><a href=\"#tab-boutique\"><i class=\"icon-gift\"></i>Boutique Personnelle</a></li>
                                        <li><a href=\"#tab-spaces\"><i class=\"icon-screenshot\"></i>Espaces</a></li>
                                        <li><a href=\"#tab-workshops\"><i class=\"icon-briefcase\"></i>Ateliers</a></li>
                                    </ul>

                                    <div class=\"tab-container\">

                                        <div class=\"tab-content clearfix\" id=\"tab-posts\">
                                            {% if profile.idUser.id == app.user.id %}
                                                <div class=\"panel-body\" style=\"padding: 40px;\">
                                                    <div class=\"ipost clearfix\">
                                                        <div class=\"row clearfix\">
                                                            <div class=\"col-xs-12 bottommargin-sm\">
                                                                {{ form_start(form) }}
                                                                {{ form_end(form) }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {% endif %}
                                            <div class=\"row topmargin-sm clearfix\">
                                                {% for post in posts %}
                                                    <div class=\"col-xs-12 bottommargin-sm\">
                                                        <div class=\"ipost clearfix\">
                                                            <div class=\"row clearfix\">
                                                                <div class=\"col-sm-4\">
                                                                    <div class=\"entry-image\">
                                                                        <a href=\"{{ asset('uploads/images/' ~ post.image) }}\"
                                                                           data-lightbox=\"image\"><img class=\"image_fade\"
                                                                                                      src=\"{{ asset('uploads/images/' ~ post.image) }}\"
                                                                                                      alt=\"Image de la publication\"></a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-sm-8\">
                                                                    <div class=\"entry-title\">
                                                                        <h3><a href=\"#comments\">{{ post.titre }}</a>
                                                                        </h3>
                                                                    </div>
                                                                    <ul class=\"entry-meta clearfix\">
                                                                        <li>
                                                                            <i class=\"icon-calendar3\"></i> {{ post.date|date }}
                                                                        </li>
                                                                        <li><a href=\"#comments\"><i
                                                                                        class=\"icon-comments\"></i>
                                                                                13</a></li>
                                                                        {% if profile.idUser.id == app.user.id %}
                                                                            <li>
                                                                                <a href=\"{{ path('social_modifier_post',{'id':post.id}) }}\">Modifier</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href=\"{{ path('social_delete_post',{'id':post.id}) }}\"
                                                                                   onclick=\"return confirm('Voulez-vous vraiment' +
                                                                                        'supprimer cette publication ?')\">Supprimer</a>
                                                                            </li>
                                                                        {% endif %}
                                                                    </ul>
                                                                    <div class=\"entry-content\">
                                                                        <p>{{ post.texte }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                {% endfor %}
                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-followers\">
                                            {{ render(controller('SocialBundle:Default:followers',{'id' : profile.id})) }}
                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-events\">
                                            {{ render(controller('EvenementBundle:Evenement:AfficheTabEv',{'id' : profile.idUser})) }}
                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-boutique\">

                                            <div class=\"row topmargin-sm\">
                                                <div class=\"col-md-3 col-sm-6 bottommargin\">

                                                    <div class=\"team\">

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class=\"tab-content clearfix\" id=\"tab-spaces\">
                                            {{ render(controller('LocalBundle:Local:AfficheUserTab')) }}
                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-workshops\">
                                            {{ render(controller('WorkshopBundle:Workshop:AfficheProfile',{'id':profile.idUser.id})) }}
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class=\"line visible-xs-block\"></div>

                    <div class=\"col-sm-3 clearfix\">

                        <div class=\"fancy-title topmargin title-border\">
                            {% if profile.idUser.id == app.user.id %}
                                <h4>About Me</h4>
                            {% else %}
                                <h4>About {{ profile.idUser.firstname ~ ' ' ~ profile.idUser.lastname }}</h4>
                            {% endif %}
                        </div>

                        <p>Date de naissance: {{ profile.idUser.datenaiss|date('d/m/Y') }}<br>{{ profile.aboutMe }}</p>

                    </div>

                </div>

            </div>


        </section>
    {% else %}
        <br>
        Vous devez vous connecter avant d'accéder à un des profiles des utilisateurs.
        <br>
    {% endif %}
{% endblock %}
{% block javascripts %}
    <script>
        function hottlineplussuivre() {
            \$.ajax({
                type: 'POST',
                url: '{{ path('social_suivreAX_user',{'id': profile.id}) }}',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(response){
                    document.getElementById(\"tab-followers\").innerHTML = response;
                }
            });
            {#alert('Vous suivez {{ profile.idUser.firstname }}');#}
            document.getElementById(\"sss\").innerHTML = '<a onclick=\"hottlisuivre()\" title=\"Ne Plus Suivre {{ profile.idUser.firstname }}\" href=\"#\"> <strong>NE PLUS SUIVRE</strong></a>';
        }

        function hottlisuivre() {
            \$.ajax({
                type: 'POST',
                url: '{{ path('social_pasuivreAX_user',{'id': profile.id}) }}',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(response){
                    document.getElementById(\"tab-followers\").innerHTML = response;
                }
            });
            {#alert('Vous ne suivez plus {{ profile.idUser.firstname }}');#}
            document.getElementById(\"sss\").innerHTML = '<a onclick=\"hottlineplussuivre()\" title=\"Suivre {{ profile.idUser.firstname }}\" href=\"#\"><strong>SUIVRE</strong></a>';
        }
    </script>
    <script>
        jQuery(\"#tabs-profile\").on(\"tabsactivate\", function (event, ui) {
            jQuery('.flexslider .slide').resize();
        });
    </script>
{% endblock %}", "SocialBundle:Profile:check.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SocialBundle/Resources/views/Profile/check.html.twig");
    }
}
