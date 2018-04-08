<?php

/* WorkshopBundle:Workshop:Redirect.html.twig */
class __TwigTemplate_09728f9deab08cdb827bf7e61ccc2690c294a51c68b9ff0aa099560cec083acc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "WorkshopBundle:Workshop:Redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b927e4e57bc8b2bb31d193fa45902aed16ab0b66a7fd573b3371a97378a08335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b927e4e57bc8b2bb31d193fa45902aed16ab0b66a7fd573b3371a97378a08335->enter($__internal_b927e4e57bc8b2bb31d193fa45902aed16ab0b66a7fd573b3371a97378a08335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:Redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b927e4e57bc8b2bb31d193fa45902aed16ab0b66a7fd573b3371a97378a08335->leave($__internal_b927e4e57bc8b2bb31d193fa45902aed16ab0b66a7fd573b3371a97378a08335_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e90c28b65c86d86d374c5451c43506a06cd2f016b24054e077646d412adc398b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90c28b65c86d86d374c5451c43506a06cd2f016b24054e077646d412adc398b->enter($__internal_e90c28b65c86d86d374c5451c43506a06cd2f016b24054e077646d412adc398b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e90c28b65c86d86d374c5451c43506a06cd2f016b24054e077646d412adc398b->leave($__internal_e90c28b65c86d86d374c5451c43506a06cd2f016b24054e077646d412adc398b_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a82ef037dd763eb4bd519c87909e82d91484a2ee9f7c0c56de7f9862aa87d143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82ef037dd763eb4bd519c87909e82d91484a2ee9f7c0c56de7f9862aa87d143->enter($__internal_a82ef037dd763eb4bd519c87909e82d91484a2ee9f7c0c56de7f9862aa87d143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a82ef037dd763eb4bd519c87909e82d91484a2ee9f7c0c56de7f9862aa87d143->leave($__internal_a82ef037dd763eb4bd519c87909e82d91484a2ee9f7c0c56de7f9862aa87d143_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b95abc3eddd944a0585a34f544fcb8b74d41e41859005c464320e35ac38e7871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95abc3eddd944a0585a34f544fcb8b74d41e41859005c464320e35ac38e7871->enter($__internal_b95abc3eddd944a0585a34f544fcb8b74d41e41859005c464320e35ac38e7871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<div align=\"center\">
    <div>
    <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheWorkshop");
        echo "\" class=\"btn btn-default\" .col-md-2 >Retourner à la liste</a>
    ";
        // line 13
        if (((isset($context["nbparticip"]) ? $context["nbparticip"] : $this->getContext($context, "nbparticip")) < $this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "nbPlace", array()))) {
            // line 14
            echo "        ";
            if ((null === (isset($context["ParticipantWork"]) ? $context["ParticipantWork"] : $this->getContext($context, "ParticipantWork")))) {
                // line 15
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_Participer_work", array("id" => $this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" .col-md-11 >Participer</a>
        ";
            } else {
                // line 17
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_PasParticiper_work", array("id" => $this->getAttribute((isset($context["ParticipantWork"]) ? $context["ParticipantWork"] : $this->getContext($context, "ParticipantWork")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" .col-md-11 >NePlusParticiper </a>
        ";
            }
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "        ";
            if ((null === (isset($context["ParticipantWork"]) ? $context["ParticipantWork"] : $this->getContext($context, "ParticipantWork")))) {
                // line 21
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_Participer_work", array("id" => $this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\" .col-md-11 >Participer</a>
               <a href=\"#\" onclick=\"alert('plus de place')\">
        ";
            }
            // line 24
            echo "    ";
        }
        // line 25
        echo "</div>
