<?php

/* EvenementBundle:Evenement:AfficheEvent.html.twig */
class __TwigTemplate_855b6575e485a8b9d279c7d4a61122660dc891e0ab921bb3505a768fffe9095f extends Twig_Template
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
        $__internal_8d576c7559ac9f371900686538c0aed35283e249ef9766b64318cacd183a708d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d576c7559ac9f371900686538c0aed35283e249ef9766b64318cacd183a708d->enter($__internal_8d576c7559ac9f371900686538c0aed35283e249ef9766b64318cacd183a708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:AfficheEvent.html.twig"));

        $__internal_c78684323d9f1a77b682aa777494cfe08ed5f287d97110964d284f85b0e76e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78684323d9f1a77b682aa777494cfe08ed5f287d97110964d284f85b0e76e0b->enter($__internal_c78684323d9f1a77b682aa777494cfe08ed5f287d97110964d284f85b0e76e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:AfficheEvent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d576c7559ac9f371900686538c0aed35283e249ef9766b64318cacd183a708d->leave($__internal_8d576c7559ac9f371900686538c0aed35283e249ef9766b64318cacd183a708d_prof);

        
        $__internal_c78684323d9f1a77b682aa777494cfe08ed5f287d97110964d284f85b0e76e0b->leave($__internal_c78684323d9f1a77b682aa777494cfe08ed5f287d97110964d284f85b0e76e0b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_540026ef5b0db01694be0a24a16850c88497eb5228ec710de4cc4a001bf711ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540026ef5b0db01694be0a24a16850c88497eb5228ec710de4cc4a001bf711ac->enter($__internal_540026ef5b0db01694be0a24a16850c88497eb5228ec710de4cc4a001bf711ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9d7405f1ea6a1b32ada00034f00d3d43e1b1753340bfbe835399174e11ca63ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7405f1ea6a1b32ada00034f00d3d43e1b1753340bfbe835399174e11ca63ae->enter($__internal_9d7405f1ea6a1b32ada00034f00d3d43e1b1753340bfbe835399174e11ca63ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9d7405f1ea6a1b32ada00034f00d3d43e1b1753340bfbe835399174e11ca63ae->leave($__internal_9d7405f1ea6a1b32ada00034f00d3d43e1b1753340bfbe835399174e11ca63ae_prof);

        
        $__internal_540026ef5b0db01694be0a24a16850c88497eb5228ec710de4cc4a001bf711ac->leave($__internal_540026ef5b0db01694be0a24a16850c88497eb5228ec710de4cc4a001bf711ac_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f58f2cab03ba6a22f7d2d3edad5303b2fd449833a008b9c41f21ada0a12b92aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f58f2cab03ba6a22f7d2d3edad5303b2fd449833a008b9c41f21ada0a12b92aa->enter($__internal_f58f2cab03ba6a22f7d2d3edad5303b2fd449833a008b9c41f21ada0a12b92aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_036437a8383b98db2d68fe9299719512a1585b07912edea24f2c87d232ae7e47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_036437a8383b98db2d68fe9299719512a1585b07912edea24f2c87d232ae7e47->enter($__internal_036437a8383b98db2d68fe9299719512a1585b07912edea24f2c87d232ae7e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_036437a8383b98db2d68fe9299719512a1585b07912edea24f2c87d232ae7e47->leave($__internal_036437a8383b98db2d68fe9299719512a1585b07912edea24f2c87d232ae7e47_prof);

        
        $__internal_f58f2cab03ba6a22f7d2d3edad5303b2fd449833a008b9c41f21ada0a12b92aa->leave($__internal_f58f2cab03ba6a22f7d2d3edad5303b2fd449833a008b9c41f21ada0a12b92aa_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6bc279d4071498843a4c457ea26321c03989146e407c78de9230c529e877da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bc279d4071498843a4c457ea26321c03989146e407c78de9230c529e877da8->enter($__internal_c6bc279d4071498843a4c457ea26321c03989146e407c78de9230c529e877da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcbf7504e3c11647fb6a0b1b9a1b9365030f42ac7af2afc383ba912fb2ec672d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbf7504e3c11647fb6a0b1b9a1b9365030f42ac7af2afc383ba912fb2ec672d->enter($__internal_fcbf7504e3c11647fb6a0b1b9a1b9365030f42ac7af2afc383ba912fb2ec672d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fcbf7504e3c11647fb6a0b1b9a1b9365030f42ac7af2afc383ba912fb2ec672d->leave($__internal_fcbf7504e3c11647fb6a0b1b9a1b9365030f42ac7af2afc383ba912fb2ec672d_prof);

        
        $__internal_c6bc279d4071498843a4c457ea26321c03989146e407c78de9230c529e877da8->leave($__internal_c6bc279d4071498843a4c457ea26321c03989146e407c78de9230c529e877da8_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3d45beb3dc47a6eb31aed3fff35aa91c6ff0c3d847ad534795469f9b347592da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d45beb3dc47a6eb31aed3fff35aa91c6ff0c3d847ad534795469f9b347592da->enter($__internal_3d45beb3dc47a6eb31aed3fff35aa91c6ff0c3d847ad534795469f9b347592da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_1a3d673a6bf3545b1eff974cc5e6a583e66f58bdedf83b6fa26e1c0e63bca124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3d673a6bf3545b1eff974cc5e6a583e66f58bdedf83b6fa26e1c0e63bca124->enter($__internal_1a3d673a6bf3545b1eff974cc5e6a583e66f58bdedf83b6fa26e1c0e63bca124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1a3d673a6bf3545b1eff974cc5e6a583e66f58bdedf83b6fa26e1c0e63bca124->leave($__internal_1a3d673a6bf3545b1eff974cc5e6a583e66f58bdedf83b6fa26e1c0e63bca124_prof);

        
        $__internal_3d45beb3dc47a6eb31aed3fff35aa91c6ff0c3d847ad534795469f9b347592da->leave($__internal_3d45beb3dc47a6eb31aed3fff35aa91c6ff0c3d847ad534795469f9b347592da_prof);

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
        return array (  387 => 164,  380 => 160,  376 => 159,  370 => 155,  361 => 154,  347 => 149,  344 => 148,  338 => 143,  330 => 137,  311 => 124,  307 => 123,  303 => 122,  299 => 121,  295 => 120,  291 => 119,  287 => 118,  282 => 116,  275 => 113,  272 => 112,  268 => 111,  249 => 95,  241 => 89,  238 => 88,  214 => 69,  208 => 66,  203 => 64,  200 => 63,  198 => 62,  193 => 60,  185 => 55,  181 => 54,  177 => 53,  173 => 52,  169 => 51,  165 => 50,  162 => 49,  155 => 47,  152 => 46,  150 => 45,  142 => 42,  134 => 38,  131 => 37,  127 => 36,  105 => 17,  101 => 16,  97 => 15,  89 => 9,  86 => 8,  77 => 7,  60 => 4,  43 => 3,  11 => 1,);
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
