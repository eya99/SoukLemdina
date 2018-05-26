<?php

/* WorkshopBundle:Workshop:Redirect.html.twig */
class __TwigTemplate_e91531d48334f3671dd47a675cac06a34cf88ad6f4564118e7e3a0ea6920063c extends Twig_Template
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
        $__internal_05b75bae3b404fae51986e26e6410146aceedbf51e9a487825a6ee286cc5f726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b75bae3b404fae51986e26e6410146aceedbf51e9a487825a6ee286cc5f726->enter($__internal_05b75bae3b404fae51986e26e6410146aceedbf51e9a487825a6ee286cc5f726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:Redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05b75bae3b404fae51986e26e6410146aceedbf51e9a487825a6ee286cc5f726->leave($__internal_05b75bae3b404fae51986e26e6410146aceedbf51e9a487825a6ee286cc5f726_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9977f394b691692795e113978dee6f1a71190902c05736d3bd5f14ba7a00a5c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9977f394b691692795e113978dee6f1a71190902c05736d3bd5f14ba7a00a5c0->enter($__internal_9977f394b691692795e113978dee6f1a71190902c05736d3bd5f14ba7a00a5c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_9977f394b691692795e113978dee6f1a71190902c05736d3bd5f14ba7a00a5c0->leave($__internal_9977f394b691692795e113978dee6f1a71190902c05736d3bd5f14ba7a00a5c0_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f524e08bb70c75a4ca91ed61d961dca2ce928fdad07db9127cae77b19c4c1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f524e08bb70c75a4ca91ed61d961dca2ce928fdad07db9127cae77b19c4c1d9->enter($__internal_3f524e08bb70c75a4ca91ed61d961dca2ce928fdad07db9127cae77b19c4c1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3f524e08bb70c75a4ca91ed61d961dca2ce928fdad07db9127cae77b19c4c1d9->leave($__internal_3f524e08bb70c75a4ca91ed61d961dca2ce928fdad07db9127cae77b19c4c1d9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_99c16109845a97fb9164649899c8fa7e32ed15d24a9e33eb6b377f6b05de1bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c16109845a97fb9164649899c8fa7e32ed15d24a9e33eb6b377f6b05de1bf6->enter($__internal_99c16109845a97fb9164649899c8fa7e32ed15d24a9e33eb6b377f6b05de1bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


                <div class=\"center\" >
                    <div class=\"col_full\">
                        <div class=\"entry-image nobottommargin\" align=\"center\">

                            <a href=\"#\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "image", array()))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "nomWorkshop", array()), "html", null, true);
        echo "\"
                                             style=\"max-height: 2000px; max-width: 700px;\"></a>

                        </div>
                    </div>
                    <div class=\"container clearfix\">

                        <div class=\"heading-block center nomargin\">
                            <h3>Description de l'évenement !</h3>
                            <strong>";
        // line 49
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
                <article class=\"portfolio-item pf-illustrations\"><div> <font color=\"#ffffff\" > sdfghvjbkn </font></div></article>
                <article class=\"portfolio-item pf-illustrations\">
                    <div class=\"portfolio-image\">
                        <a href=\"portfolio-single.html\">
                            <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/portfolio/4/GPS-navigation.png"), "html", null, true);
        echo "\" alt=\"Locked Steel Gate\">
                        </a>
                        <div class=\"portfolio-overlay\">

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
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/portfolio/4/ListeDesParticipants-1.png"), "html", null, true);
        echo "\" alt=\"Mac Sunglasses\">
                        </a>
                        <div class=\"portfolio-overlay\">

                        </div>
                    </div>

                    <div class=\"portfolio-desc\">
                        <h3><a href=\"";
        // line 96
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

                        <div class=\" bottommargin\" align=\"center\">

                            <div class=\"team\" align=\"center\">

                                <div class=\"team-desc team-desc-bg\" align=\"center\">
                                    <a class=\"team-image\">
                                       <h2> <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("social_check_profile", array("id" => $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "idUser", array()), "id", array()))), "html", null, true);
        echo "\">Son Profile : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["workshop"]) ? $context["workshop"] : $this->getContext($context, "workshop")), "idUser", array()), "firstname", array()), "html", null, true);
        echo "</h2>
                                        </a>
                                    ";
        // line 126
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "image", array())) {
            // line 127
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "image", array()))), "html", null, true);
            echo "\" class=\"alignleft img-circle img-thumbnail
                                    notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">
                                    ";
        } else {
            // line 130
            echo "                                        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/icons/avatar.jpg"), "html", null, true);
            echo "\"
                                             class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\"
                                             alt=\"Avatar\" style=\"max-width: 84px;\">
                                    ";
        }
        // line 134
        echo "                                    </div>
                                    <div class=\"team-title\"><h4>  About :";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "aboutMe", array()), "html", null, true);
        echo " </h4><span></span></div>
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
        
        $__internal_99c16109845a97fb9164649899c8fa7e32ed15d24a9e33eb6b377f6b05de1bf6->leave($__internal_99c16109845a97fb9164649899c8fa7e32ed15d24a9e33eb6b377f6b05de1bf6_prof);

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
        return array (  251 => 135,  248 => 134,  240 => 130,  233 => 127,  231 => 126,  224 => 124,  193 => 96,  182 => 88,  164 => 73,  137 => 49,  123 => 40,  106 => 25,  103 => 24,  96 => 21,  93 => 20,  90 => 19,  84 => 17,  78 => 15,  75 => 14,  73 => 13,  69 => 12,  64 => 9,  58 => 8,  47 => 5,  36 => 4,  11 => 1,);
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


                <div class=\"center\" >
                    <div class=\"col_full\">
                        <div class=\"entry-image nobottommargin\" align=\"center\">

                            <a href=\"#\"><img src=\"{{ asset('uploads/images/' ~ workshop.image) }}\" alt=\"{{ workshop.nomWorkshop }}\"
                                             style=\"max-height: 2000px; max-width: 700px;\"></a>

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
                <article class=\"portfolio-item pf-illustrations\"><div> <font color=\"#ffffff\" > sdfghvjbkn </font></div></article>
                <article class=\"portfolio-item pf-illustrations\">
                    <div class=\"portfolio-image\">
                        <a href=\"portfolio-single.html\">
                            <img src=\"{{ asset('Template/images/portfolio/4/GPS-navigation.png')}}\" alt=\"Locked Steel Gate\">
                        </a>
                        <div class=\"portfolio-overlay\">

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
                            <img src=\"{{ asset('Template/images/portfolio/4/ListeDesParticipants-1.png')}}\" alt=\"Mac Sunglasses\">
                        </a>
                        <div class=\"portfolio-overlay\">

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

                        <div class=\" bottommargin\" align=\"center\">

                            <div class=\"team\" align=\"center\">

                                <div class=\"team-desc team-desc-bg\" align=\"center\">
                                    <a class=\"team-image\">
                                       <h2> <a href=\"{{ path('social_check_profile',{'id':profile.idUser.id}) }}\">Son Profile : {{ workshop.idUser.firstname }}</h2>
                                        </a>
                                    {% if profile.image %}
                                        <img src=\"{{ asset('uploads/images/' ~ profile.image) }}\" class=\"alignleft img-circle img-thumbnail
                                    notopmargin nobottommargin\" alt=\"Avatar\" style=\"max-width: 84px;\">
                                    {% else %}
                                        <img src=\"{{ asset('Template/images/icons/avatar.jpg') }}\"
                                             class=\"alignleft img-circle img-thumbnail notopmargin nobottommargin\"
                                             alt=\"Avatar\" style=\"max-width: 84px;\">
                                    {% endif %}
                                    </div>
                                    <div class=\"team-title\"><h4>  About :{{ profile.aboutMe }} </h4><span></span></div>
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