</div>

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">
            <div class=\"row clearfix\">


                <div class=\"section topmargin nobottommargin nobottomborder\">
                    <div class=\"col_full\">
                        <div class=\"entry-image nobottommargin\">

                            <a href=\"#\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "image", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "nomWorkshop", array()), "html", null, true);
        echo "\"></a>

                        </div>
                    </div>
                    <div class=\"container clearfix\">

                        <div class=\"heading-block center nomargin\">
                            <h3>Description de l'évenement !</h3>
                            <strong>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "description", array()), "html", null, true);
        echo "</strong>
                        </div>

                    </div>
                </div>



            <div class=\"container clearfix\">

            </div>
            <div class=\"section topmargin nobottommargin nobottomborder\">
                <div class=\"container clearfix\">
                    <div class=\"heading-block center nomargin\">
                        <h3>A propos !</h3>
                    </div>
                </div>
            </div>

            <div id=\"portfolio\" class=\"portfolio grid-container portfolio-nomargin portfolio-notitle portfolio-full clearfix\">

                <article class=\"portfolio-item pf-illustrations\">
                    <div class=\"portfolio-image\">
                        <a href=\"portfolio-single.html\">
                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/portfolio/4/2.jpg"), "html", null, true);
        echo "\" alt=\"Locked Steel Gate\">
                        </a>
                        <div class=\"portfolio-overlay\">
                            <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/portfolio/full/2.jpg"), "html", null, true);
        echo "\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                            <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                        </div>
                    </div>
                    <div class=\"portfolio-desc\">
                        <h3><a href=\"portfolio-single.html\">Planning</a></h3>
                        <span><a href=\"#\"><Version PDF</a></span>
                    </div>
                </article>
                <article class=\"portfolio-item pf-illustrations\">
                    <div class=\"portfolio-image\">
                        <a href=\"portfolio-single.html\">
                            <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/portfolio/4/2.jpg"), "html", null, true);
        echo "\" alt=\"Locked Steel Gate\">
                        </a>
                        <div class=\"portfolio-overlay\">
                            <a href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/portfolio/full/2.jpg"), "html", null, true);
        echo "\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                            <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                        </div>
                    </div>
                    <div class=\"portfolio-desc\">
                        <h3><a href=\"portfolio-single.html\">Localisation du Workshop</a></h3>
                        <span><a href=\"#\"><Version PDF</a></span>
                    </div>
                </article>

                <article class=\"portfolio-item pf-graphics pf-uielements\">
                    <div class=\"portfolio-image\">
                        <a href=\"#\">
                            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/portfolio/4/3.jpg"), "html", null, true);
        echo "\" alt=\"Mac Sunglasses\">
                        </a>
                        <div class=\"portfolio-overlay\">
                            <a href=\"http://vimeo.com/89396394\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                            <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                        </div>
                    </div>
                    <div class=\"portfolio-desc\">
                        <h3><a href=\"portfolio-single-video.html\">Video</a></h3>
                        <span><a href=\"Un avant gout\">Un avant gout</a>
                    </div>
                </article>



                <article class=\"portfolio-item pf-uielements pf-media\">
                    <div class=\"portfolio-image\">

                          <a>  <img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/portfolio/4/5.jpg"), "html", null, true);
        echo "\" alt=\"Console Activity\"></a>
                        <div class=\"portfolio-overlay\">
                            <a href=\"http://vimeo.com/89396394\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                            <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                        </div>
                    </div>
                    <div class=\"portfolio-desc\">
                        <h3><a href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_ListeParticipant", array("id" => $this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "id", array()))), "html", null, true);
        echo "\">Liste des participants</a></h3>

                    </div>
                </article>



                    <div class=\"clear\"></div></article>

            </div>
            </a>

            <div class=\"section\">
                <div class=\"container clearfix\">


                    <div class=\"row topmargin-sm\" align=\"center\">

                        <div class=\"heading-block center\">
                            <h3>A propos du Formateur</h3>
                        </div>

                        <div class=\"col-md-3 col-sm-6 bottommargin\" align=\"center\">

                            <div class=\"team\" align=\"center\">

                                <div class=\"team-desc team-desc-bg\" align=\"center\">
                                    <a class=\"team-image\">
                                       <h2> <a href=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()))), "html", null, true);
        echo "\">Son Profile : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "idUser", array()), "firstname", array()), "html", null, true);
        echo "</h2>
                                        </a>
                                        <img src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "image", array()))), "html", null, true);
        echo "\" >
                                    </div>
                                    <div class=\"team-title\"><h4>  About :";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "aboutMe", array()), "html", null, true);
        echo " </h4><span></span></div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>

                        <div class=\"section parallax dark nobottommargin\" style=\"background-image: url('images/services/home-testi-bg.jpg'); padding: 100px 0;\" data-stellar-background-ratio=\"0.4\">

                <div class=\"heading-block center\">
                    <h3>What Clients Say?</h3>
                </div>

                <div class=\"fslider testimonial testimonial-full\" data-animation=\"fade\" data-arrows=\"false\">
                    <div class=\"flexslider\">
                        <div class=\"slider-wrap\">
                            <div class=\"slide\">
                                <div class=\"testi-image\">
                                    <a href=\"#\"><img src=\"(";
        // line 182
        echo "Template/images/testimonials/3.jpg";
        echo ")\" alt=\"Customer Testimonails\"></a>
                                </div>
                                <div class=\"testi-content\">
                                    <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                    <div class=\"testi-meta\">
                                        Steve Jobs
                                        <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide\">
                                <div class=\"testi-image\">
                                    <a href=\"#\"><img src=";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/imagesimages/testimonials/2.jpg"), "html", null, true);
        echo "\" alt=\"Customer Testimonails\"></a>
                                </div>
                                <div class=\"testi-content\">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class=\"testi-meta\">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide\">
                                <div class=\"testi-image\">
                                    <a href=\"#\"><img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/imagesimages/testimonials/1.jpg"), "html", null, true);
        echo "\" alt=\"Customer Testimonails\"></a>
                                </div>
                                <div class=\"testi-content\">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                    <div class=\"testi-meta\">
                                        John Doe
                                        <span>XYZ Inc.</span>
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

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"js/plugins.js\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"js/functions.js\"></script>

