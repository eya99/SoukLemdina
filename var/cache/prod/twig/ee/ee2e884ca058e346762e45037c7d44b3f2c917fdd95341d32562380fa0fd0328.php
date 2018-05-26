<?php

/* LocalBundle:Local:afficheDetail.html.twig */
class __TwigTemplate_99274e81706038cc852ab48ed4062ffcaac1f7c4c69c5545e9143eef18c98d04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:afficheDetail.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_0017fabf182dce4c8847c9079d283cad674ea7341aec0f79ed26d169a66747ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0017fabf182dce4c8847c9079d283cad674ea7341aec0f79ed26d169a66747ac->enter($__internal_0017fabf182dce4c8847c9079d283cad674ea7341aec0f79ed26d169a66747ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:afficheDetail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0017fabf182dce4c8847c9079d283cad674ea7341aec0f79ed26d169a66747ac->leave($__internal_0017fabf182dce4c8847c9079d283cad674ea7341aec0f79ed26d169a66747ac_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_319f7cb8dbcb978965396c67c58ba122c0d003dd4e16a075b0b9f5704d7bfe0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319f7cb8dbcb978965396c67c58ba122c0d003dd4e16a075b0b9f5704d7bfe0c->enter($__internal_319f7cb8dbcb978965396c67c58ba122c0d003dd4e16a075b0b9f5704d7bfe0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_319f7cb8dbcb978965396c67c58ba122c0d003dd4e16a075b0b9f5704d7bfe0c->leave($__internal_319f7cb8dbcb978965396c67c58ba122c0d003dd4e16a075b0b9f5704d7bfe0c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb104a59b2dab951cf6a3aaf9aa566b0c042f5f7bd700ea186b3bb41d04144fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb104a59b2dab951cf6a3aaf9aa566b0c042f5f7bd700ea186b3bb41d04144fa->enter($__internal_cb104a59b2dab951cf6a3aaf9aa566b0c042f5f7bd700ea186b3bb41d04144fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cb104a59b2dab951cf6a3aaf9aa566b0c042f5f7bd700ea186b3bb41d04144fa->leave($__internal_cb104a59b2dab951cf6a3aaf9aa566b0c042f5f7bd700ea186b3bb41d04144fa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2c2eb56a10d93e5e75deec8c12d31a6140ec4b65962403ad9a5742cb4b262cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c2eb56a10d93e5e75deec8c12d31a6140ec4b65962403ad9a5742cb4b262cb->enter($__internal_b2c2eb56a10d93e5e75deec8c12d31a6140ec4b65962403ad9a5742cb4b262cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h3>Détails local</h3>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Acceuil</a></li>
                <li><a href=\"#\">Locaux</a></li>
                <li class=\"active\">Détails</li>
            </ol>
        </div>

    </section>
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <div class=\"single-product\">

                    <div class=\"product\">

                        <div class=\"col_two_fifth\">

                            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 31
            echo "
                                <div class=\"alert alert-success\">
                                    ";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                            <!-- Product Single - Gallery
                            ============================================= -->
                            <div class=\"product-image\">
                                <div class=\"fslider\" data-pagi=\"false\" data-arrows=\"false\" data-thumbs=\"true\">
                                    <div class=\"flexslider\">
                                        <div class=\"slider-wrap\" data-lightbox=\"gallery\">
                                            <div class=\"slide\"
                                                 data-thumb=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "image", array()))), "html", null, true);
        echo "\"><a
                                                        href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "image", array()))), "html", null, true);
        echo "\"
                                                        data-lightbox=\"gallery-item\"><img
                                                            src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "image", array()))), "html", null, true);
        echo "\"
                                                            ></a></div>

                                        </div>
                                    </div>
                                </div>

                            </div><!-- Product Single - Gallery End -->

                        </div>

                        <div class=\"col_two_fifth product-desc\">

                            <!-- Product Single - Price
                            ============================================= -->
                            <div class=\"product-price\">
                                <ins>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "prix", array()), "html", null, true);
        echo "DT</ins>
                            </div><!-- Product Single - Price End -->

                            <!-- Product Single - Rating
                            ============================================= -->
                            <div class=\"product-rating\">


                            </div><!-- Product Single - Rating End -->

                            <div class=\"clear\"></div>
                            <div class=\"line\"></div>

                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                            <form class=\"cart nobottommargin clearfix\" method=\"post\" enctype='multipart/form-data'>
                                <div class=\"quantity clearfix\">

                                </div>
                                <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_louer", array("id" => $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "id", array()))), "html", null, true);
        echo "\" class=\"button button-circle\">Louer</a>
                            </form><!-- Product Single - Quantity & Cart Button End -->

                            <div class=\"clear\"></div>
                            <div class=\"line\"></div>

                            <!-- Product Single - Short Description
                            ============================================= -->
                            <p>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "description", array()), "html", null, true);
        echo "</p>
                            <p></p>
                            <ul class=\"iconlist\">
                                <li><i class=\"icon-caret-right\"></i> 3 Fourchettes</li>
                                <li><i class=\"icon-caret-right\"></i> Ambiance familiale</li>
                                <li><i class=\"icon-caret-right\"></i> Musique douce</li>
                            </ul><!-- Product Single - Short Description End -->

                            <!-- Product Single - Meta
                            ============================================= -->
                            <div class=\"panel panel-default product-meta\">
                                <div class=\"panel-body\">
                                    <span itemprop=\"productID\" class=\"sku_wrapper\">Ref: <span class=\"sku\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "id", array()), "html", null, true);
        echo "
                                            tun</span></span>
                                    <span class=\"posted_in\">Category: <a href=\"#\" rel=\"tag\">";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "type", array()), "html", null, true);
        echo "</a>.</span>
                                    <span class=\"tagged_as\">Superficie:<a href=\"#\" rel=\"tag\">";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "superficie", array()), "html", null, true);
        echo "
                                            m²</a> .</span>
                                </div>
                            </div><!-- Product Single - Meta End -->

                            <!-- Product Single - Share
                            ============================================= -->
                            <div class=\"si-share noborder clearfix\">


                            </div><!-- Product Single - Share End -->
                            <div id=\"sss\">
                                ";
        // line 117
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "idUser", array()), "id", array()))) {
            // line 118
            echo "                                    ";
            if (array_key_exists("f", $context)) {
                // line 119
                echo "                                        <a onclick=\"hotlilike()\" href=\"\"
                                           class=\"icon-like\">Dislike</a>
                                    ";
            } else {
                // line 122
                echo "                                        <a onclick=\"hotlidislike()\" href=\"\"
                                           class=\"icon-like\">Like</a>
                                    ";
            }
            // line 125
            echo "                                ";
        }
        // line 126
        echo "
                                <p>      </p><a href=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_signaler", array("id" => $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "id", array()))), "html", null, true);
        echo "\" class=\"icon-warning-sign\"> <span>Signaler</span></a>
                                <p>      </p>
                                ";
        // line 129
        echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getTwitterButton();
        echo "
                                ";
        // line 130
        echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getLinkedinButton();
        echo "
                                ";
        // line 131
        echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getGoogleplusButton();
        echo "
                                ";
        // line 132
        echo $this->env->getExtension('Nomaya\SocialBundle\Twig\Extension\NomayaTwigSocialBar')->getPinterestButton();
        echo "


                            </div>
                        </div>

                        <div class=\"col_one_fifth col_last\">


                            <div class=\"divider divider-center\"></div>

                            <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                <div class=\"fbox-icon\">

                                </div>

                                <p class=\"notopmargin\"></p>
                            </div>

                            <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                <div class=\"fbox-icon\">

                                </div>

                                <p class=\"notopmargin\"></p>
                            </div>

                            <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                <div class=\"fbox-icon\">

                                </div>

                                <p class=\"notopmargin\"></p>
                            </div>

                            <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                <div class=\"fbox-icon\">

                                </div>

                                <p class=\"notopmargin\"></p>
                            </div>

                        </div>

                        <div class=\"col_full nobottommargin\">

                            <div class=\"tabs clearfix nobottommargin\" id=\"tab-1\">

                                <ul class=\"tab-nav clearfix\">
                                    <li><a href=\"#tabs-1\"><i class=\"icon-align-justify2\"></i><span class=\"hidden-xs\"> Description</span></a>
                                    </li>
                                    <li><a href=\"#tabs-2\"><i class=\"icon-info-sign\"></i><span class=\"hidden-xs\"> Plus d'informations</span></a>
                                    </li>
                                    <li><a href=\"#tabs-3\"><i class=\"icon-star3\"></i><span
                                                    class=\"hidden-xs\"> Reviews </span></a></li>
                                </ul>

                                <div class=\"tab-container\">

                                    <div class=\"tab-content clearfix\" id=\"tabs-1\">
                                        <p>";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "description", array()), "html", null, true);
        echo ".</p>

                                    </div>
                                    <div class=\"tab-content clearfix\" id=\"tabs-2\">

                                        <table class=\"table table-striped table-bordered\">
                                            <tbody>
                                            <tr>
                                                <td>Adresse</td>
                                                <td>";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "adresse", array()), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Téléphone</td>
                                                <td>";
        // line 207
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "telephone", array()), "html", null, true);
        echo "</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class=\"tab-content clearfix\" id=\"tabs-3\">

                                        <div id=\"reviews\" class=\"clearfix\">
                                            ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) ? $context["commentaires"] : $this->getContext($context, "commentaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 218
            echo "                                                <ol class=\"commentlist clearfix\">

                                                    <li class=\"comment even thread-even depth-1\" id=\"li-comment-1\">
                                                        <div id=\"comment-1\" class=\"comment-wrap clearfix\">

                                                            <div class=\"comment-meta\">
                                                                <div class=\"comment-author vcard\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comment-avatar clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=''
                                                                         src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                                         height='60' width='60'/></span>
                                                                </div>
                                                            </div>

                                                            <div class=\"comment-content clearfix\">
                                                                <div class=\"comment-author\"
                                                                     id=\"commentaires\"> ";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "idUser", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "idUser", array()), "lastname", array()), "html", null, true);
            echo "
                                                                    <span><a href=\"#\"
                                                                             title=\"Permalink to this comment\">";
            // line 236
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", array())), "html", null, true);
            echo "</a></span>
                                                                </div>
                                                                <p>";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "contenu", array()), "html", null, true);
            echo "</p>
                                                                ";
            // line 239
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($this->getAttribute($context["c"], "idUser", array()), "id", array()))) {
                // line 240
                echo "                                                                <div>
                                                                    <a href=\"";
                // line 241
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_deleteCommentaire", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
                echo "\" class=\"icon-line-delete\"> <span>Supprimer</span></a>
                                                                </div>
                                                                ";
            }
            // line 244
            echo "                                                                ";
            if (($this->getAttribute($context["c"], "rate", array()) == 1)) {
                // line 245
                echo "                                                                <div class=\"review-comment-ratings\">
                                                                    <i class=\"icon-star3\"></i>
                                                                    <i class=\"icon-star-empty\"></i>
                                                                    <i class=\"icon-star-empty\"></i>
                                                                    <i class=\"icon-star-empty\"></i>
                                                                    <i class=\"icon-star-empty\"></i>
                                                                </div>
                                                                ";
            }
            // line 253
            echo "                                                                ";
            if (($this->getAttribute($context["c"], "rate", array()) == 2)) {
                // line 254
                echo "                                                                    <div class=\"review-comment-ratings\">
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                    </div>
                                                                ";
            }
            // line 262
            echo "                                                                ";
            if (($this->getAttribute($context["c"], "rate", array()) == 3)) {
                // line 263
                echo "                                                                    <div class=\"review-comment-ratings\">
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                    </div>
                                                                ";
            }
            // line 271
            echo "                                                                ";
            if (($this->getAttribute($context["c"], "rate", array()) == 4)) {
                // line 272
                echo "                                                                    <div class=\"review-comment-ratings\">
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                    </div>
                                                                ";
            }
            // line 280
            echo "                                                                ";
            if (($this->getAttribute($context["c"], "rate", array()) == 5)) {
                // line 281
                echo "                                                                    <div class=\"review-comment-ratings\">
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                    </div>
                                                                ";
            }
            // line 289
            echo "                                                            </div>



                                                            <div class=\"clear\"></div>

                                                        </div>
                                                    </li>

                                                </ol>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 300
        echo "
                                            <!-- Modal Reviews
                                           ============================================= -->

                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#reviewFormModal\"
                                               class=\"button button-3d nomargin fright\">Ajouter un commentaire</a>

                                            <div class=\"modal fade\" id=\"reviewFormModal\" tabindex=\"-1\" role=\"dialog\"
                                                 aria-labelledby=\"reviewFormModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-hidden=\"true\">&times;
                                                            </button>

                                                            <h4 class=\"modal-title\" id=\"reviewFormModalLabel\">Ajout
                                                                commentaire</h4>
                                                        </div>

                                                        <div class=\"modal-body\">
                                                            ";
        // line 321
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                                                            ";
        // line 323
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-default\"
                                                                    data-dismiss=\"modal\">Close
                                                            </button>
                                                        </div>

                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <!-- Modal Reviews End -->

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>






