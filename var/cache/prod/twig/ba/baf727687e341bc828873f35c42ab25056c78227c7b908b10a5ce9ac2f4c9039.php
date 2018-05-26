<?php

/* WorkshopBundle:Workshop:AfficheWorkshop.html.twig */
class __TwigTemplate_6bed0da5f7d0a0ba51c7340ce09219fcb34107d1575d42d82b8e3ef41d64e73f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "WorkshopBundle:Workshop:AfficheWorkshop.html.twig", 1);
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
        $__internal_b82f841e72f86d7193e203a82f408c877586569162b84ce6df10d488cb31f658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b82f841e72f86d7193e203a82f408c877586569162b84ce6df10d488cb31f658->enter($__internal_b82f841e72f86d7193e203a82f408c877586569162b84ce6df10d488cb31f658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Workshop:AfficheWorkshop.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82f841e72f86d7193e203a82f408c877586569162b84ce6df10d488cb31f658->leave($__internal_b82f841e72f86d7193e203a82f408c877586569162b84ce6df10d488cb31f658_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7ace7a0d85f3f826de91e23266375e65548b1b867d95b8853a790458d2ced67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ace7a0d85f3f826de91e23266375e65548b1b867d95b8853a790458d2ced67->enter($__internal_e7ace7a0d85f3f826de91e23266375e65548b1b867d95b8853a790458d2ced67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_e7ace7a0d85f3f826de91e23266375e65548b1b867d95b8853a790458d2ced67->leave($__internal_e7ace7a0d85f3f826de91e23266375e65548b1b867d95b8853a790458d2ced67_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc5534abe6649507b1ab2e78344f5ebabc3479380fc8fc4cc75ebdd68232a2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc5534abe6649507b1ab2e78344f5ebabc3479380fc8fc4cc75ebdd68232a2d5->enter($__internal_bc5534abe6649507b1ab2e78344f5ebabc3479380fc8fc4cc75ebdd68232a2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bc5534abe6649507b1ab2e78344f5ebabc3479380fc8fc4cc75ebdd68232a2d5->leave($__internal_bc5534abe6649507b1ab2e78344f5ebabc3479380fc8fc4cc75ebdd68232a2d5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f216fe8dc68d0afdbdebbb31a7bf14346f7b6b845e9161b452a2e638bdc05bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f216fe8dc68d0afdbdebbb31a7bf14346f7b6b845e9161b452a2e638bdc05bb->enter($__internal_0f216fe8dc68d0afdbdebbb31a7bf14346f7b6b845e9161b452a2e638bdc05bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

    <section id=\"content\">
        <form method=\"POST\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_RechercheWorkshop");
        echo "\"> Trouver un workshop
            <input type=\"text\" name=\"valeur\" id=\"zz\">
            <input type=\"submit\" name=\"submit\" value=\"recherche\">
        </form>

        <div class=\"content-wrap\" >

            <div class=\"parallax header-stick bottommargin-lg dark\"
                 style=\"padding: 60px 0; background-image: url('";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/images/parallax/calendar.jpg"), "html", null, true);
        echo "'); height: auto;\"
                 data-stellar-background-ratio=\"0.5\">

                <div class=\"container clearfix\">

                    <div class=\"events-calendar\">
                        <div class=\"events-calendar-header clearfix\">
                            <h2>Liste des Workshops </h2>
                            <div class=\"entry-content\">
                                <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_AjoutWorkshop");
        echo "\" class=\"btn btn-default\">Ajouter Votre
                                    workshop</a>
                            </div>
                            <h3 class=\"calendar-month-year\">
                                <span id=\"calendar-month\" class=\"calendar-month\"></span>
                                <span id=\"calendar-year\" class=\"calendar-year\"></span>
                                <nav>
                                    <span id=\"calendar-prev\" class=\"calendar-prev\">

                                    <span id=\"calendar-next\" class=\"calendar-next\">

                                    <span id=\"calendar-current\" class=\"calendar-current\" title=\"Got to current date\"></span>
                                </nav>
                            </h3>
                        </div>
                        <div id=\"calendar\" class=\"fc-calendar-container\"></div>
                    </div>


                </div>

            </div>


            <div class=\"divider divider-center\"><i class=\"icon-circle-blank\"></i></div>

            <h3>Ateliers à venir</h3>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["w"]) ? $context["w"] : $this->getContext($context, "w")));
        foreach ($context['_seq'] as $context["_key"] => $context["work"]) {
            // line 57
            echo "
                <div id=\"posts\" class=\"events small-thumbs\" >

                    <div class=\"entry clearfix\" style=\"background-color: #eac36e\">


                        <div class=\"entry-image\" >
                            <a href=\"#\">
                                <img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["work"], "image", array()))), "html", null, true);
            echo "\">
                            </a>
                        </div>

                        <div class=\"entry-c\" >
                            <div class=\"entry-title\">

                                <h2><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_Redirect", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "nomWorkshop", array()), "html", null, true);
            echo "</a></h2>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><span class=\"label label-warning\">";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["work"], "dateDebut", array()), "m/d/Y"), "html", null, true);
            echo "</span></li>
                                <li><a href=\"#\"><i class=\"icon-time\"></i>";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["work"], "dateFin", array()), "m/d/Y"), "html", null, true);
            echo "  </a></li>
                                <li><a href=\"#\"><i class=\"icon-map-marker2\"></i> ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "adresse", array()), "html", null, true);
            echo "</a></li>
                            </ul>

                            <div class=\"entry-content\">
                                <p>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["work"], "description", array()), "html", null, true);
            echo "</p>
                                ";
            // line 82
            if (($this->getAttribute($this->getAttribute($context["work"], "idUser", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 83
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_DeleteWorkshop", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">Supprimer
                                    Workshop</a>
                            </div>
                            <div class=\"entry-content\">
                                <a href=\"";
                // line 87
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_UpdateWorkshop", array("id" => $this->getAttribute($context["work"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">Modifier
                                    Workshop</a>
                                ";
            }
            // line 90
            echo "

                            </div>


                        </div>

                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['work'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
    </section><!-- #content end -->


";
        
        $__internal_0f216fe8dc68d0afdbdebbb31a7bf14346f7b6b845e9161b452a2e638bdc05bb->leave($__internal_0f216fe8dc68d0afdbdebbb31a7bf14346f7b6b845e9161b452a2e638bdc05bb_prof);

    }

    // line 108
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_93fa825396257b17f4e1e5ddc048ceb0a48b77e5a4b29534e9f2899b1d94fe82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fa825396257b17f4e1e5ddc048ceb0a48b77e5a4b29534e9f2899b1d94fe82->enter($__internal_93fa825396257b17f4e1e5ddc048ceb0a48b77e5a4b29534e9f2899b1d94fe82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 109
        echo "    <!-- External JavaScripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/plugins.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/jquery.calendario.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/events-data.js"), "html", null, true);
        echo "\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/functions.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">

        var cal = \$('#calendar').calendario({
                onDayClick: function (\$el, \$contentEl, dateProperties) {

                    for (var key in dateProperties) {
                        console.log(key + ' = ' + dateProperties[key]);
                    }

                },
                caldata: canvasEvents
            }),
            \$month = \$('#calendar-month').html(cal.getMonthName()),
            \$year = \$('#calendar-year').html(cal.getYear());

        \$('#calendar-next').on('click', function () {
            cal.gotoNextMonth(updateMonthYear);
        });
        \$('#calendar-prev').on('click', function () {
            cal.gotoPreviousMonth(updateMonthYear);
        });
        \$('#calendar-current').on('click', function () {
            cal.gotoNow(updateMonthYear);
        });

        function updateMonthYear() {
            \$month.html(cal.getMonthName());
            \$year.html(cal.getYear());
        };

    </script>

";
        
        $__internal_93fa825396257b17f4e1e5ddc048ceb0a48b77e5a4b29534e9f2899b1d94fe82->leave($__internal_93fa825396257b17f4e1e5ddc048ceb0a48b77e5a4b29534e9f2899b1d94fe82_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Workshop:AfficheWorkshop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 118,  238 => 114,  234 => 113,  230 => 112,  226 => 111,  222 => 109,  216 => 108,  205 => 100,  190 => 90,  184 => 87,  176 => 83,  174 => 82,  170 => 81,  163 => 77,  159 => 76,  155 => 75,  147 => 72,  137 => 65,  127 => 57,  123 => 56,  93 => 29,  81 => 20,  70 => 12,  65 => 9,  59 => 8,  48 => 5,  37 => 4,  11 => 1,);
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


    <section id=\"content\">
        <form method=\"POST\" action=\"{{ path('_RechercheWorkshop') }}\"> Trouver un workshop
            <input type=\"text\" name=\"valeur\" id=\"zz\">
            <input type=\"submit\" name=\"submit\" value=\"recherche\">
        </form>

        <div class=\"content-wrap\" >

            <div class=\"parallax header-stick bottommargin-lg dark\"
                 style=\"padding: 60px 0; background-image: url('{{ asset('Template/images/parallax/calendar.jpg') }}'); height: auto;\"
                 data-stellar-background-ratio=\"0.5\">

                <div class=\"container clearfix\">

                    <div class=\"events-calendar\">
                        <div class=\"events-calendar-header clearfix\">
                            <h2>Liste des Workshops </h2>
                            <div class=\"entry-content\">
                                <a href=\"{{ path('_AjoutWorkshop') }}\" class=\"btn btn-default\">Ajouter Votre
                                    workshop</a>
                            </div>
                            <h3 class=\"calendar-month-year\">
                                <span id=\"calendar-month\" class=\"calendar-month\"></span>
                                <span id=\"calendar-year\" class=\"calendar-year\"></span>
                                <nav>
                                    <span id=\"calendar-prev\" class=\"calendar-prev\">

                                    <span id=\"calendar-next\" class=\"calendar-next\">

                                    <span id=\"calendar-current\" class=\"calendar-current\" title=\"Got to current date\"></span>
                                </nav>
                            </h3>
                        </div>
                        <div id=\"calendar\" class=\"fc-calendar-container\"></div>
                    </div>


                </div>

            </div>


            <div class=\"divider divider-center\"><i class=\"icon-circle-blank\"></i></div>

            <h3>Ateliers à venir</h3>
            {% for work in w  %}

                <div id=\"posts\" class=\"events small-thumbs\" >

                    <div class=\"entry clearfix\" style=\"background-color: #eac36e\">


                        <div class=\"entry-image\" >
                            <a href=\"#\">
                                <img src=\"{{ asset('uploads/images/' ~ work.image) }}\">
                            </a>
                        </div>

                        <div class=\"entry-c\" >
                            <div class=\"entry-title\">

                                <h2><a href=\"{{ path('_Redirect',{'id': work.id}) }}\">{{ work.nomWorkshop }}</a></h2>
                            </div>
                            <ul class=\"entry-meta clearfix\">
                                <li><span class=\"label label-warning\">{{ work.dateDebut| date(\"m/d/Y\") }}</span></li>
                                <li><a href=\"#\"><i class=\"icon-time\"></i>{{ work.dateFin| date(\"m/d/Y\") }}  </a></li>
                                <li><a href=\"#\"><i class=\"icon-map-marker2\"></i> {{ work.adresse }}</a></li>
                            </ul>

                            <div class=\"entry-content\">
                                <p>{{ work.description }}</p>
                                {% if work.idUser.id == app.user.id %}
                                <a href=\"{{ path('_DeleteWorkshop', {'id':work.id}) }}\" class=\"btn btn-default\">Supprimer
                                    Workshop</a>
                            </div>
                            <div class=\"entry-content\">
                                <a href=\"{{ path('_UpdateWorkshop', {'id':work.id}) }}\" class=\"btn btn-default\">Modifier
                                    Workshop</a>
                                {% endif %}


                            </div>


                        </div>

                    </div>
                </div>
            {% endfor %}

    </section><!-- #content end -->


{% endblock %}



{% block javascript %}
    <!-- External JavaScripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/plugins.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/jquery.calendario.js') }}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/events-data.js') }}\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/functions.js') }}\"></script>

    <script type=\"text/javascript\">

        var cal = \$('#calendar').calendario({
                onDayClick: function (\$el, \$contentEl, dateProperties) {

                    for (var key in dateProperties) {
                        console.log(key + ' = ' + dateProperties[key]);
                    }

                },
                caldata: canvasEvents
            }),
            \$month = \$('#calendar-month').html(cal.getMonthName()),
            \$year = \$('#calendar-year').html(cal.getYear());

        \$('#calendar-next').on('click', function () {
            cal.gotoNextMonth(updateMonthYear);
        });
        \$('#calendar-prev').on('click', function () {
            cal.gotoPreviousMonth(updateMonthYear);
        });
        \$('#calendar-current').on('click', function () {
            cal.gotoNow(updateMonthYear);
        });

        function updateMonthYear() {
            \$month.html(cal.getMonthName());
            \$year.html(cal.getYear());
        };

    </script>

{% endblock %}", "WorkshopBundle:Workshop:AfficheWorkshop.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Workshop/AfficheWorkshop.html.twig");
    }
}
