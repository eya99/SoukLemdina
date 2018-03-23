<?php

/* WorkshopBundle:Workshop:DetailsWorkshop.html.twig */
class __TwigTemplate_e4516349fdde17e8fa823d5062e5edd6416674ac5df8d53ab2bd55d7be3ef874 extends Twig_Template
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
        $__internal_933645db531822043780002cf81168e2b032bda8d41040ef933b3b5f6069b571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933645db531822043780002cf81168e2b032bda8d41040ef933b3b5f6069b571->enter($__internal_933645db531822043780002cf81168e2b032bda8d41040ef933b3b5f6069b571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:DetailsWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_933645db531822043780002cf81168e2b032bda8d41040ef933b3b5f6069b571->leave($__internal_933645db531822043780002cf81168e2b032bda8d41040ef933b3b5f6069b571_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57229f210dca4e563702e6c47bddfd20ed97e30dd984fb6c8eb20ff36e64d12a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57229f210dca4e563702e6c47bddfd20ed97e30dd984fb6c8eb20ff36e64d12a->enter($__internal_57229f210dca4e563702e6c47bddfd20ed97e30dd984fb6c8eb20ff36e64d12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_57229f210dca4e563702e6c47bddfd20ed97e30dd984fb6c8eb20ff36e64d12a->leave($__internal_57229f210dca4e563702e6c47bddfd20ed97e30dd984fb6c8eb20ff36e64d12a_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c46120c955b3872aedf0f75772271f7ec29c2e39236e3a96d07b5c770be4ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c46120c955b3872aedf0f75772271f7ec29c2e39236e3a96d07b5c770be4ee5->enter($__internal_3c46120c955b3872aedf0f75772271f7ec29c2e39236e3a96d07b5c770be4ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "
    <title>Détails du workshop</title>

";
        
        $__internal_3c46120c955b3872aedf0f75772271f7ec29c2e39236e3a96d07b5c770be4ee5->leave($__internal_3c46120c955b3872aedf0f75772271f7ec29c2e39236e3a96d07b5c770be4ee5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef6dea3fd0b1e10023a1a8c4f2114013b58486a31a78b795502f360c9058e698 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6dea3fd0b1e10023a1a8c4f2114013b58486a31a78b795502f360c9058e698->enter($__internal_ef6dea3fd0b1e10023a1a8c4f2114013b58486a31a78b795502f360c9058e698_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef6dea3fd0b1e10023a1a8c4f2114013b58486a31a78b795502f360c9058e698->leave($__internal_ef6dea3fd0b1e10023a1a8c4f2114013b58486a31a78b795502f360c9058e698_prof);

    }

    // line 132
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_855e1bdc7c3b4d6b08c57d7b2ffac4878690a1455418a02f8a099f0a65b3c1fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855e1bdc7c3b4d6b08c57d7b2ffac4878690a1455418a02f8a099f0a65b3c1fc->enter($__internal_855e1bdc7c3b4d6b08c57d7b2ffac4878690a1455418a02f8a099f0a65b3c1fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

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
        
        $__internal_855e1bdc7c3b4d6b08c57d7b2ffac4878690a1455418a02f8a099f0a65b3c1fc->leave($__internal_855e1bdc7c3b4d6b08c57d7b2ffac4878690a1455418a02f8a099f0a65b3c1fc_prof);

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
        return array (  256 => 143,  250 => 140,  243 => 136,  239 => 135,  235 => 133,  229 => 132,  193 => 100,  165 => 75,  158 => 71,  154 => 70,  150 => 69,  146 => 68,  142 => 67,  128 => 56,  109 => 40,  84 => 18,  80 => 17,  75 => 15,  70 => 12,  64 => 11,  54 => 6,  48 => 5,  37 => 3,  11 => 1,);
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