";
        
        $__internal_b2c2eb56a10d93e5e75deec8c12d31a6140ec4b65962403ad9a5742cb4b262cb->leave($__internal_b2c2eb56a10d93e5e75deec8c12d31a6140ec4b65962403ad9a5742cb4b262cb_prof);

    }

    // line 361
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1acaeffa579d80bec62cbfa87487b00011188ab71d3af15ef57166fb987962d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acaeffa579d80bec62cbfa87487b00011188ab71d3af15ef57166fb987962d8->enter($__internal_1acaeffa579d80bec62cbfa87487b00011188ab71d3af15ef57166fb987962d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 362
        echo "    <script>
        function hotlilike(){
            \$.ajax({
                type: 'POST',
                url: '";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_pasaimer", array("id" => $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "id", array()))), "html", null, true);
        echo "',
                contentType: 'application\\json; charset=utf-8',
                dataType: 'json',
                success: function(){
                    console.log(response);
                    document.getElementById('sss').innerHTML='<a onclick=\"hotlidislike()\" href=\"#\" class=\"icon-like\">Like</a>';
                }
            });
        }
        function hotlidislike(){
            \$.ajax({
                type: 'POST',
                url: '";
        // line 378
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_aimer", array("id" => $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "id", array()))), "html", null, true);
        echo "',
                contentType: 'application\\json; charset=utf-8',
                dataType: 'json',
                success: function(){
                    console.log(response);
                    document.getElementById('sss').innerHTML='<a onclick=\"hotlilike()\" href=\"#\" class=\"icon-dislike\">Dislike</a>';
                }
            });
        }
    </script>
";
        
        $__internal_1acaeffa579d80bec62cbfa87487b00011188ab71d3af15ef57166fb987962d8->leave($__internal_1acaeffa579d80bec62cbfa87487b00011188ab71d3af15ef57166fb987962d8_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:afficheDetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 378,  570 => 366,  564 => 362,  558 => 361,  513 => 323,  508 => 321,  485 => 300,  469 => 289,  459 => 281,  456 => 280,  446 => 272,  443 => 271,  433 => 263,  430 => 262,  420 => 254,  417 => 253,  407 => 245,  404 => 244,  398 => 241,  395 => 240,  393 => 239,  389 => 238,  384 => 236,  377 => 234,  359 => 218,  355 => 217,  342 => 207,  334 => 202,  322 => 193,  258 => 132,  254 => 131,  250 => 130,  246 => 129,  241 => 127,  238 => 126,  235 => 125,  230 => 122,  225 => 119,  222 => 118,  220 => 117,  205 => 105,  201 => 104,  196 => 102,  181 => 90,  170 => 82,  148 => 63,  129 => 47,  124 => 45,  120 => 44,  111 => 37,  101 => 33,  97 => 31,  93 => 30,  66 => 5,  60 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SUserBundle::layout.html.twig' %}
  {% block title %}Local{% endblock %}
    {% block stylesheets %}{% endblock %}
{% block body %}

    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h3>Détails local</h3>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\">Acceuil</a></li>
                <li><a href=\"#\">Locaux</a></li>
                <li class=\"active\">Détails</li>
            </ol>
        </div>

    </section>
    <section id=\"content\">

        <div class=\"content-wrap\">

            <div class=\"container clearfix\">

                <div class=\"single-product\">

                    <div class=\"product\">

                        <div class=\"col_two_fifth\">

                            {% for flashMessage in app.session.flashbag.get('notice') %}

                                <div class=\"alert alert-success\">
                                    {{ flashMessage }}
                                </div>

                            {% endfor %}
                            <!-- Product Single - Gallery
                            ============================================= -->
                            <div class=\"product-image\">
                                <div class=\"fslider\" data-pagi=\"false\" data-arrows=\"false\" data-thumbs=\"true\">
                                    <div class=\"flexslider\">
                                        <div class=\"slider-wrap\" data-lightbox=\"gallery\">
                                            <div class=\"slide\"
                                                 data-thumb=\"{{ asset ('uploads/images/' ~ local.image) }}\"><a
                                                        href=\"{{ asset ('uploads/images/' ~ local.image) }}\"
                                                        data-lightbox=\"gallery-item\"><img
                                                            src=\"{{ asset ('uploads/images/' ~ local.image) }}\"
                                                            ></a></div>

                                        </div>
                                    </div>
                                </div>

                            </div><!-- Product Single - Gallery End -->

                        </div>

                        <div class=\"col_two_fifth product-desc\">

                            <!-- Product Single - Price
                            ============================================= -->
                            <div class=\"product-price\">
                                <ins>{{ local.prix }}DT</ins>
                            </div><!-- Product Single - Price End -->

                            <!-- Product Single - Rating
                            ============================================= -->
                            <div class=\"product-rating\">


                            </div><!-- Product Single - Rating End -->

                            <div class=\"clear\"></div>
                            <div class=\"line\"></div>

                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                            <form class=\"cart nobottommargin clearfix\" method=\"post\" enctype='multipart/form-data'>
                                <div class=\"quantity clearfix\">

                                </div>
                                <a href=\"{{ path('_louer',{'id':local.id}) }}\" class=\"button button-circle\">Louer</a>
                            </form><!-- Product Single - Quantity & Cart Button End -->

                            <div class=\"clear\"></div>
                            <div class=\"line\"></div>

                            <!-- Product Single - Short Description
                            ============================================= -->
                            <p>{{ local.description }}</p>
                            <p></p>
                            <ul class=\"iconlist\">
                                <li><i class=\"icon-caret-right\"></i> 3 Fourchettes</li>
                                <li><i class=\"icon-caret-right\"></i> Ambiance familiale</li>
                                <li><i class=\"icon-caret-right\"></i> Musique douce</li>
                            </ul><!-- Product Single - Short Description End -->

                            <!-- Product Single - Meta
                            ============================================= -->
                            <div class=\"panel panel-default product-meta\">
                                <div class=\"panel-body\">
                                    <span itemprop=\"productID\" class=\"sku_wrapper\">Ref: <span class=\"sku\">{{ local.id }}
                                            tun</span></span>
                                    <span class=\"posted_in\">Category: <a href=\"#\" rel=\"tag\">{{ local.type }}</a>.</span>
                                    <span class=\"tagged_as\">Superficie:<a href=\"#\" rel=\"tag\">{{ local.superficie }}
                                            m²</a> .</span>
                                </div>
                            </div><!-- Product Single - Meta End -->

                            <!-- Product Single - Share
                            ============================================= -->
                            <div class=\"si-share noborder clearfix\">


                            </div><!-- Product Single - Share End -->
                            <div id=\"sss\">
                                {% if app.user.id != local.idUser.id %}
                                    {% if f is defined %}
                                        <a onclick=\"hotlilike()\" href=\"\"
                                           class=\"icon-like\">Dislike</a>
                                    {% else %}
                                        <a onclick=\"hotlidislike()\" href=\"\"
                                           class=\"icon-like\">Like</a>
                                    {% endif %}
                                {% endif %}

                                <p>      </p><a href=\"{{ path('_signaler',{'id':local.id}) }}\" class=\"icon-warning-sign\"> <span>Signaler</span></a>
                                <p>      </p>
                                {{ twitterButton() }}
                                {{ linkedinButton() }}
                                {{ googleplusButton() }}
                                {{ pinterestButton() }}


                            </div>
                        </div>

                        <div class=\"col_one_fifth col_last\">


                            <div class=\"divider divider-center\"></div>

                            <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                <div class=\"fbox-icon\">

                                </div>

                                <p class=\"notopmargin\"></p>
                            </div>

                            <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                <div class=\"fbox-icon\">

                                </div>

                                <p class=\"notopmargin\"></p>
                            </div>

                            <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                <div class=\"fbox-icon\">

                                </div>

                                <p class=\"notopmargin\"></p>
                            </div>

                            <div class=\"feature-box fbox-plain fbox-dark fbox-small\">
                                <div class=\"fbox-icon\">

                                </div>

                                <p class=\"notopmargin\"></p>
                            </div>

                        </div>

                        <div class=\"col_full nobottommargin\">

                            <div class=\"tabs clearfix nobottommargin\" id=\"tab-1\">

                                <ul class=\"tab-nav clearfix\">
                                    <li><a href=\"#tabs-1\"><i class=\"icon-align-justify2\"></i><span class=\"hidden-xs\"> Description</span></a>
                                    </li>
                                    <li><a href=\"#tabs-2\"><i class=\"icon-info-sign\"></i><span class=\"hidden-xs\"> Plus d'informations</span></a>
                                    </li>
                                    <li><a href=\"#tabs-3\"><i class=\"icon-star3\"></i><span
                                                    class=\"hidden-xs\"> Reviews </span></a></li>
                                </ul>

                                <div class=\"tab-container\">

                                    <div class=\"tab-content clearfix\" id=\"tabs-1\">
                                        <p>{{ local.description }}.</p>

                                    </div>
                                    <div class=\"tab-content clearfix\" id=\"tabs-2\">

                                        <table class=\"table table-striped table-bordered\">
                                            <tbody>
                                            <tr>
                                                <td>Adresse</td>
                                                <td>{{ local.adresse }}</td>
                                            </tr>

                                            <tr>
                                                <td>Téléphone</td>
                                                <td>{{ local.telephone }}</td>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class=\"tab-content clearfix\" id=\"tabs-3\">

                                        <div id=\"reviews\" class=\"clearfix\">
                                            {% for c in commentaires %}
                                                <ol class=\"commentlist clearfix\">

                                                    <li class=\"comment even thread-even depth-1\" id=\"li-comment-1\">
                                                        <div id=\"comment-1\" class=\"comment-wrap clearfix\">

                                                            <div class=\"comment-meta\">
                                                                <div class=\"comment-author vcard\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"comment-avatar clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=''
                                                                         src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60'
                                                                         height='60' width='60'/></span>
                                                                </div>
                                                            </div>

                                                            <div class=\"comment-content clearfix\">
                                                                <div class=\"comment-author\"
                                                                     id=\"commentaires\"> {{ c.idUser.firstname }} {{ c.idUser.lastname }}
                                                                    <span><a href=\"#\"
                                                                             title=\"Permalink to this comment\">{{ c.date|date }}</a></span>
                                                                </div>
                                                                <p>{{ c.contenu }}</p>
                                                                {% if app.user.id==c.idUser.id %}
                                                                <div>
                                                                    <a href=\"{{ path('_deleteCommentaire',{'id':c.id}) }}\" class=\"icon-line-delete\"> <span>Supprimer</span></a>
                                                                </div>
                                                                {% endif %}
                                                                {% if c.rate==1 %}
                                                                <div class=\"review-comment-ratings\">
                                                                    <i class=\"icon-star3\"></i>
                                                                    <i class=\"icon-star-empty\"></i>
                                                                    <i class=\"icon-star-empty\"></i>
                                                                    <i class=\"icon-star-empty\"></i>
                                                                    <i class=\"icon-star-empty\"></i>
                                                                </div>
                                                                {% endif %}
                                                                {% if c.rate==2 %}
                                                                    <div class=\"review-comment-ratings\">
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                    </div>
                                                                {% endif %}
                                                                {% if c.rate==3 %}
                                                                    <div class=\"review-comment-ratings\">
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                    </div>
                                                                {% endif %}
                                                                {% if c.rate==4 %}
                                                                    <div class=\"review-comment-ratings\">
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star-empty\"></i>
                                                                    </div>
                                                                {% endif %}
                                                                {% if c.rate==5 %}
                                                                    <div class=\"review-comment-ratings\">
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                        <i class=\"icon-star3\"></i>
                                                                    </div>
                                                                {% endif %}
                                                            </div>



                                                            <div class=\"clear\"></div>

                                                        </div>
                                                    </li>

                                                </ol>
                                            {% endfor %}

                                            <!-- Modal Reviews
                                           ============================================= -->

                                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#reviewFormModal\"
                                               class=\"button button-3d nomargin fright\">Ajouter un commentaire</a>

                                            <div class=\"modal fade\" id=\"reviewFormModal\" tabindex=\"-1\" role=\"dialog\"
                                                 aria-labelledby=\"reviewFormModalLabel\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\"
                                                                    aria-hidden=\"true\">&times;
                                                            </button>

                                                            <h4 class=\"modal-title\" id=\"reviewFormModalLabel\">Ajout
                                                                commentaire</h4>
                                                        </div>

                                                        <div class=\"modal-body\">
                                                            {{ form_start(form) }}

                                                            {{ form_end(form) }}


                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-default\"
                                                                    data-dismiss=\"modal\">Close
                                                            </button>
                                                        </div>

                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <!-- Modal Reviews End -->

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>






{% endblock %}
{% block javascripts %}
    <script>
        function hotlilike(){
            \$.ajax({
                type: 'POST',
                url: '{{ path('_pasaimer',{'id': local.id}) }}',
                contentType: 'application\\json; charset=utf-8',
                dataType: 'json',
                success: function(){
                    console.log(response);
                    document.getElementById('sss').innerHTML='<a onclick=\"hotlidislike()\" href=\"#\" class=\"icon-like\">Like</a>';
                }
            });
        }
        function hotlidislike(){
            \$.ajax({
                type: 'POST',
                url: '{{ path('_aimer',{'id': local.id}) }}',
                contentType: 'application\\json; charset=utf-8',
                dataType: 'json',
                success: function(){
                    console.log(response);
                    document.getElementById('sss').innerHTML='<a onclick=\"hotlilike()\" href=\"#\" class=\"icon-dislike\">Dislike</a>';
                }
            });
        }
    </script>
{% endblock %}", "LocalBundle:Local:afficheDetail.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/afficheDetail.html.twig");
    }
}
