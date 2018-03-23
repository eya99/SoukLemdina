<?php

/* SocialBundle:Profile:check.html.twig */
class __TwigTemplate_56d3883325906a5591f00ae1044042bf9402cc674d878a5728a90516ea8242de extends Twig_Template
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
        $__internal_14a18fb773593954018432c7680ecb4c77bab357719b152201482c26b303fe6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a18fb773593954018432c7680ecb4c77bab357719b152201482c26b303fe6f->enter($__internal_14a18fb773593954018432c7680ecb4c77bab357719b152201482c26b303fe6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SocialBundle:Profile:check.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14a18fb773593954018432c7680ecb4c77bab357719b152201482c26b303fe6f->leave($__internal_14a18fb773593954018432c7680ecb4c77bab357719b152201482c26b303fe6f_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_90dec035d06aba116c25fe6f3ecea55d441a408154b724ee7644909712309f93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90dec035d06aba116c25fe6f3ecea55d441a408154b724ee7644909712309f93->enter($__internal_90dec035d06aba116c25fe6f3ecea55d441a408154b724ee7644909712309f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_90dec035d06aba116c25fe6f3ecea55d441a408154b724ee7644909712309f93->leave($__internal_90dec035d06aba116c25fe6f3ecea55d441a408154b724ee7644909712309f93_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4ecb37dfb30592da1ab0a20f7f0716a524533ecc294f7294e82033938b28c9c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecb37dfb30592da1ab0a20f7f0716a524533ecc294f7294e82033938b28c9c2->enter($__internal_4ecb37dfb30592da1ab0a20f7f0716a524533ecc294f7294e82033938b28c9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_4ecb37dfb30592da1ab0a20f7f0716a524533ecc294f7294e82033938b28c9c2->leave($__internal_4ecb37dfb30592da1ab0a20f7f0716a524533ecc294f7294e82033938b28c9c2_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_22036a014015658ef1c4abe4e988276df2aff53456bee08ab330c6e1482e9c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22036a014015658ef1c4abe4e988276df2aff53456bee08ab330c6e1482e9c33->enter($__internal_22036a014015658ef1c4abe4e988276df2aff53456bee08ab330c6e1482e9c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                                        <li><a href=\"#tab-wishlist\"><i class=\"icon-plus-sign2\"></i>Wishlist</a></li>
                                        <li><a href=\"#tab-spaces\"><i class=\"icon-screenshot\"></i>Espaces</a></li>
                                        <li><a href=\"#tab-workshops\"><i class=\"icon-briefcase\"></i>Ateliers</a></li>
                                    </ul>

                                    <div class=\"tab-container\">

                                        <div class=\"tab-content clearfix\" id=\"tab-posts\">
                                            ";
            // line 100
            if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 101
                echo "                                                <div class=\"panel-body\" style=\"padding: 40px;\">
                                                    <div class=\"ipost clearfix\">
                                                        <div class=\"row clearfix\">
                                                            <div class=\"col-xs-12 bottommargin-sm\">
                                                                ";
                // line 105
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
                echo "
                                                                ";
                // line 106
                echo                 $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
                echo "
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            ";
            }
            // line 112
            echo "                                            <div class=\"row topmargin-sm clearfix\">
                                                ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 114
                echo "                                                    <div class=\"col-xs-12 bottommargin-sm\">
                                                        <div class=\"ipost clearfix\">
                                                            <div class=\"row clearfix\">
                                                                <div class=\"col-sm-4\">
                                                                    <div class=\"entry-image\">
                                                                        <a href=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["post"], "image", array()))), "html", null, true);
                echo "\"
                                                                           data-lightbox=\"image\"><img class=\"image_fade\"
                                                                                                      src=\"";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["post"], "image", array()))), "html", null, true);
                echo "\"
                                                                                                      alt=\"Image de la publication\"></a>
                                                                    </div>
                                                                </div>
                                                                <div class=\"col-sm-8\">
                                                                    <div class=\"entry-title\">
                                                                        <h3><a href=\"#comments\">";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "titre", array()), "html", null, true);
                echo "</a>
                                                                        </h3>
                                                                    </div>
                                                                    <ul class=\"entry-meta clearfix\">
                                                                        <li>
                                                                            <i class=\"icon-calendar3\"></i> ";
                // line 132
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array())), "html", null, true);
                echo "
                                                                        </li>
                                                                        <li><a href=\"#comments\"><i
                                                                                        class=\"icon-comments\"></i>
                                                                                13</a></li>
                                                                        ";
                // line 137
                if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    // line 138
                    echo "                                                                            <li>
                                                                                <a href=\"";
                    // line 139
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_modifier_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                    echo "\">Modifier</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_delete_post", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
                    echo "\"
                                                                                   onclick=\"return confirm('Voulez-vous vraiment' +
                                                                                        'supprimer cette publication ?')\">Supprimer</a>
                                                                            </li>
                                                                        ";
                }
                // line 147
                echo "                                                                    </ul>
                                                                    <div class=\"entry-content\">
                                                                        <p>";
                // line 149
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
            // line 156
            echo "                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-followers\">
                                            ";
            // line 160
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("SocialBundle:Default:followers", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()))));
            echo "
                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-events\">
                                            <p class=\"\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Laudantium harum ea quo! Nulla fugiat earum, sed corporis amet iste non,
                                                id facilis dolorum, suscipit, deleniti ea. Nobis, temporibus magnam
                                                doloribus. Reprehenderit necessitatibus esse dolor tempora ea unde,
                                                itaque odit. Quos.</p>

                                            <div class=\"table-responsive\">
                                                <table class=\"table table-bordered table-striped\">
                                                    <colgroup>
                                                        <col class=\"col-xs-1\">
                                                        <col class=\"col-xs-7\">
                                                    </colgroup>
                                                    <thead>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>Activity</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <code>5/23/2016</code>
                                                        </td>
                                                        <td>Payment for VPS2 completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>5/23/2016</code>
                                                        </td>
                                                        <td>Logged in to the Account at 16:33:01</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>5/22/2016</code>
                                                        </td>
                                                        <td>Logged in to the Account at 09:41:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>5/21/2016</code>
                                                        </td>
                                                        <td>Logged in to the Account at 17:16:32</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>5/18/2016</code>
                                                        </td>
                                                        <td>Logged in to the Account at 22:53:41</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-boutique\">

                                            <div class=\"row topmargin-sm\">
                                                <div class=\"col-md-3 col-sm-6 bottommargin\">

                                                    <div class=\"team\">
                                                        <div class=\"team-image\">
                                                            <img src=\"images/team/3.jpg\" alt=\"John Doe\">
                                                        </div>
                                                        <div class=\"team-desc\">
                                                            <div class=\"team-title\"><h4>John Doe</h4>
                                                                <span>CEO</span></div>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-facebook\">
                                                                <i class=\"icon-facebook\"></i>
                                                                <i class=\"icon-facebook\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-twitter\">
                                                                <i class=\"icon-twitter\"></i>
                                                                <i class=\"icon-twitter\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-gplus\">
                                                                <i class=\"icon-gplus\"></i>
                                                                <i class=\"icon-gplus\"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-wishlist\">

                                            <div class=\"row topmargin-sm\">
                                                <div class=\"col-md-3 col-sm-6 bottommargin\">

                                                    <div class=\"team\">
                                                        <div class=\"team-image\">
                                                            <img src=\"images/team/3.jpg\" alt=\"John Doe\">
                                                        </div>
                                                        <div class=\"team-desc\">
                                                            <div class=\"team-title\"><h4>John Doe</h4>
                                                                <span>CEO</span></div>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-facebook\">
                                                                <i class=\"icon-facebook\"></i>
                                                                <i class=\"icon-facebook\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-twitter\">
                                                                <i class=\"icon-twitter\"></i>
                                                                <i class=\"icon-twitter\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-gplus\">
                                                                <i class=\"icon-gplus\"></i>
                                                                <i class=\"icon-gplus\"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-spaces\">

                                            <div class=\"row topmargin-sm\">
                                                <div class=\"col-md-3 col-sm-6 bottommargin\">

                                                    <div class=\"team\">
                                                        <div class=\"team-image\">
                                                            <img src=\"images/team/3.jpg\" alt=\"John Doe\">
                                                        </div>
                                                        <div class=\"team-desc\">
                                                            <div class=\"team-title\"><h4>John Doe</h4>
                                                                <span>CEO</span></div>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-facebook\">
                                                                <i class=\"icon-facebook\"></i>
                                                                <i class=\"icon-facebook\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-twitter\">
                                                                <i class=\"icon-twitter\"></i>
                                                                <i class=\"icon-twitter\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-gplus\">
                                                                <i class=\"icon-gplus\"></i>
                                                                <i class=\"icon-gplus\"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-workshops\">

                                            ";
            // line 324
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
            // line 343
            if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 344
                echo "                                <h4>About Me</h4>
                            ";
            } else {
                // line 346
                echo "                                <h4>About ";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "lastname", array())), "html", null, true);
                echo "</h4>
                            ";
            }
            // line 348
            echo "                        </div>

                        <p>Date de naissance: ";
            // line 350
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
            // line 361
            echo "        <br>
        Vous devez vous connecter avant d'accéder à un des profiles des utilisateurs.
        <br>
    ";
        }
        
        $__internal_22036a014015658ef1c4abe4e988276df2aff53456bee08ab330c6e1482e9c33->leave($__internal_22036a014015658ef1c4abe4e988276df2aff53456bee08ab330c6e1482e9c33_prof);

    }

    // line 366
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1be7b9b12852f7dba1a00174d9e7306b9948f9b19f8282d5424d49677ca1c213 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1be7b9b12852f7dba1a00174d9e7306b9948f9b19f8282d5424d49677ca1c213->enter($__internal_1be7b9b12852f7dba1a00174d9e7306b9948f9b19f8282d5424d49677ca1c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 367
        echo "    <script>
        function hottlineplussuivre() {
            \$.ajax({
                type: 'POST',
                url: '";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_suivreAX_user", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()))), "html", null, true);
        echo "',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(response){
                    document.getElementById(\"tab-followers\").innerHTML = response;
                }
            });
            ";
        // line 379
        echo "            document.getElementById(\"sss\").innerHTML = '<a onclick=\"hottlisuivre()\" title=\"Ne Plus Suivre ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "firstname", array()), "html", null, true);
        echo "\" href=\"#\"> <strong>NE PLUS SUIVRE</strong></a>';
        }

        function hottlisuivre() {
            \$.ajax({
                type: 'POST',
                url: '";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_pasuivreAX_user", array("id" => $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "id", array()))), "html", null, true);
        echo "',
                contentType: 'application/json; charset=utf-8',
                dataType: 'json',
                success: function(response){
                    document.getElementById(\"tab-followers\").innerHTML = response;
                }
            });
            ";
        // line 393
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
        
        $__internal_1be7b9b12852f7dba1a00174d9e7306b9948f9b19f8282d5424d49677ca1c213->leave($__internal_1be7b9b12852f7dba1a00174d9e7306b9948f9b19f8282d5424d49677ca1c213_prof);

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
        return array (  602 => 393,  592 => 385,  582 => 379,  572 => 371,  566 => 367,  560 => 366,  549 => 361,  533 => 350,  529 => 348,  523 => 346,  519 => 344,  517 => 343,  495 => 324,  328 => 160,  322 => 156,  309 => 149,  305 => 147,  297 => 142,  291 => 139,  288 => 138,  286 => 137,  278 => 132,  270 => 127,  261 => 121,  256 => 119,  249 => 114,  245 => 113,  242 => 112,  233 => 106,  229 => 105,  223 => 101,  221 => 100,  193 => 75,  189 => 74,  186 => 73,  177 => 70,  174 => 69,  166 => 65,  164 => 62,  156 => 58,  154 => 55,  151 => 54,  149 => 53,  145 => 51,  141 => 49,  138 => 48,  130 => 44,  123 => 41,  120 => 40,  115 => 38,  112 => 37,  110 => 36,  100 => 28,  97 => 27,  91 => 26,  70 => 11,  64 => 10,  52 => 6,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
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
                                        <li><a href=\"#tab-wishlist\"><i class=\"icon-plus-sign2\"></i>Wishlist</a></li>
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
                                            {{ render(controller('SocialBundle:Default:followers',{'id': profile.id})) }}
                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-events\">
                                            <p class=\"\">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Laudantium harum ea quo! Nulla fugiat earum, sed corporis amet iste non,
                                                id facilis dolorum, suscipit, deleniti ea. Nobis, temporibus magnam
                                                doloribus. Reprehenderit necessitatibus esse dolor tempora ea unde,
                                                itaque odit. Quos.</p>

                                            <div class=\"table-responsive\">
                                                <table class=\"table table-bordered table-striped\">
                                                    <colgroup>
                                                        <col class=\"col-xs-1\">
                                                        <col class=\"col-xs-7\">
                                                    </colgroup>
                                                    <thead>
                                                    <tr>
                                                        <th>Time</th>
                                                        <th>Activity</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <code>5/23/2016</code>
                                                        </td>
                                                        <td>Payment for VPS2 completed</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>5/23/2016</code>
                                                        </td>
                                                        <td>Logged in to the Account at 16:33:01</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>5/22/2016</code>
                                                        </td>
                                                        <td>Logged in to the Account at 09:41:58</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>5/21/2016</code>
                                                        </td>
                                                        <td>Logged in to the Account at 17:16:32</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <code>5/18/2016</code>
                                                        </td>
                                                        <td>Logged in to the Account at 22:53:41</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-boutique\">

                                            <div class=\"row topmargin-sm\">
                                                <div class=\"col-md-3 col-sm-6 bottommargin\">

                                                    <div class=\"team\">
                                                        <div class=\"team-image\">
                                                            <img src=\"images/team/3.jpg\" alt=\"John Doe\">
                                                        </div>
                                                        <div class=\"team-desc\">
                                                            <div class=\"team-title\"><h4>John Doe</h4>
                                                                <span>CEO</span></div>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-facebook\">
                                                                <i class=\"icon-facebook\"></i>
                                                                <i class=\"icon-facebook\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-twitter\">
                                                                <i class=\"icon-twitter\"></i>
                                                                <i class=\"icon-twitter\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-gplus\">
                                                                <i class=\"icon-gplus\"></i>
                                                                <i class=\"icon-gplus\"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-wishlist\">

                                            <div class=\"row topmargin-sm\">
                                                <div class=\"col-md-3 col-sm-6 bottommargin\">

                                                    <div class=\"team\">
                                                        <div class=\"team-image\">
                                                            <img src=\"images/team/3.jpg\" alt=\"John Doe\">
                                                        </div>
                                                        <div class=\"team-desc\">
                                                            <div class=\"team-title\"><h4>John Doe</h4>
                                                                <span>CEO</span></div>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-facebook\">
                                                                <i class=\"icon-facebook\"></i>
                                                                <i class=\"icon-facebook\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-twitter\">
                                                                <i class=\"icon-twitter\"></i>
                                                                <i class=\"icon-twitter\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-gplus\">
                                                                <i class=\"icon-gplus\"></i>
                                                                <i class=\"icon-gplus\"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                        <div class=\"tab-content clearfix\" id=\"tab-spaces\">

                                            <div class=\"row topmargin-sm\">
                                                <div class=\"col-md-3 col-sm-6 bottommargin\">

                                                    <div class=\"team\">
                                                        <div class=\"team-image\">
                                                            <img src=\"images/team/3.jpg\" alt=\"John Doe\">
                                                        </div>
                                                        <div class=\"team-desc\">
                                                            <div class=\"team-title\"><h4>John Doe</h4>
                                                                <span>CEO</span></div>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-facebook\">
                                                                <i class=\"icon-facebook\"></i>
                                                                <i class=\"icon-facebook\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-twitter\">
                                                                <i class=\"icon-twitter\"></i>
                                                                <i class=\"icon-twitter\"></i>
                                                            </a>
                                                            <a href=\"#\"
                                                               class=\"social-icon inline-block si-small si-light si-rounded si-gplus\">
                                                                <i class=\"icon-gplus\"></i>
                                                                <i class=\"icon-gplus\"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

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
