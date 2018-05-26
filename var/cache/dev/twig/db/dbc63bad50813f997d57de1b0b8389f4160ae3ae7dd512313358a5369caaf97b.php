<?php

/* WorkshopBundle:Workshop:DetailsWorkshop.html.twig */
class __TwigTemplate_6d79c2b29acf1d2ff84819ea8bfde61f9c24bd9eced47810fea7d5035dcbecf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "WorkshopBundle:Workshop:DetailsWorkshop.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c990db38bbfd04e24f3a05a61e2b4d5b1b9745bf276b9c8a1ed50e39e5dce80e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c990db38bbfd04e24f3a05a61e2b4d5b1b9745bf276b9c8a1ed50e39e5dce80e->enter($__internal_c990db38bbfd04e24f3a05a61e2b4d5b1b9745bf276b9c8a1ed50e39e5dce80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:DetailsWorkshop.html.twig"));

        $__internal_17ac1d1374ec904b5f63bc2aee1cf9a5cfc29b6cbd8bff322f2bb7c43e0d1bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ac1d1374ec904b5f63bc2aee1cf9a5cfc29b6cbd8bff322f2bb7c43e0d1bb4->enter($__internal_17ac1d1374ec904b5f63bc2aee1cf9a5cfc29b6cbd8bff322f2bb7c43e0d1bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:DetailsWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c990db38bbfd04e24f3a05a61e2b4d5b1b9745bf276b9c8a1ed50e39e5dce80e->leave($__internal_c990db38bbfd04e24f3a05a61e2b4d5b1b9745bf276b9c8a1ed50e39e5dce80e_prof);

        
        $__internal_17ac1d1374ec904b5f63bc2aee1cf9a5cfc29b6cbd8bff322f2bb7c43e0d1bb4->leave($__internal_17ac1d1374ec904b5f63bc2aee1cf9a5cfc29b6cbd8bff322f2bb7c43e0d1bb4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0ead5ef057a5c0f46fc742be1be0d572f3401f335afa500d006f2c11bfbddb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ead5ef057a5c0f46fc742be1be0d572f3401f335afa500d006f2c11bfbddb5->enter($__internal_e0ead5ef057a5c0f46fc742be1be0d572f3401f335afa500d006f2c11bfbddb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_465f873be8b1df729bc8f70d6d28919e73c04c820bbecf9c8c58e8171a19ccb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465f873be8b1df729bc8f70d6d28919e73c04c820bbecf9c8c58e8171a19ccb8->enter($__internal_465f873be8b1df729bc8f70d6d28919e73c04c820bbecf9c8c58e8171a19ccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_465f873be8b1df729bc8f70d6d28919e73c04c820bbecf9c8c58e8171a19ccb8->leave($__internal_465f873be8b1df729bc8f70d6d28919e73c04c820bbecf9c8c58e8171a19ccb8_prof);

        
        $__internal_e0ead5ef057a5c0f46fc742be1be0d572f3401f335afa500d006f2c11bfbddb5->leave($__internal_e0ead5ef057a5c0f46fc742be1be0d572f3401f335afa500d006f2c11bfbddb5_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57dbf0db61be3917d10c2ae0e7499d472609a3e030fb9edb9350d533a9c09002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57dbf0db61be3917d10c2ae0e7499d472609a3e030fb9edb9350d533a9c09002->enter($__internal_57dbf0db61be3917d10c2ae0e7499d472609a3e030fb9edb9350d533a9c09002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_07bb4fd259a176c3c2861092b3c5eeaac862c7908b7372d4849e77f8a995d3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07bb4fd259a176c3c2861092b3c5eeaac862c7908b7372d4849e77f8a995d3da->enter($__internal_07bb4fd259a176c3c2861092b3c5eeaac862c7908b7372d4849e77f8a995d3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    <title>Détails du workshop</title>

";
        
        $__internal_07bb4fd259a176c3c2861092b3c5eeaac862c7908b7372d4849e77f8a995d3da->leave($__internal_07bb4fd259a176c3c2861092b3c5eeaac862c7908b7372d4849e77f8a995d3da_prof);

        
        $__internal_57dbf0db61be3917d10c2ae0e7499d472609a3e030fb9edb9350d533a9c09002->leave($__internal_57dbf0db61be3917d10c2ae0e7499d472609a3e030fb9edb9350d533a9c09002_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab9359ceb05d02efc8be359d7936c0c0027fffa3d0d4475d25395a29d7d5bdc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9359ceb05d02efc8be359d7936c0c0027fffa3d0d4475d25395a29d7d5bdc0->enter($__internal_ab9359ceb05d02efc8be359d7936c0c0027fffa3d0d4475d25395a29d7d5bdc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ac9b2b61dd2046117679b15420905d8bb01fd3800fe7f9e6d69e25bdb263702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac9b2b61dd2046117679b15420905d8bb01fd3800fe7f9e6d69e25bdb263702->enter($__internal_1ac9b2b61dd2046117679b15420905d8bb01fd3800fe7f9e6d69e25bdb263702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")), "nomWorkshop", array()), "html", null, true);
        echo "</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\">Home</a></li>
                <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AfficheWorkshop");
        echo "\">Events</a></li>
            </ol>
        </div>

    </section><!-- #page-title end -->

<!-- Content
============================================= -->

<div class=\"content-wrap\">

    <!-- Google Map
    ============================================= -->
    <section id=\"google-map\" class=\"gmap header-stick\" style=\"margin-bottom: 20px;\"></section>

    <div class=\"clear\"></div>

    <div class=\"container topmargin clearfix\">
        <div class=\"col_full\">

            <STRONG>Description du Workshop</STRONG>

            <p>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")), "description", array()), "html", null, true);
        echo "</p>

        </div>

        <div class=\"sidebar nobottommargin clearfix\">
            <div class=\"sidebar-widgets-wrap\">

            </div>
        </div>

        <div class=\"postcontent bothsidebar nobottommargin clearfix\">

            <div class=\"single-event\">

                <div class=\"col_full\">
                    <div class=\"entry-image nobottommargin\">
                        <a href=\"#\"><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/events/2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>

                    </div>
                </div>
                <div class=\"col_full\">
                    <div class=\"panel panel-default events-meta\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Informations :</h3>
                        </div>
                        <div class=\"panel-body\">
                            <ul class=\"iconlist nobottommargin\">
                                <li><i class=\"icon-calendar3\"></i>type: ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")), "type", array()), "html", null, true);
        echo "</li>
                                <li><i class=\"icon-calendar3\"></i>nombre de place: ";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")), "nbPlace", array()), "html", null, true);
        echo "</li>
                                <li><i class=\"icon-calendar3\"></i> ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        echo "</li>
                                <li><i class=\"icon-map-marker2\"></i> ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")), "adresse", array()), "html", null, true);
        echo "</li>
                                <li><i class=\"icon-euro\"></i> <strong>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")), "prix", array()), "html", null, true);
        echo "</strong></li>
                            </ul>
                        </div>
                    </div>
                    <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" class=\"btn btn-success btn-block btn-lg\">Participer</a>
                </div>
                <div class=\"col_full nobottommargin\">


                </div>

            </div>

        </div>

        <div class=\"sidebar nobottommargin col_last clearfix\">
            <div class=\"sidebar-widgets-wrap\">



                <div class=\"widget clearfix\">




                    <div class=\"widget quick-contact-widget clearfix\">

                        <h4>Quick Contact</h4>
                        <div class=\"quick-contact-form-result\"></div>
                        <form id=\"quick-contact-form\" name=\"quick-contact-form\" action=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/include/quickcontact.php"), "html", null, true);
        echo "\" method=\"post\" class=\"quick-contact-form nobottommargin\">
                            <div class=\"form-process\"></div>

                            <input type=\"text\" class=\"required sm-form-control input-block-level\" id=\"quick-contact-form-name\" name=\"quick-contact-form-name\" value=\"\" placeholder=\"Full Name\" />
                            <input type=\"text\" class=\"required sm-form-control email input-block-level\" id=\"quick-contact-form-email\" name=\"quick-contact-form-email\" value=\"\" placeholder=\"Email Address\" />
                            <textarea class=\"required sm-form-control input-block-level short-textarea\" id=\"quick-contact-form-message\" name=\"quick-contact-form-message\" rows=\"4\" cols=\"30\" placeholder=\"Message\"></textarea>
                            <input type=\"text\" class=\"hidden\" id=\"quick-contact-form-botcheck\" name=\"quick-contact-form-botcheck\" value=\"\" />
                            <button type=\"submit\" id=\"quick-contact-form-submit\" name=\"quick-contact-form-submit\" class=\"button button-small button-3d nomargin\" value=\"submit\">Send Email</button>
                        </form>

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
        
        $__internal_1ac9b2b61dd2046117679b15420905d8bb01fd3800fe7f9e6d69e25bdb263702->leave($__internal_1ac9b2b61dd2046117679b15420905d8bb01fd3800fe7f9e6d69e25bdb263702_prof);

        
        $__internal_ab9359ceb05d02efc8be359d7936c0c0027fffa3d0d4475d25395a29d7d5bdc0->leave($__internal_ab9359ceb05d02efc8be359d7936c0c0027fffa3d0d4475d25395a29d7d5bdc0_prof);

    }

    // line 132
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e503c1166323b2f182552386d6c18d73c91449bd045004e72756160468c5da3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e503c1166323b2f182552386d6c18d73c91449bd045004e72756160468c5da3b->enter($__internal_e503c1166323b2f182552386d6c18d73c91449bd045004e72756160468c5da3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_807ef1585a57b1b3345323df929fe25d8351acd3a8a2a61c1bf79a86e4230676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807ef1585a57b1b3345323df929fe25d8351acd3a8a2a61c1bf79a86e4230676->enter($__internal_807ef1585a57b1b3345323df929fe25d8351acd3a8a2a61c1bf79a86e4230676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 133
        echo "    <!-- External JavaScripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"https://maps.google.com/maps/api/js?key=AIzaSyDMxJ92oBkSnVNHFX3R8XhtYQPEgk1_IiI\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 143
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
        
        $__internal_807ef1585a57b1b3345323df929fe25d8351acd3a8a2a61c1bf79a86e4230676->leave($__internal_807ef1585a57b1b3345323df929fe25d8351acd3a8a2a61c1bf79a86e4230676_prof);

        
        $__internal_e503c1166323b2f182552386d6c18d73c91449bd045004e72756160468c5da3b->leave($__internal_e503c1166323b2f182552386d6c18d73c91449bd045004e72756160468c5da3b_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Workshop:DetailsWorkshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 143,  277 => 140,  270 => 136,  266 => 135,  262 => 133,  253 => 132,  214 => 100,  186 => 75,  179 => 71,  175 => 70,  171 => 69,  167 => 68,  163 => 67,  149 => 56,  130 => 40,  105 => 18,  101 => 17,  96 => 15,  91 => 12,  82 => 11,  69 => 6,  60 => 5,  43 => 3,  11 => 1,);
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

{% block title %}
{% endblock %}
{% block stylesheets %}

    <title>Détails du workshop</title>

{% endblock %}

    {% block body %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>{{ w.nomWorkshop  }}</h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('fos_visitor_home') }}\">Home</a></li>
                <li><a href=\"{{ path('_AfficheWorkshop') }}\">Events</a></li>
            </ol>
        </div>

    </section><!-- #page-title end -->

<!-- Content
============================================= -->

<div class=\"content-wrap\">

    <!-- Google Map
    ============================================= -->
    <section id=\"google-map\" class=\"gmap header-stick\" style=\"margin-bottom: 20px;\"></section>

    <div class=\"clear\"></div>

    <div class=\"container topmargin clearfix\">
        <div class=\"col_full\">

            <STRONG>Description du Workshop</STRONG>

            <p>{{ w.description }}</p>

        </div>

        <div class=\"sidebar nobottommargin clearfix\">
            <div class=\"sidebar-widgets-wrap\">

            </div>
        </div>

        <div class=\"postcontent bothsidebar nobottommargin clearfix\">

            <div class=\"single-event\">

                <div class=\"col_full\">
                    <div class=\"entry-image nobottommargin\">
                        <a href=\"#\"><img src=\"{{ asset('Template/images/events/2.jpg')}}\" alt=\"\"></a>

                    </div>
                </div>
                <div class=\"col_full\">
                    <div class=\"panel panel-default events-meta\">
                        <div class=\"panel-heading\">
                            <h3 class=\"panel-title\">Informations :</h3>
                        </div>
                        <div class=\"panel-body\">
                            <ul class=\"iconlist nobottommargin\">
                                <li><i class=\"icon-calendar3\"></i>type: {{ w.type }}</li>
                                <li><i class=\"icon-calendar3\"></i>nombre de place: {{ w.nbPlace }}</li>
                                <li><i class=\"icon-calendar3\"></i> {{ w.dateDebut|date('Y-m-d')}}</li>
                                <li><i class=\"icon-map-marker2\"></i> {{ w.adresse }}</li>
                                <li><i class=\"icon-euro\"></i> <strong>{{ w.prix }}</strong></li>
                            </ul>
                        </div>
                    </div>
                    <a href=\"{{ path('fos_user_security_login') }}\" class=\"btn btn-success btn-block btn-lg\">Participer</a>
                </div>
                <div class=\"col_full nobottommargin\">


                </div>

            </div>

        </div>

        <div class=\"sidebar nobottommargin col_last clearfix\">
            <div class=\"sidebar-widgets-wrap\">



                <div class=\"widget clearfix\">




                    <div class=\"widget quick-contact-widget clearfix\">

                        <h4>Quick Contact</h4>
                        <div class=\"quick-contact-form-result\"></div>
                        <form id=\"quick-contact-form\" name=\"quick-contact-form\" action=\"{{ asset('Template/include/quickcontact.php')}}\" method=\"post\" class=\"quick-contact-form nobottommargin\">
                            <div class=\"form-process\"></div>

                            <input type=\"text\" class=\"required sm-form-control input-block-level\" id=\"quick-contact-form-name\" name=\"quick-contact-form-name\" value=\"\" placeholder=\"Full Name\" />
                            <input type=\"text\" class=\"required sm-form-control email input-block-level\" id=\"quick-contact-form-email\" name=\"quick-contact-form-email\" value=\"\" placeholder=\"Email Address\" />
                            <textarea class=\"required sm-form-control input-block-level short-textarea\" id=\"quick-contact-form-message\" name=\"quick-contact-form-message\" rows=\"4\" cols=\"30\" placeholder=\"Message\"></textarea>
                            <input type=\"text\" class=\"hidden\" id=\"quick-contact-form-botcheck\" name=\"quick-contact-form-botcheck\" value=\"\" />
                            <button type=\"submit\" id=\"quick-contact-form-submit\" name=\"quick-contact-form-submit\" class=\"button button-small button-3d nomargin\" value=\"submit\">Send Email</button>
                        </form>

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

{% endblock %}", "WorkshopBundle:Workshop:DetailsWorkshop.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Workshop/DetailsWorkshop.html.twig");
    }
}
