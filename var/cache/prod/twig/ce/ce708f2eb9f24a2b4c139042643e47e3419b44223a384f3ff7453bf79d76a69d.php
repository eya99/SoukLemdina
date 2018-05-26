<?php

/* EvenementBundle:Evenement:AfficheEvent.html.twig */
class __TwigTemplate_2020fd5e68f9793b51083d1207273b5b15a2312ba99e895cff6af4f0069bec97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "EvenementBundle:Evenement:AfficheEvent.html.twig", 1);
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
        $__internal_13b9eb2ff867b5899a4f5a48e025cf5099dba12f8f8dedb9be85b4471d5a5611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b9eb2ff867b5899a4f5a48e025cf5099dba12f8f8dedb9be85b4471d5a5611->enter($__internal_13b9eb2ff867b5899a4f5a48e025cf5099dba12f8f8dedb9be85b4471d5a5611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:AfficheEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13b9eb2ff867b5899a4f5a48e025cf5099dba12f8f8dedb9be85b4471d5a5611->leave($__internal_13b9eb2ff867b5899a4f5a48e025cf5099dba12f8f8dedb9be85b4471d5a5611_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_df6075b2c2e378919f89296d2fe70fe60ef11102dcdd0b0d285560c062c84ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6075b2c2e378919f89296d2fe70fe60ef11102dcdd0b0d285560c062c84ce7->enter($__internal_df6075b2c2e378919f89296d2fe70fe60ef11102dcdd0b0d285560c062c84ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_df6075b2c2e378919f89296d2fe70fe60ef11102dcdd0b0d285560c062c84ce7->leave($__internal_df6075b2c2e378919f89296d2fe70fe60ef11102dcdd0b0d285560c062c84ce7_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_628a40a94e4c19efb5b6da489b6eb40c6b08650a4c1062a897465af12ea7b15c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628a40a94e4c19efb5b6da489b6eb40c6b08650a4c1062a897465af12ea7b15c->enter($__internal_628a40a94e4c19efb5b6da489b6eb40c6b08650a4c1062a897465af12ea7b15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_628a40a94e4c19efb5b6da489b6eb40c6b08650a4c1062a897465af12ea7b15c->leave($__internal_628a40a94e4c19efb5b6da489b6eb40c6b08650a4c1062a897465af12ea7b15c_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ad4f599e66dbc341e0816aa90851a8a8e4b26c9ce166f3bae14d42a43bf6f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad4f599e66dbc341e0816aa90851a8a8e4b26c9ce166f3bae14d42a43bf6f3c->enter($__internal_5ad4f599e66dbc341e0816aa90851a8a8e4b26c9ce166f3bae14d42a43bf6f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "
        <section id=\"page-title\" style=\"background-color: #40E0D0\">

        <div class=\"container clearfix\">
            <h1>Evenements à venir </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
            echo "\">Accueil </a></li>
                <li> <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_RechercheDQL");
            echo "\">Trouver un événement</a></li>
                <li> <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AjoutEvent");
            echo "\">Ajouter un événement</a></li>


<div class=\"center-block\" align=\"center\">
        </div>
            </ol>

        </div>

    </section>
    <section id=\"content\">

        <div class=\"content-wrap\">



            <div id=\"events\" class=\"single-event header-stick footer-stick clearfix\">


                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e"))));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 37
                echo "
                <div class=\"event entry-image parallax nobottommargin\" style=\"background-image: url(";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "photo", array()), "html", null, true);
                echo "); height:600px\" data-stellar-background-ratio=\"0.3\" >
                    <div class=\"entry-overlay-meta\">


                        <h2><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DetailsEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nomEvenement", array()), "html", null, true);
                echo "</a></h2>

                        <ul class=\"iconlist\">
                            ";
                // line 45
                if (($this->getAttribute($this->getAttribute($context["event"], "idUser", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    // line 46
                    echo "
                            <a href =\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_Rating", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                    echo "\"> ";
                    echo $this->env->getExtension('blackknight467\StarRatingBundle\Extensions\StarRatingExtension')->rating($this->getAttribute($context["event"], "rating", array()));
                    echo "</a>
                            ";
                }
                // line 49
                echo "
                                <li><i class=\"icon-euro\"></i> <strong>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "type", array()), "html", null, true);
                echo "</strong></li>
                            <li><i class=\"icon-calendar3\"></i> <strong>Date:</strong>";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "m/d/Y"), "html", null, true);
                echo "</li>
                            <li><i class=\"icon-time\"></i> <strong>Timing:</strong> ";
                // line 52
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "heure", array()), "h:m"), "html", null, true);
                echo "</li>
                            <li><i class=\"icon-map-marker2\"></i> <strong>Adresse:</strong>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "adresse", array()), "html", null, true);
                echo "</li>
                            <li><i class=\"icon-euro\"></i> <strong>prix</strong>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "prix", array()), "html", null, true);
                echo "</li>
                            <li><i class=\"icon-male\"></i> <strong>nombre de place</strong>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nbPlace", array()), "html", null, true);
                echo "</li>


                        </ul>

                        <a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DetailsEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                echo "\"  class=\"btn btn-info btn-block btn-lg\">Détails</a>

";
                // line 62
                if (($this->getAttribute($this->getAttribute($context["event"], "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                    // line 63
                    echo "
                        <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_UpdateEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                    echo "\"  class=\"btn btn-warning btn-block btn-lg\">Modifier</a>

                            <a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DeleteEvent", array("id" => $this->getAttribute($context["event"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-danger btn-block btn-lg\">Delete</a>

                        ";
                }
                // line 69
                echo "
                    </div>


                    <div class=\"entry-overlay\">
                        <div id=\"event-countdown5\" class=\"countdown\"></div>
                    </div>

            </div>

        </div>
                    </div>
    </section>



    <div id=\"gotoTop\" class=\"icon-angle-up\"></div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "     ";
        } else {
            // line 89
            echo "
         <section id=\"page-title\">

             <div class=\"container clearfix\">
                 <h1>Evenements à venir </h1>
                 <ol class=\"breadcrumb\">
                     <li><a href=\"";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
            echo "\">Accueil</a></li>

                 </ol>
             </div>

         </section>

<section id=\"content\">

    <div class=\"content-wrap\">



        <div id=\"events\" class=\"single-event header-stick footer-stick clearfix\">


            ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e"))));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 112
                echo "
                <div class=\"event entry-image parallax nobottommargin\" style=\"background-image: url(";
                // line 113
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "photo", array()), "html", null, true);
                echo "); height:600px\" data-stellar-background-ratio=\"0.3\" >
                <div class=\"entry-overlay-meta\">

                    <h2><a >";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nomEvenement", array()), "html", null, true);
                echo "</a></h2>
                    <ul class=\"iconlist\">
                        ";
                // line 118
                echo $this->env->getExtension('blackknight467\StarRatingBundle\Extensions\StarRatingExtension')->rating(4);
                echo "
                        <li><i class=\"icon-euro\"></i> <strong>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "type", array()), "html", null, true);
                echo "</strong></li>
                        <li><i class=\"icon-calendar3\"></i> <strong>Date:</strong>";
                // line 120
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "dateDebut", array()), "m/d/Y"), "html", null, true);
                echo "</li>
                        <li><i class=\"icon-time\"></i> <strong>Timing:</strong>";
                // line 121
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "heure", array()), "h:m"), "html", null, true);
                echo "</li>
                        <li><i class=\"icon-map-marker2\"></i> <strong>Adresse:</strong>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "adresse", array()), "html", null, true);
                echo "</li>
                        <li><i class=\"icon-euro\"></i> <strong>prix</strong>";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "prix", array()), "html", null, true);
                echo "</li>
                        <li><i class=\"icon-male\"></i> <strong>nombre de place</strong>";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "nbPlace", array()), "html", null, true);
                echo "</li>


                    </ul>

                </div>


                <div class=\"entry-overlay\">
                    <div id=\"event-countdown5\" class=\"countdown\"></div>
                </div>
            </div>
                     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "        </div>

    </div>

