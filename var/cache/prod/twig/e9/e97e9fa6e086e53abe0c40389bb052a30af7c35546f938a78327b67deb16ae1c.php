<?php

/* EvenementBundle:Evenement:DetailsEvent.html.twig */
class __TwigTemplate_62be72d1373ac4c0c3efc2071deaeebff3b0546ec8bcf463aed54fbffaf16f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EvenementBundle:Evenement:AfficheEvent.html.twig", "EvenementBundle:Evenement:DetailsEvent.html.twig", 2);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EvenementBundle:Evenement:AfficheEvent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f75c57bd8ff14678c36a03dc14f8534da0f2bb8f43e6efaa24a19e54fcb3183f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75c57bd8ff14678c36a03dc14f8534da0f2bb8f43e6efaa24a19e54fcb3183f->enter($__internal_f75c57bd8ff14678c36a03dc14f8534da0f2bb8f43e6efaa24a19e54fcb3183f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:DetailsEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f75c57bd8ff14678c36a03dc14f8534da0f2bb8f43e6efaa24a19e54fcb3183f->leave($__internal_f75c57bd8ff14678c36a03dc14f8534da0f2bb8f43e6efaa24a19e54fcb3183f_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_8faa90325ae584ee4201c554ca5edc3cbe1be338d94ae11c1e5145407c030522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8faa90325ae584ee4201c554ca5edc3cbe1be338d94ae11c1e5145407c030522->enter($__internal_8faa90325ae584ee4201c554ca5edc3cbe1be338d94ae11c1e5145407c030522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8faa90325ae584ee4201c554ca5edc3cbe1be338d94ae11c1e5145407c030522->leave($__internal_8faa90325ae584ee4201c554ca5edc3cbe1be338d94ae11c1e5145407c030522_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb154a31c6d54f67945533c4c0774e0895aa9874b0d37805ab89d2478693ff0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb154a31c6d54f67945533c4c0774e0895aa9874b0d37805ab89d2478693ff0a->enter($__internal_bb154a31c6d54f67945533c4c0774e0895aa9874b0d37805ab89d2478693ff0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "
    <title>Détail de l'événement</title>

