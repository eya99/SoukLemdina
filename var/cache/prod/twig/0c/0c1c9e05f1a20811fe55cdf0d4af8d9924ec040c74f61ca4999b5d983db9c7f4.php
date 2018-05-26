<?php

/* EvenementBundle:Evenement:RechercheDQL.html.twig */
class __TwigTemplate_7c07c21cc0a6d7be1c9b32a5cfec786f0a5dc9c29e01607bb903e4723a714806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "EvenementBundle:Evenement:RechercheDQL.html.twig", 1);
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
        $__internal_75e47c9a53be17f9ea03b507ae7161e52fc36971ce52da155c126ec3e01d0713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e47c9a53be17f9ea03b507ae7161e52fc36971ce52da155c126ec3e01d0713->enter($__internal_75e47c9a53be17f9ea03b507ae7161e52fc36971ce52da155c126ec3e01d0713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EvenementBundle:Evenement:RechercheDQL.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75e47c9a53be17f9ea03b507ae7161e52fc36971ce52da155c126ec3e01d0713->leave($__internal_75e47c9a53be17f9ea03b507ae7161e52fc36971ce52da155c126ec3e01d0713_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_4313a969b019b157273b599019bd8fe68e417931c8ab2ba0790489ccb1b027d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4313a969b019b157273b599019bd8fe68e417931c8ab2ba0790489ccb1b027d2->enter($__internal_4313a969b019b157273b599019bd8fe68e417931c8ab2ba0790489ccb1b027d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4313a969b019b157273b599019bd8fe68e417931c8ab2ba0790489ccb1b027d2->leave($__internal_4313a969b019b157273b599019bd8fe68e417931c8ab2ba0790489ccb1b027d2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9071ba82d8d4d836c836d01aaae888af07a409245bb97d910de59de672d296bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9071ba82d8d4d836c836d01aaae888af07a409245bb97d910de59de672d296bc->enter($__internal_9071ba82d8d4d836c836d01aaae888af07a409245bb97d910de59de672d296bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9071ba82d8d4d836c836d01aaae888af07a409245bb97d910de59de672d296bc->leave($__internal_9071ba82d8d4d836c836d01aaae888af07a409245bb97d910de59de672d296bc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8ebffefe5a696ee2cc16ec1e9826c5d8f823b7b4730bf51a152660dc439d4561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebffefe5a696ee2cc16ec1e9826c5d8f823b7b4730bf51a152660dc439d4561->enter($__internal_8ebffefe5a696ee2cc16ec1e9826c5d8f823b7b4730bf51a152660dc439d4561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <section id=\"page-title\" style=\"background-color: papayawhip\">

        <div class=\"container clearfix\">
            <h1 style=\"color:#ff4b05\">Tapez un événement</h1>

            <ol class=\"breadcrumb\">
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_visitor_home");
        echo "\">Accueil</a></li>
                <li> <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AjoutEvent");
        echo "\">Ajouter un événement</a></li>

            </ol>
            <form id=\"widget-subscribe-form\"  method=\"post\" class=\"nobottommargin row clearfix\"  href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_RechercheDQL");
        echo "\">
                <div class=\"col-md-9\">
                    <input type=\"text\" id=\"xyz\" name=\"motcle\" class=\"sm-form-control required email\" placeholder=\"Rechercher un événement\">
                </div>
                <!--    <div class=\"col-md-2\">
                       <a class=\"button button-xlarge button-border button-amber\" type=\"submit\" name=\"submit\" value=\"rechercher\"><i class=\"icon-ok\"></i> </a>
                   </div>!-->
            </form>
        </div>

    </section>

    <section id=\"content\">

        <div class=\"content-wrap\">



            <div id=\"ev\" class=\"fgh\">



                </div>
        </div>
    </section>

    ";
        // line 45
        echo "    <div class=\"navigation text-right\">
        ";
        // line 46
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")));
        echo "
    </div>

";
        
        $__internal_8ebffefe5a696ee2cc16ec1e9826c5d8f823b7b4730bf51a152660dc439d4561->leave($__internal_8ebffefe5a696ee2cc16ec1e9826c5d8f823b7b4730bf51a152660dc439d4561_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4807477cdd5281ee2e4d86fb4c93d305aa28d25805e13700d7e8550d0134ed6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4807477cdd5281ee2e4d86fb4c93d305aa28d25805e13700d7e8550d0134ed6a->enter($__internal_4807477cdd5281ee2e4d86fb4c93d305aa28d25805e13700d7e8550d0134ed6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "

    <!-- External JavaScripts
          ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script  src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/recherche.js"), "html", null, true);
        echo "\"></script>
    <script  src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>

    <script>
        jQuery(document).ready(function (\$) {

            var eventStartDate1 = new Date(2016, 6, 15);
            \$('#event-countdown1').countdown({until: eventStartDate1});

            var eventStartDate2 = new Date(2015, 12, 23);
            \$('#event-countdown2').countdown({until: eventStartDate2});

            var eventStartDate3 = new Date(2016, 1, 31);
            \$('#event-countdown3').countdown({until: eventStartDate3});

            var eventStartDate4 = new Date(2015, 7, 24);
            \$('#event-countdown4').countdown({until: eventStartDate4});

            var eventStartDate5 = new Date(2017, 1, 5);
            \$('#event-countdown5').countdown({until: eventStartDate5});

        });

    </script>
";
        
        $__internal_4807477cdd5281ee2e4d86fb4c93d305aa28d25805e13700d7e8550d0134ed6a->leave($__internal_4807477cdd5281ee2e4d86fb4c93d305aa28d25805e13700d7e8550d0134ed6a_prof);

    }

    public function getTemplateName()
    {
        return "EvenementBundle:Evenement:RechercheDQL.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  151 => 59,  147 => 58,  143 => 57,  139 => 56,  133 => 52,  127 => 51,  116 => 46,  113 => 45,  84 => 18,  78 => 15,  74 => 14,  65 => 7,  59 => 6,  48 => 3,  37 => 2,  11 => 1,);
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

    <section id=\"page-title\" style=\"background-color: papayawhip\">

        <div class=\"container clearfix\">
            <h1 style=\"color:#ff4b05\">Tapez un événement</h1>

            <ol class=\"breadcrumb\">
                <li><a href=\"{{ path('fos_visitor_home') }}\">Accueil</a></li>
                <li> <a href=\"{{ path('_AjoutEvent') }}\">Ajouter un événement</a></li>

            </ol>
            <form id=\"widget-subscribe-form\"  method=\"post\" class=\"nobottommargin row clearfix\"  href=\"{{ path('_RechercheDQL') }}\">
                <div class=\"col-md-9\">
                    <input type=\"text\" id=\"xyz\" name=\"motcle\" class=\"sm-form-control required email\" placeholder=\"Rechercher un événement\">
                </div>
                <!--    <div class=\"col-md-2\">
                       <a class=\"button button-xlarge button-border button-amber\" type=\"submit\" name=\"submit\" value=\"rechercher\"><i class=\"icon-ok\"></i> </a>
                   </div>!-->
            </form>
        </div>

    </section>

    <section id=\"content\">

        <div class=\"content-wrap\">



            <div id=\"ev\" class=\"fgh\">



                </div>
        </div>
    </section>

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
    <script  src=\"{{ asset('Template/js/recherche.js') }}\"></script>
    <script  src=\"{{ asset('jquery-3.2.1.min.js') }}\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/functions.js') }}\"></script>

    <script>
        jQuery(document).ready(function (\$) {

            var eventStartDate1 = new Date(2016, 6, 15);
            \$('#event-countdown1').countdown({until: eventStartDate1});

            var eventStartDate2 = new Date(2015, 12, 23);
            \$('#event-countdown2').countdown({until: eventStartDate2});

            var eventStartDate3 = new Date(2016, 1, 31);
            \$('#event-countdown3').countdown({until: eventStartDate3});

            var eventStartDate4 = new Date(2015, 7, 24);
            \$('#event-countdown4').countdown({until: eventStartDate4});

            var eventStartDate5 = new Date(2017, 1, 5);
            \$('#event-countdown5').countdown({until: eventStartDate5});

        });

    </script>
{% endblock %}




", "EvenementBundle:Evenement:RechercheDQL.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/EvenementBundle/Resources/views/Evenement/RechercheDQL.html.twig");
    }
}