</section>
    ";
        }
        // line 143
        echo "



";
        // line 148
        echo "    <div class=\"navigation text-right\">
        ";
        // line 149
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")));
        echo "
    </div>

";
        
        $__internal_5ad4f599e66dbc341e0816aa90851a8a8e4b26c9ce166f3bae14d42a43bf6f3c->leave($__internal_5ad4f599e66dbc341e0816aa90851a8a8e4b26c9ce166f3bae14d42a43bf6f3c_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_65da2b8e90bc498b1839eb99535b6e6bc37a76fea588239792d6e4c0125009ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65da2b8e90bc498b1839eb99535b6e6bc37a76fea588239792d6e4c0125009ac->enter($__internal_65da2b8e90bc498b1839eb99535b6e6bc37a76fea588239792d6e4c0125009ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "

    <!-- External JavaScripts
          ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>



";
        
        $__internal_65da2b8e90bc498b1839eb99535b6e6bc37a76fea588239792d6e4c0125009ac->leave($__internal_65da2b8e90bc498b1839eb99535b6e6bc37a76fea588239792d6e4c0125009ac_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Evenement:AfficheEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 164,  353 => 160,  349 => 159,  343 => 155,  337 => 154,  326 => 149,  323 => 148,  317 => 143,  309 => 137,  290 => 124,  286 => 123,  282 => 122,  278 => 121,  274 => 120,  270 => 119,  266 => 118,  261 => 116,  254 => 113,  251 => 112,  247 => 111,  228 => 95,  220 => 89,  217 => 88,  193 => 69,  187 => 66,  182 => 64,  179 => 63,  177 => 62,  172 => 60,  164 => 55,  160 => 54,  156 => 53,  152 => 52,  148 => 51,  144 => 50,  141 => 49,  134 => 47,  131 => 46,  129 => 45,  121 => 42,  113 => 38,  110 => 37,  106 => 36,  84 => 17,  80 => 16,  76 => 15,  68 => 9,  65 => 8,  59 => 7,  48 => 4,  37 => 3,  11 => 1,);
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

{% block head %}{% endblock %}
{% block stylesheets %}{% endblock %}


{% block body %}
    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}

        <section id=\"page-title\" style=\"background-color: #40E0D0\">

        <div class=\"container clearfix\">
            <h1>Evenements à venir </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('fos_visitor_home') }}\">Accueil </a></li>
                <li> <a href=\"{{ path('_RechercheDQL') }}\">Trouver un événement</a></li>
                <li> <a href=\"{{ path('_AjoutEvent') }}\">Ajouter un événement</a></li>