";
        
        $__internal_bb154a31c6d54f67945533c4c0774e0895aa9874b0d37805ab89d2478693ff0a->leave($__internal_bb154a31c6d54f67945533c4c0774e0895aa9874b0d37805ab89d2478693ff0a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1395b193052b4a3d8ba470695cdb4c573c1bee486e98487c1040dd6b960ff071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1395b193052b4a3d8ba470695cdb4c573c1bee486e98487c1040dd6b960ff071->enter($__internal_1395b193052b4a3d8ba470695cdb4c573c1bee486e98487c1040dd6b960ff071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        <section id=\"page-title\" style=\"background-color:#40E0D0\">

            <div class=\"container clearfix\">
                <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomEvenement", array()), "html", null, true);
        echo "</h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\">Accueil</a></li>
                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheEvent");
        echo "\">Evenements</a></li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->

            <div class=\"content-wrap\">

                <!-- Google Map
                ============================================= -->

                <div class=\"clear\"></div>

                <div class=\"container topmargin clearfix\">

                    <div class=\"sidebar nobottommargin clearfix\">
                        <div class=\"sidebar-widgets-wrap\">

                            <div class=\"widget widget_links clearfix\">



                            </div>


                            <div class=\"widget widget-twitter-feed clearfix\">

                            </div>

                        </div>
                    </div>

                    <div class=\"postcontent bothsidebar nobottommargin clearfix\">

                        <div class=\"single-event\">

                            <div class=\"col_full\">
                                <div class=\"entry-image nobottommargin\">
                                    <a href=\"#\"><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photo", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomEvenement", array()), "html", null, true);
        echo "\" ></a>

                                </div>
                            </div>

                            </div>
                            <div class=\"col_full\">
                                <div class=\"panel panel-default events-meta\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Informations utiles:</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <ul class=\"iconlist nobottommargin\">
                                            <li><i class=\"icon-calendar3\"></i>type: ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "type", array()), "html", null, true);
        echo "</li>
                                            <li><i class=\"icon-calendar3\"></i>nombre de place: ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nbPlace", array()), "html", null, true);
        echo "</li>
                                            <li><i class=\"icon-calendar3\"></i> ";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        echo "</li>
                                            <li><i class=\"icon-time\"></i>";
        // line 76
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "heure", array()), "h:m"), "html", null, true);
        echo "</li>
                                            <li><i class=\"icon-map-marker2\"></i> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "adresse", array()), "html", null, true);
        echo "</li>
                                            <li><i class=\"icon-euro\"></i> <strong>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "prix", array()), "html", null, true);
        echo "</strong></li>
                                        </ul>
                                    </div>
                                </div>

                         ";
        // line 83
        if (($this->getAttribute($this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "idUser", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
            // line 84
            echo "
                                ";
            // line 85
            if ((null === (isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")))) {
                // line 86
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_ParticiperEvent", array("id" => $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-block btn-lg\">Participer à ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomEvenement", array()), "html", null, true);
                echo "</a>
                                ";
            } else {
                // line 88
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_nParticiperEvent", array("id" => $this->getAttribute((isset($context["participants"]) ? $context["participants"] : $this->getContext($context, "participants")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-success btn-block btn-lg\">ne plus Participer à ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "nomEvenement", array()), "html", null, true);
                echo "</a>
                                           ";
            }
            // line 90
            echo "                                ";
        }
        // line 91
        echo "                            </div>

                            <div class=\"col_full\">

                                <h3>Description de l'évenement</h3>

                                <p>";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "description", array()), "html", null, true);
        echo "</p>


                            </div>


                            <div class=\"col_full nobottommargin\">


                            </div>

                        </div>

                    </div>

                    <div class=\"sidebar nobottommargin col_last clearfix\">
                        <div class=\"sidebar-widgets-wrap\">



                            <div class=\"widget clearfix\">




                            <div class=\"widget quick-contact-widget clearfix\">


                        </div>
                    </div>

                </div>

            </div>
            </div>


        <!-- #content end -->

        <!-- Footer
        ============================================= -->

        <!-- Go To Top
        ============================================= -->
        <div id=\"gotoTop\" class=\"icon-angle-up\"></div>

    ";
        
        $__internal_1395b193052b4a3d8ba470695cdb4c573c1bee486e98487c1040dd6b960ff071->leave($__internal_1395b193052b4a3d8ba470695cdb4c573c1bee486e98487c1040dd6b960ff071_prof);

    }

    // line 147
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e523cb959338ec6fc7387ff3e048d402fbe508a0932ad3229561bda2b2f0498c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e523cb959338ec6fc7387ff3e048d402fbe508a0932ad3229561bda2b2f0498c->enter($__internal_e523cb959338ec6fc7387ff3e048d402fbe508a0932ad3229561bda2b2f0498c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 148
        echo "    <!-- External JavaScripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.gmap.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

        jQuery(document).ready( function(\$){

            var eventStartDate = new Date();
            eventStartDate = new Date(2016, 2, 31);
            \$('#event-countdown').countdown({until: eventStartDate});

        });

        \$('#google-map').gMap({
            address: 'Ibiza, Spain',
            maptype: 'ROADMAP',
            zoom: 13,
            markers: [
                {
                    address: \"Ibiza, Spain\"
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }

        });

";
        
        $__internal_e523cb959338ec6fc7387ff3e048d402fbe508a0932ad3229561bda2b2f0498c->leave($__internal_e523cb959338ec6fc7387ff3e048d402fbe508a0932ad3229561bda2b2f0498c_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Evenement:DetailsEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 158,  284 => 155,  277 => 151,  273 => 150,  269 => 148,  263 => 147,  209 => 97,  201 => 91,  198 => 90,  190 => 88,  182 => 86,  180 => 85,  177 => 84,  175 => 83,  167 => 78,  163 => 77,  159 => 76,  155 => 75,  151 => 74,  147 => 73,  128 => 60,  84 => 19,  80 => 18,  75 => 16,  70 => 13,  64 => 12,  54 => 7,  48 => 6,  37 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"EvenementBundle:Evenement:AfficheEvent.html.twig\" %}

{% block head %}
{% endblock %}
{% block stylesheets %}

    <title>Détail de l'événement</title>

{% endblock %}

    {% block body %}
        <section id=\"page-title\" style=\"background-color:#40E0D0\">

            <div class=\"container clearfix\">
                <h1>{{ e.nomEvenement  }}</h1>
                <ol class=\"breadcrumb\">
                    <li><a href=\"{{ path('fos_visitor_home') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('_AfficheEvent') }}\">Evenements</a></li>
                </ol>
            </div>

        </section><!-- #page-title end -->

        <!-- Content
        ============================================= -->

            <div class=\"content-wrap\">

                <!-- Google Map
                ============================================= -->

                <div class=\"clear\"></div>

                <div class=\"container topmargin clearfix\">

                    <div class=\"sidebar nobottommargin clearfix\">
                        <div class=\"sidebar-widgets-wrap\">

                            <div class=\"widget widget_links clearfix\">



                            </div>


                            <div class=\"widget widget-twitter-feed clearfix\">

                            </div>

                        </div>
                    </div>

                    <div class=\"postcontent bothsidebar nobottommargin clearfix\">

                        <div class=\"single-event\">

                            <div class=\"col_full\">
                                <div class=\"entry-image nobottommargin\">
                                    <a href=\"#\"><img src=\"{{ asset('uploads/images/') }}{{ e.photo }}\" alt=\"{{ e.nomEvenement }}\" ></a>

                                </div>
                            </div>

                            </div>
                            <div class=\"col_full\">
                                <div class=\"panel panel-default events-meta\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Informations utiles:</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <ul class=\"iconlist nobottommargin\">
                                            <li><i class=\"icon-calendar3\"></i>type: {{ e.type }}</li>
                                            <li><i class=\"icon-calendar3\"></i>nombre de place: {{ e.nbPlace }}</li>
                                            <li><i class=\"icon-calendar3\"></i> {{ e.dateDebut|date('Y-m-d')}}</li>
                                            <li><i class=\"icon-time\"></i>{{ e.heure| date(\"h:m\") }}</li>
                                            <li><i class=\"icon-map-marker2\"></i> {{ e.adresse }}</li>
                                            <li><i class=\"icon-euro\"></i> <strong>{{ e.prix }}</strong></li>
                                        </ul>
                                    </div>
                                </div>

                         {% if e.idUser.id != app.user.id %}

                                {% if participants is null %}
                                <a href=\"{{ path('_ParticiperEvent',{'id':e.id}) }}\" class=\"btn btn-success btn-block btn-lg\">Participer à {{ e.nomEvenement }}</a>
                                {% else %}
                                <a href=\"{{ path('_nParticiperEvent',{'id':participants.id}) }}\" class=\"btn btn-success btn-block btn-lg\">ne plus Participer à {{ e.nomEvenement }}</a>
                                           {% endif %}
                                {% endif %}
                            </div>

                            <div class=\"col_full\">

                                <h3>Description de l'évenement</h3>

                                <p>{{ e.description }}</p>


                            </div>


                            <div class=\"col_full nobottommargin\">


                            </div>

                        </div>

                    </div>

                    <div class=\"sidebar nobottommargin col_last clearfix\">
                        <div class=\"sidebar-widgets-wrap\">



                            <div class=\"widget clearfix\">




                            <div class=\"widget quick-contact-widget clearfix\">


                        </div>
                    </div>

                </div>

            </div>
            </div>


        <!-- #content end -->

        <!-- Footer
        ============================================= -->

        <!-- Go To Top
        ============================================= -->
        <div id=\"gotoTop\" class=\"icon-angle-up\"></div>

    {% endblock %}



{%block javascript%}
    <!-- External JavaScripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/plugins.js')}}\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/functions.js')}}\"></script>

    <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.gmap.js')}}\"></script>

    <script type=\"text/javascript\">

        jQuery(document).ready( function(\$){

            var eventStartDate = new Date();
            eventStartDate = new Date(2016, 2, 31);
            \$('#event-countdown').countdown({until: eventStartDate});

        });

        \$('#google-map').gMap({
            address: 'Ibiza, Spain',
            maptype: 'ROADMAP',
            zoom: 13,
            markers: [
                {
                    address: \"Ibiza, Spain\"
                }
            ],
            doubleclickzoom: false,
            controls: {
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: false,
                streetViewControl: false,
                overviewMapControl: false
            }

        });

{% endblock %}", "EvenementBundle:Evenement:DetailsEvent.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/EvenementBundle/Resources/views/Evenement/DetailsEvent.html.twig");
    }
}
