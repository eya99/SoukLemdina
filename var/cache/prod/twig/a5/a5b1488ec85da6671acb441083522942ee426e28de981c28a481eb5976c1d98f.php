<?php

/* WorkshopBundle:Workshop:AfficheVisitWorkshop.html.twig */
class __TwigTemplate_c15d27e74e76550cf3ba4a0c0ea82aa1a1edae334094a96aa45eceb84cfd7f55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "WorkshopBundle:Workshop:AfficheVisitWorkshop.html.twig", 1);
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
        $__internal_d555922fe475a6b73c5b2f062618dfbf724da061626631de46386409b2c570b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d555922fe475a6b73c5b2f062618dfbf724da061626631de46386409b2c570b3->enter($__internal_d555922fe475a6b73c5b2f062618dfbf724da061626631de46386409b2c570b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AfficheVisitWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d555922fe475a6b73c5b2f062618dfbf724da061626631de46386409b2c570b3->leave($__internal_d555922fe475a6b73c5b2f062618dfbf724da061626631de46386409b2c570b3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8fda26dea4b99eddec5d74b05a6cb86fbc0bab4c999c4b4a917774ddbb0899c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fda26dea4b99eddec5d74b05a6cb86fbc0bab4c999c4b4a917774ddbb0899c->enter($__internal_b8fda26dea4b99eddec5d74b05a6cb86fbc0bab4c999c4b4a917774ddbb0899c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b8fda26dea4b99eddec5d74b05a6cb86fbc0bab4c999c4b4a917774ddbb0899c->leave($__internal_b8fda26dea4b99eddec5d74b05a6cb86fbc0bab4c999c4b4a917774ddbb0899c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_986be41614b8897c019da4b526d0652e18f8ac927e2e1dc276baed04507c1d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_986be41614b8897c019da4b526d0652e18f8ac927e2e1dc276baed04507c1d6a->enter($__internal_986be41614b8897c019da4b526d0652e18f8ac927e2e1dc276baed04507c1d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_986be41614b8897c019da4b526d0652e18f8ac927e2e1dc276baed04507c1d6a->leave($__internal_986be41614b8897c019da4b526d0652e18f8ac927e2e1dc276baed04507c1d6a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_71bd745dd720caab7fa2663bf800a9a0fdb1d5d48ea2646c9dc704b6390b4a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71bd745dd720caab7fa2663bf800a9a0fdb1d5d48ea2646c9dc704b6390b4a76->enter($__internal_71bd745dd720caab7fa2663bf800a9a0fdb1d5d48ea2646c9dc704b6390b4a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
    <section id=\"page-title\" style=\"background-color:#ffc537\">


        <div class=\"container clearfix\" >
                <h1 align=\"center\" style=\"color: #6016ff\">Bienvenu(e) à la liste des Workshops </h1>
            <span style=\"color: #3e14ff\"> hey! Vous pouvez <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
        echo "\" data-textAlign=\"center\">ajouter votre workshop</a></span>

        </div>


    </section>






        <div >
        <div class=\"sidebar-widgets-wrap\">

            <div class=\"widget clearfix\">

                <h2 align=\"center\" style=\"color: #110aff\">Les 3 plus proches Workshops  </h2>
                <div id=\"post-list-header\"  style=\"margin-left:237px\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 35
            echo "
                    <div class=\"spost clearfix\">
                        <div class=\"entry-image\">
                            <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("FiltreDQL");
            echo "\" ><img
                                        src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["work"], "image", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
                        </div>
                        <div class=\"entry-c\">
                            <div>
                                <ul class=\"entry-meta\">
                                    <li>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "nomWorkshop", array()), "html", null, true);
            echo "</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
                    <h2 align=\"center\" style=\"color: #110aff\">Les 3 Moins Chers Workshop  </h2>
                    <div id=\"post-list-header\"  style=\"margin-left:285px\">
                        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")), 0, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 56
            echo "
                            <div class=\"spost clearfix\">
                                <div class=\"entry-image\">
                                    <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("FiltrePrix");
            echo "\" ><img
                                                src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["work"], "image", array()))), "html", null, true);
            echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"entry-c\">
                                    <div>
                                        <ul class=\"entry-meta\">
                                            <li>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "nomWorkshop", array()), "html", null, true);
            echo "</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                </div>





                <section id=\"content\">

        <div class=\"content-wrap\">

            <h3 style=\"color: #110aff\" align=\"center\"> Workshops à venir</h3>

            <div class=\"container clearfix\" >



                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w"))));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 90
            echo "

                <div class=\"postcontent nobottommargin col_last\" style=\"background-color:#fff2f9\">

                    <div id=\"posts\" class=\"events small-thumbs\" style=\"background-color:#ffe2d6\">

                        <div class=\"entry clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\">
                                    <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["work"], "image", array()))), "html", null, true);
            echo "\">
                                </a>
                            </div>
                            <div class=\"entry-c\">
                                <div class=\"entry-title\">
                                    <h2><a href=\"#\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "nomWorkshop", array()), "html", null, true);
            echo "</a></h2>
                                </div>
                                <ul class=\"entry-meta clearfix\">
                                    <li><i class=\"icon-euro\"></i> <strong>";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "type", array()), "html", null, true);
            echo "</strong></li>
                                    <li><i class=\"icon-calendar3\"></i>
                                        <strong>Date: </strong>";
            // line 109
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["work"], "dateDebut", array()), "m/d/Y"), "html", null, true);
            echo "</li>
                                    <li><i class=\"icon-map-marker2\"></i> <strong>Adresse: </strong>";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "adresse", array()), "html", null, true);
            echo "
                                    </li>
                                    <li><i class=\"icon-euro\"></i> <strong>prix: </strong>";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "prix", array()), "html", null, true);
            echo "</li>
                                    <li><i class=\"icon-male\"></i> <strong>nombre de place: </strong>";
            // line 113
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "nbPlace", array()), "html", null, true);
            echo "
                                    </li>

                                </ul>

                                <div class=\"entry-content\">
                                    <p>";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "description", array()), "html", null, true);
            echo "</p>

                                </div>
                                <div class=\"entry-content\">
                                    <li><a href=\"";
            // line 123
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"
                                           class=\"btn btn-default\">Participer</a></li>
                                </div>
                                <div class=\"entry-title\"><li><a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DetailsWorkshop", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
            echo "\"
                                                                class=\"btn btn-default\">Plus de Détails</a></li>
                                </div>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "


                    </div>

                            </div>


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
        
        $__internal_71bd745dd720caab7fa2663bf800a9a0fdb1d5d48ea2646c9dc704b6390b4a76->leave($__internal_71bd745dd720caab7fa2663bf800a9a0fdb1d5d48ea2646c9dc704b6390b4a76_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Workshop:AfficheVisitWorkshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 132,  256 => 126,  250 => 123,  243 => 119,  234 => 113,  230 => 112,  225 => 110,  221 => 109,  216 => 107,  210 => 104,  202 => 99,  191 => 90,  187 => 89,  169 => 73,  155 => 65,  147 => 60,  143 => 59,  138 => 56,  134 => 55,  129 => 52,  115 => 44,  107 => 39,  103 => 38,  98 => 35,  94 => 34,  72 => 15,  64 => 9,  58 => 8,  47 => 5,  36 => 4,  11 => 1,);
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

    <section id=\"page-title\" style=\"background-color:#ffc537\">


        <div class=\"container clearfix\" >
                <h1 align=\"center\" style=\"color: #6016ff\">Bienvenu(e) à la liste des Workshops </h1>
            <span style=\"color: #3e14ff\"> hey! Vous pouvez <a href=\"{{ path('fos_user_security_login') }}\" data-textAlign=\"center\">ajouter votre workshop</a></span>

        </div>


    </section>






        <div >
        <div class=\"sidebar-widgets-wrap\">

            <div class=\"widget clearfix\">

                <h2 align=\"center\" style=\"color: #110aff\">Les 3 plus proches Workshops  </h2>
                <div id=\"post-list-header\"  style=\"margin-left:237px\">
                    {% for work in w| slice(0, 3) %}

                    <div class=\"spost clearfix\">
                        <div class=\"entry-image\">
                            <a href=\"{{ path('FiltreDQL') }}\" ><img
                                        src=\"{{  asset('uploads/images/' ~ work.image) }}\" alt=\"\"></a>
                        </div>
                        <div class=\"entry-c\">
                            <div>
                                <ul class=\"entry-meta\">
                                    <li>{{ work.nomWorkshop }}</li>
                                </ul>
                            </div>

                        </div>
                    </div>

                {% endfor %}

                    <h2 align=\"center\" style=\"color: #110aff\">Les 3 Moins Chers Workshop  </h2>
                    <div id=\"post-list-header\"  style=\"margin-left:285px\">
                        {% for work in w| slice(0, 3) %}

                            <div class=\"spost clearfix\">
                                <div class=\"entry-image\">
                                    <a href=\"{{ path('FiltrePrix') }}\" ><img
                                                src=\"{{  asset('uploads/images/' ~ work.image) }}\" alt=\"\"></a>
                                </div>
                                <div class=\"entry-c\">
                                    <div>
                                        <ul class=\"entry-meta\">
                                            <li>{{ work.nomWorkshop }}</li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        {% endfor %}
                </div>





                <section id=\"content\">

        <div class=\"content-wrap\">

            <h3 style=\"color: #110aff\" align=\"center\"> Workshops à venir</h3>

            <div class=\"container clearfix\" >



                {% for work in w | sort %}


                <div class=\"postcontent nobottommargin col_last\" style=\"background-color:#fff2f9\">

                    <div id=\"posts\" class=\"events small-thumbs\" style=\"background-color:#ffe2d6\">

                        <div class=\"entry clearfix\">
                            <div class=\"entry-image\">
                                <a href=\"#\">
                                    <img src=\"{{ asset('uploads/images/' ~ work.image) }}\">
                                </a>
                            </div>
                            <div class=\"entry-c\">
                                <div class=\"entry-title\">
                                    <h2><a href=\"#\">{{ work.nomWorkshop }}</a></h2>
                                </div>
                                <ul class=\"entry-meta clearfix\">
                                    <li><i class=\"icon-euro\"></i> <strong>{{ work.type }}</strong></li>
                                    <li><i class=\"icon-calendar3\"></i>
                                        <strong>Date: </strong>{{ work.dateDebut | date(\"m/d/Y\") }}</li>
                                    <li><i class=\"icon-map-marker2\"></i> <strong>Adresse: </strong>{{ work.adresse }}
                                    </li>
                                    <li><i class=\"icon-euro\"></i> <strong>prix: </strong>{{ work.prix }}</li>
                                    <li><i class=\"icon-male\"></i> <strong>nombre de place: </strong>{{ work.nbPlace }}
                                    </li>

                                </ul>

                                <div class=\"entry-content\">
                                    <p>{{ work.description }}</p>

                                </div>
                                <div class=\"entry-content\">
                                    <li><a href=\"{{ path('fos_user_security_login') }}\"
                                           class=\"btn btn-default\">Participer</a></li>
                                </div>
                                <div class=\"entry-title\"><li><a href=\"{{ path('_DetailsWorkshop', {'id':work.id}) }}\"
                                                                class=\"btn btn-default\">Plus de Détails</a></li>
                                </div>
                            </div>
                        </div>
                        {% endfor %}



                    </div>

                            </div>


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

{% endblock %}", "WorkshopBundle:Workshop:AfficheVisitWorkshop.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Workshop/AfficheVisitWorkshop.html.twig");
    }
}