<script>
    jQuery('#video-slider-mute').on('click', function(e){
        e.preventDefault();

        if( jQuery(this).hasClass('video-muted') ) {
            jQuery('#slide-video').prop( 'muted', false );
        } else {
            jQuery('#slide-video').prop( 'muted', true );
        }

        jQuery(this).toggleClass('video-muted');
    });
</script>

</body>
</html>
";
        
        $__internal_b95abc3eddd944a0585a34f544fcb8b74d41e41859005c464320e35ac38e7871->leave($__internal_b95abc3eddd944a0585a34f544fcb8b74d41e41859005c464320e35ac38e7871_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Workshop:Redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 206,  320 => 194,  305 => 182,  280 => 160,  275 => 158,  268 => 156,  237 => 128,  227 => 121,  206 => 103,  190 => 90,  184 => 87,  169 => 75,  163 => 72,  136 => 48,  123 => 40,  106 => 25,  103 => 24,  96 => 21,  93 => 20,  90 => 19,  84 => 17,  78 => 15,  75 => 14,  73 => 13,  69 => 12,  64 => 9,  58 => 8,  47 => 5,  36 => 4,  11 => 1,);
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


{% block title %}{% endblock %}
{% block stylesheets %}{% endblock %}


{% block body %}

<div align=\"center\">
    <div>
    <a href=\"{{ path('_AfficheWorkshop' )}}\" class=\"btn btn-default\" .col-md-2 >Retourner à la liste</a>
    {% if nbparticip < workshop.nbPlace %}
        {% if ParticipantWork is null %}
            <a href=\"{{ path('_Participer_work',{'id': workshop.id}) }}\" class=\"btn btn-default\" .col-md-11 >Participer</a>
        {% else %}
            <a href=\"{{ path('_PasParticiper_work',{'id': ParticipantWork.id}) }}\" class=\"btn btn-default\" .col-md-11 >NePlusParticiper </a>
        {% endif %}
    {% else %}
        {% if ParticipantWork is null %}
            <a href=\"{{ path('_Participer_work',{'id': workshop.id}) }}\" class=\"btn btn-default\" .col-md-11 >Participer</a>
               <a href=\"#\" onclick=\"alert('plus de place')\">
        {% endif %}
    {% endif %}