<div class=\"center-block\" align=\"center\">
        </div>
            </ol>

        </div>

    </section>
    <section id=\"content\">

        <div class=\"content-wrap\">



            <div id=\"events\" class=\"single-event header-stick footer-stick clearfix\">


                {% for event in e | sort   %}

                <div class=\"event entry-image parallax nobottommargin\" style=\"background-image: url({{ asset('uploads/images/') }}{{ event.photo }}); height:600px\" data-stellar-background-ratio=\"0.3\" >
                    <div class=\"entry-overlay-meta\">


                        <h2><a href=\"{{ path('_DetailsEvent',{'id':event.id}) }}\" >{{ event.nomEvenement }}</a></h2>

                        <ul class=\"iconlist\">
                            {% if event.idUser.id != app.user.id %}

                            <a href =\"{{  path ('_Rating', {'id':event.id}) }}\"> {{ event.rating|rating }}</a>
                            {% endif %}

                                <li><i class=\"icon-euro\"></i> <strong>{{ event.type }}</strong></li>
                            <li><i class=\"icon-calendar3\"></i> <strong>Date:</strong>{{ event.dateDebut | date(\"m/d/Y\") }}</li>
                            <li><i class=\"icon-time\"></i> <strong>Timing:</strong> {{ event.heure| date(\"h:m\") }}</li>
                            <li><i class=\"icon-map-marker2\"></i> <strong>Adresse:</strong>{{ event.adresse }}</li>
                            <li><i class=\"icon-euro\"></i> <strong>prix</strong>{{ event.prix }}</li>
                            <li><i class=\"icon-male\"></i> <strong>nombre de place</strong>{{ event.nbPlace }}</li>


                        </ul>

                        <a href=\"{{ path('_DetailsEvent',{'id':event.id}) }}\"  class=\"btn btn-info btn-block btn-lg\">Détails</a>