</div>
</div>

    <!-- Content
    ============================================= -->
    <section id=\"content\">

        <div class=\"content-wrap\">
            <div class=\"row clearfix\">


                <div class=\"section topmargin nobottommargin nobottomborder\">
                    <div class=\"col_full\">
                        <div class=\"entry-image nobottommargin\">

                            <a href=\"#\"><img src=\"{{ asset('uploads/images/' ~ workshop.image) }}\" alt=\"{{ workshop.nomWorkshop }}\"></a>

                        </div>
                    </div>
                    <div class=\"container clearfix\">

                        <div class=\"heading-block center nomargin\">
                            <h3>Description de l'évenement !</h3>
                            <strong>{{ workshop.description }}</strong>
                        </div>

                    </div>
                </div>



            <div class=\"container clearfix\">

            </div>
            <div class=\"section topmargin nobottommargin nobottomborder\">
                <div class=\"container clearfix\">
                    <div class=\"heading-block center nomargin\">
                        <h3>A propos !</h3>
                    </div>
                </div>
            </div>

            <div id=\"portfolio\" class=\"portfolio grid-container portfolio-nomargin portfolio-notitle portfolio-full clearfix\">

                <article class=\"portfolio-item pf-illustrations\">
                    <div class=\"portfolio-image\">
                        <a href=\"portfolio-single.html\">
                            <img src=\"{{ asset('Template/images/portfolio/4/2.jpg')}}\" alt=\"Locked Steel Gate\">
                        </a>
                        <div class=\"portfolio-overlay\">
                            <a href=\"{{ asset('Template/images/portfolio/full/2.jpg')}}\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                            <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                        </div>
                    </div>
                    <div class=\"portfolio-desc\">
                        <h3><a href=\"portfolio-single.html\">Planning</a></h3>
                        <span><a href=\"#\"><Version PDF</a></span>
                    </div>
                </article>
                <article class=\"portfolio-item pf-illustrations\">
                    <div class=\"portfolio-image\">
                        <a href=\"portfolio-single.html\">
                            <img src=\"{{ asset('Template/images/portfolio/4/2.jpg')}}\" alt=\"Locked Steel Gate\">
                        </a>
                        <div class=\"portfolio-overlay\">
                            <a href=\"{{ asset('Template/images/portfolio/full/2.jpg')}}\" class=\"left-icon\" data-lightbox=\"image\"><i class=\"icon-line-plus\"></i></a>
                            <a href=\"portfolio-single.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                        </div>
                    </div>
                    <div class=\"portfolio-desc\">
                        <h3><a href=\"portfolio-single.html\">Localisation du Workshop</a></h3>
                        <span><a href=\"#\"><Version PDF</a></span>
                    </div>
                </article>

                <article class=\"portfolio-item pf-graphics pf-uielements\">
                    <div class=\"portfolio-image\">
                        <a href=\"#\">
                            <img src=\"{{ asset('Template/images/portfolio/4/3.jpg')}}\" alt=\"Mac Sunglasses\">
                        </a>
                        <div class=\"portfolio-overlay\">
                            <a href=\"http://vimeo.com/89396394\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                            <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                        </div>
                    </div>
                    <div class=\"portfolio-desc\">
                        <h3><a href=\"portfolio-single-video.html\">Video</a></h3>
                        <span><a href=\"Un avant gout\">Un avant gout</a>
                    </div>
                </article>



                <article class=\"portfolio-item pf-uielements pf-media\">
                    <div class=\"portfolio-image\">

                          <a>  <img src=\"{{ asset('Template/images/portfolio/4/5.jpg')}}\" alt=\"Console Activity\"></a>
                        <div class=\"portfolio-overlay\">
                            <a href=\"http://vimeo.com/89396394\" class=\"left-icon\" data-lightbox=\"iframe\"><i class=\"icon-line-play\"></i></a>
                            <a href=\"portfolio-single-video.html\" class=\"right-icon\"><i class=\"icon-line-ellipsis\"></i></a>
                        </div>
                    </div>
                    <div class=\"portfolio-desc\">
                        <h3><a href=\"{{ path('_ListeParticipant',{'id':workshop.id}) }}\">Liste des participants</a></h3>

                    </div>
                </article>



                    <div class=\"clear\"></div></article>

            </div>
            </a>

            <div class=\"section\">
                <div class=\"container clearfix\">


                    <div class=\"row topmargin-sm\" align=\"center\">

                        <div class=\"heading-block center\">
                            <h3>A propos du Formateur</h3>
                        </div>

                        <div class=\"col-md-3 col-sm-6 bottommargin\" align=\"center\">

                            <div class=\"team\" align=\"center\">

                                <div class=\"team-desc team-desc-bg\" align=\"center\">
                                    <a class=\"team-image\">
                                       <h2> <a href=\"{{ path('social_check_profile',{'id':profile.idUser.id}) }}\">Son Profile : {{ workshop.idUser.firstname }}</h2>
                                        </a>
                                        <img src=\"{{ asset('uploads/images/' ~ profile.image) }}\" >
                                    </div>
                                    <div class=\"team-title\"><h4>  About :{{ profile.aboutMe }} </h4><span></span></div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>

                        <div class=\"section parallax dark nobottommargin\" style=\"background-image: url('images/services/home-testi-bg.jpg'); padding: 100px 0;\" data-stellar-background-ratio=\"0.4\">

                <div class=\"heading-block center\">
                    <h3>What Clients Say?</h3>
                </div>

                <div class=\"fslider testimonial testimonial-full\" data-animation=\"fade\" data-arrows=\"false\">
                    <div class=\"flexslider\">
                        <div class=\"slider-wrap\">
                            <div class=\"slide\">
                                <div class=\"testi-image\">
                                    <a href=\"#\"><img src=\"({{'Template/images/testimonials/3.jpg'}})\" alt=\"Customer Testimonails\"></a>
                                </div>
                                <div class=\"testi-content\">
                                    <p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
                                    <div class=\"testi-meta\">
                                        Steve Jobs
                                        <span>Apple Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide\">
                                <div class=\"testi-image\">
                                    <a href=\"#\"><img src={{ asset('Template/imagesimages/testimonials/2.jpg')}}\" alt=\"Customer Testimonails\"></a>
                                </div>
                                <div class=\"testi-content\">
                                    <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                    <div class=\"testi-meta\">
                                        Collis Ta'eed
                                        <span>Envato Inc.</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"slide\">
                                <div class=\"testi-image\">
                                    <a href=\"#\"><img src=\"{{ asset('Template/imagesimages/testimonials/1.jpg')}}\" alt=\"Customer Testimonails\"></a>
                                </div>
                                <div class=\"testi-content\">
                                    <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                    <div class=\"testi-meta\">
                                        John Doe
                                        <span>XYZ Inc.</span>
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

<!-- External JavaScripts
============================================= -->
<script type=\"text/javascript\" src=\"js/jquery.js\"></script>
<script type=\"text/javascript\" src=\"js/plugins.js\"></script>

<!-- Footer Scripts
============================================= -->
<script type=\"text/javascript\" src=\"js/functions.js\"></script>

<script>
    jQuery('#video-slider-mute').on('click', function(e){
        e.preventDefault();

        if( jQuery(this).hasClass('video-muted') ) {
            jQuery('#slide-video').prop( 'muted', false );
        } else {
            jQuery('#slide-video').prop( 'muted', true );
        }

        jQuery(this).toggleClass('video-muted');
    });
</script>

</body>
</html>
{% endblock %}
", "WorkshopBundle:Workshop:Redirect.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Workshop/Redirect.html.twig");
    }
}