{% if event.idUser.id == app.user.id %}

                        <a href=\"{{ path('_UpdateEvent',{'id':event.id }) }}\"  class=\"btn btn-warning btn-block btn-lg\">Modifier</a>

                            <a href=\"{{ path('_DeleteEvent',{'id':event.id}) }}\" class=\"btn btn-danger btn-block btn-lg\">Delete</a>

                        {% endif %}

                    </div>


                    <div class=\"entry-overlay\">
                        <div id=\"event-countdown5\" class=\"countdown\"></div>
                    </div>

            </div>

        </div>
                    </div>
    </section>



    <div id=\"gotoTop\" class=\"icon-angle-up\"></div>

                {% endfor %}
     {% else %}

         <section id=\"page-title\">

             <div class=\"container clearfix\">
                 <h1>Evenements à venir </h1>
                 <ol class=\"breadcrumb\">
                     <li><a href=\"{{ path('fos_visitor_home') }}\">Accueil</a></li>

                 </ol>
             </div>

         </section>

<section id=\"content\">

    <div class=\"content-wrap\">



        <div id=\"events\" class=\"single-event header-stick footer-stick clearfix\">


            {% for event in e | sort  %}

                <div class=\"event entry-image parallax nobottommargin\" style=\"background-image: url({{ asset('uploads/images/') }}{{ event.photo }}); height:600px\" data-stellar-background-ratio=\"0.3\" >
                <div class=\"entry-overlay-meta\">

                    <h2><a >{{ event.nomEvenement }}</a></h2>
                    <ul class=\"iconlist\">
                        {{ 4|rating }}
                        <li><i class=\"icon-euro\"></i> <strong>{{ event.type }}</strong></li>
                        <li><i class=\"icon-calendar3\"></i> <strong>Date:</strong>{{ event.dateDebut | date(\"m/d/Y\") }}</li>
                        <li><i class=\"icon-time\"></i> <strong>Timing:</strong>{{ event.heure| date(\"h:m\") }}</li>
                        <li><i class=\"icon-map-marker2\"></i> <strong>Adresse:</strong>{{ event.adresse }}</li>
                        <li><i class=\"icon-euro\"></i> <strong>prix</strong>{{ event.prix }}</li>
                        <li><i class=\"icon-male\"></i> <strong>nombre de place</strong>{{ event.nbPlace }}</li>


                    </ul>

                </div>


                <div class=\"entry-overlay\">
                    <div id=\"event-countdown5\" class=\"countdown\"></div>
                </div>
            </div>
                     {% endfor %}
        </div>

    </div>

</section>
    {% endif %}




{# display navigation #}
    <div class=\"navigation text-right\">
        {{ knp_pagination_render(e) }}
    </div>

{% endblock %}

{% block javascripts %}


    <!-- External JavaScripts
          ============================================= -->
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/plugins.js') }}\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/functions.js') }}\"></script>



{% endblock %}




", "EvenementBundle:Evenement:AfficheEvent.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/EvenementBundle/Resources/views/Evenement/AfficheEvent.html.twig");
    }
}
