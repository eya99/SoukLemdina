<?php

/* LocalBundle:Local:louer.html.twig */
class __TwigTemplate_ac772f4aa1649a56c0a8a1d8d37c54e3cc7afddf8ef7772421255d1d6b563641 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "LocalBundle:Local:louer.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_1d23671671fccbb4c295cc8caaf96f1312d6f0a226a567d7937aea82d2464b0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d23671671fccbb4c295cc8caaf96f1312d6f0a226a567d7937aea82d2464b0e->enter($__internal_1d23671671fccbb4c295cc8caaf96f1312d6f0a226a567d7937aea82d2464b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:louer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d23671671fccbb4c295cc8caaf96f1312d6f0a226a567d7937aea82d2464b0e->leave($__internal_1d23671671fccbb4c295cc8caaf96f1312d6f0a226a567d7937aea82d2464b0e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0bc2aae51bf5fe14c2ca747049a26e12451a52ce18b8c84585f39ab0f16aacb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bc2aae51bf5fe14c2ca747049a26e12451a52ce18b8c84585f39ab0f16aacb9->enter($__internal_0bc2aae51bf5fe14c2ca747049a26e12451a52ce18b8c84585f39ab0f16aacb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_0bc2aae51bf5fe14c2ca747049a26e12451a52ce18b8c84585f39ab0f16aacb9->leave($__internal_0bc2aae51bf5fe14c2ca747049a26e12451a52ce18b8c84585f39ab0f16aacb9_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2c77dbcc29b26748553f627ba6a316c3fd787b1ac0ad0ebf5c261c565524351f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c77dbcc29b26748553f627ba6a316c3fd787b1ac0ad0ebf5c261c565524351f->enter($__internal_2c77dbcc29b26748553f627ba6a316c3fd787b1ac0ad0ebf5c261c565524351f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=\"demos/travel/css/datepicker.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"css/components/timepicker.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"css/components/daterangepicker.css\" type=\"text/css\" />

        <link rel=\"stylesheet\" href=\"css/responsive.css\" type=\"text/css\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    ";
        
        $__internal_2c77dbcc29b26748553f627ba6a316c3fd787b1ac0ad0ebf5c261c565524351f->leave($__internal_2c77dbcc29b26748553f627ba6a316c3fd787b1ac0ad0ebf5c261c565524351f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bb4f185bbdb8e879ae22e47bef4ec48f3d3e971747264b16a9dddfa0410bb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb4f185bbdb8e879ae22e47bef4ec48f3d3e971747264b16a9dddfa0410bb8f->enter($__internal_1bb4f185bbdb8e879ae22e47bef4ec48f3d3e971747264b16a9dddfa0410bb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Louer un local</h1>

        </div>

    </section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"line line-sm\"></div>

";
        // line 27
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 29
            echo "
                    <div class=\"alert alert-success\">
                        ";
            // line 31
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "

                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\">



                        <div class=\"product clearfix\">
                            <div class=\"product-image\">
                                <a href=\"#\"><img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "image", array()))), "html", null, true);
        echo "\"></a>


                            </div>
                            <div class=\"product-desc\">
                                <div class=\"product-title\"><h5>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "type", array()), "html", null, true);
        echo "</h5></div>
                                <div class=\"product-price\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "prix", array()), "html", null, true);
        echo "DT</div>
                                <div class=\"product-price\">";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["local"]) ? $context["local"] : $this->getContext($context, "local")), "superficie", array()), "html", null, true);
        echo "m²</div>
                                <div class=\"product-rating\">
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star-half-full\"></i>


                                </div>
                            </div>
                            <div class=\"center\">
                                <div class=\"product-desc\">

                            </div>
                            </div>
                        </div>

                </div>
";
        // line 69
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>

    </section>

";
        
        $__internal_1bb4f185bbdb8e879ae22e47bef4ec48f3d3e971747264b16a9dddfa0410bb8f->leave($__internal_1bb4f185bbdb8e879ae22e47bef4ec48f3d3e971747264b16a9dddfa0410bb8f_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e15a56bd1a36827202fe5b73b5274551e1b4fad7464d59fed7e09413b93ba87d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15a56bd1a36827202fe5b73b5274551e1b4fad7464d59fed7e09413b93ba87d->enter($__internal_e15a56bd1a36827202fe5b73b5274551e1b4fad7464d59fed7e09413b93ba87d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 77
        echo "    <script type=\"text/javascript\" src=\"js/components/moment.js\"></script>
    <script type=\"text/javascript\" src=\"demos/travel/js/datepicker.js\"></script>
    <script type=\"text/javascript\" src=\"js/components/timepicker.js\"></script>

    <!-- Include Date Range Picker -->
    <script type=\"text/javascript\" src=\"js/components/daterangepicker.js\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"js/functions.js\"></script>

    <script type=\"text/javascript\">
        \$(function() {
            \$('.travel-date-group .default').datepicker({
                autoclose: true,
                startDate: \"today\",
            });

            \$('.travel-date-group .today').datepicker({
                autoclose: true,
                startDate: \"today\",
                todayHighlight: true
            });

            \$('.travel-date-group .past-enabled').datepicker({
                autoclose: true,
            });
            \$('.travel-date-group .format').datepicker({
                autoclose: true,
                format: \"dd-mm-yyyy\",
            });

            \$('.travel-date-group .autoclose').datepicker();

            \$('.travel-date-group .disabled-week').datepicker({
                autoclose: true,
                daysOfWeekDisabled: \"0\"
            });

            \$('.travel-date-group .highlighted-week').datepicker({
                autoclose: true,
                daysOfWeekHighlighted: \"0\"
            });

            \$('.travel-date-group .mnth').datepicker({
                autoclose: true,
                minViewMode: 1,
                format: \"mm/yy\"
            });

            \$('.travel-date-group .multidate').datepicker({
                multidate: true,
                multidateSeparator: \" , \"
            });

            \$('.travel-date-group .input-daterange').datepicker({
                autoclose: true
            });

            \$('.travel-date-group .inline-calendar').datepicker();

            \$('.datetimepicker').datetimepicker({
                showClose: true
            });

            \$('.datetimepicker1').datetimepicker({
                format: 'LT',
                showClose: true
            });

            \$('.datetimepicker2').datetimepicker({
                inline: true,
                sideBySide: true
            });

        });

        \$(function() {
            // .daterange1
            \$(\".daterange1\").daterangepicker({
                \"buttonClasses\": \"button button-rounded button-mini nomargin\",
                \"applyClass\": \"button-color\",
                \"cancelClass\": \"button-light\"
            });

            // .daterange2
            \$(\".daterange2\").daterangepicker({
                \"opens\": \"center\",
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                },
                \"buttonClasses\": \"button button-rounded button-mini nomargin\",
                \"applyClass\": \"button-color\",
                \"cancelClass\": \"button-light\"
            });

            // .daterange3
            \$(\".daterange3\").daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true
                },
                function(start, end, label) {
                    var years = moment().diff(start, 'years');
                    alert(\"You are \" + years + \" years old.\");
                });

            // reportrange
            function cb(start, end) {
                \$(\".reportrange span\").html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
            cb(moment().subtract(29, 'days'), moment());

            \$(\".reportrange\").daterangepicker({
                \"buttonClasses\": \"button button-rounded button-mini nomargin\",
                \"applyClass\": \"button-color\",
                \"cancelClass\": \"button-light\",
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            // .daterange4
            \$(\".daterange4\").daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                },
                \"buttonClasses\": \"button button-rounded button-mini nomargin\",
                \"applyClass\": \"button-color\",
                \"cancelClass\": \"button-light\"
            });

            \$(\".daterange4\").on('apply.daterangepicker', function(ev, picker) {
                \$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
            });

            \$(\".daterange4\").on('cancel.daterangepicker', function(ev, picker) {
                \$(this).val('');
            });

        });

    </script>


";
        
        $__internal_e15a56bd1a36827202fe5b73b5274551e1b4fad7464d59fed7e09413b93ba87d->leave($__internal_e15a56bd1a36827202fe5b73b5274551e1b4fad7464d59fed7e09413b93ba87d_prof);

    }

    public function getTemplateName()
    {
        return "LocalBundle:Local:louer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 77,  178 => 76,  164 => 69,  142 => 50,  138 => 49,  134 => 48,  126 => 43,  116 => 35,  106 => 31,  102 => 29,  98 => 28,  94 => 27,  87 => 23,  74 => 12,  68 => 11,  55 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SUserBundle::layout.html.twig' %}
  {% block title %}Local{% endblock %}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"demos/travel/css/datepicker.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"css/components/timepicker.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"css/components/daterangepicker.css\" type=\"text/css\" />

        <link rel=\"stylesheet\" href=\"css/responsive.css\" type=\"text/css\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    {% endblock %}
{% block body %}
    <section id=\"page-title\">

        <div class=\"container clearfix\">
            <h1>Louer un local</h1>

        </div>

    </section>
    <section id=\"content\">
        <div class=\"content-wrap \" >
            <div class=\"container clearfix\" style=\"width:30%;\">
{{ form_start(form) }}

                <div class=\"line line-sm\"></div>

{{ form(form) }}
                {% for flashMessage in app.session.flashbag.get('notice') %}

                    <div class=\"alert alert-success\">
                        {{ flashMessage }}
                    </div>

                {% endfor %}


                <div id=\"shop\" class=\"shop grid-container clearfix\" data-layout=\"fitRows\">



                        <div class=\"product clearfix\">
                            <div class=\"product-image\">
                                <a href=\"#\"><img src=\"{{ asset ('uploads/images/' ~ local.image)}}\"></a>


                            </div>
                            <div class=\"product-desc\">
                                <div class=\"product-title\"><h5>{{ local.type }}</h5></div>
                                <div class=\"product-price\">{{ local.prix }}DT</div>
                                <div class=\"product-price\">{{ local.superficie }}m²</div>
                                <div class=\"product-rating\">
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star3\"></i>
                                    <i class=\"icon-star-half-full\"></i>


                                </div>
                            </div>
                            <div class=\"center\">
                                <div class=\"product-desc\">

                            </div>
                            </div>
                        </div>

                </div>
{{ form_end(form) }}
            </div>
        </div>

    </section>

{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\" src=\"js/components/moment.js\"></script>
    <script type=\"text/javascript\" src=\"demos/travel/js/datepicker.js\"></script>
    <script type=\"text/javascript\" src=\"js/components/timepicker.js\"></script>

    <!-- Include Date Range Picker -->
    <script type=\"text/javascript\" src=\"js/components/daterangepicker.js\"></script>

    <!-- Footer Scripts
    ============================================= -->
    <script type=\"text/javascript\" src=\"js/functions.js\"></script>

    <script type=\"text/javascript\">
        \$(function() {
            \$('.travel-date-group .default').datepicker({
                autoclose: true,
                startDate: \"today\",
            });

            \$('.travel-date-group .today').datepicker({
                autoclose: true,
                startDate: \"today\",
                todayHighlight: true
            });

            \$('.travel-date-group .past-enabled').datepicker({
                autoclose: true,
            });
            \$('.travel-date-group .format').datepicker({
                autoclose: true,
                format: \"dd-mm-yyyy\",
            });

            \$('.travel-date-group .autoclose').datepicker();

            \$('.travel-date-group .disabled-week').datepicker({
                autoclose: true,
                daysOfWeekDisabled: \"0\"
            });

            \$('.travel-date-group .highlighted-week').datepicker({
                autoclose: true,
                daysOfWeekHighlighted: \"0\"
            });

            \$('.travel-date-group .mnth').datepicker({
                autoclose: true,
                minViewMode: 1,
                format: \"mm/yy\"
            });

            \$('.travel-date-group .multidate').datepicker({
                multidate: true,
                multidateSeparator: \" , \"
            });

            \$('.travel-date-group .input-daterange').datepicker({
                autoclose: true
            });

            \$('.travel-date-group .inline-calendar').datepicker();

            \$('.datetimepicker').datetimepicker({
                showClose: true
            });

            \$('.datetimepicker1').datetimepicker({
                format: 'LT',
                showClose: true
            });

            \$('.datetimepicker2').datetimepicker({
                inline: true,
                sideBySide: true
            });

        });

        \$(function() {
            // .daterange1
            \$(\".daterange1\").daterangepicker({
                \"buttonClasses\": \"button button-rounded button-mini nomargin\",
                \"applyClass\": \"button-color\",
                \"cancelClass\": \"button-light\"
            });

            // .daterange2
            \$(\".daterange2\").daterangepicker({
                \"opens\": \"center\",
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY h:mm A'
                },
                \"buttonClasses\": \"button button-rounded button-mini nomargin\",
                \"applyClass\": \"button-color\",
                \"cancelClass\": \"button-light\"
            });

            // .daterange3
            \$(\".daterange3\").daterangepicker({
                    singleDatePicker: true,
                    showDropdowns: true
                },
                function(start, end, label) {
                    var years = moment().diff(start, 'years');
                    alert(\"You are \" + years + \" years old.\");
                });

            // reportrange
            function cb(start, end) {
                \$(\".reportrange span\").html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
            cb(moment().subtract(29, 'days'), moment());

            \$(\".reportrange\").daterangepicker({
                \"buttonClasses\": \"button button-rounded button-mini nomargin\",
                \"applyClass\": \"button-color\",
                \"cancelClass\": \"button-light\",
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            // .daterange4
            \$(\".daterange4\").daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                },
                \"buttonClasses\": \"button button-rounded button-mini nomargin\",
                \"applyClass\": \"button-color\",
                \"cancelClass\": \"button-light\"
            });

            \$(\".daterange4\").on('apply.daterangepicker', function(ev, picker) {
                \$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
            });

            \$(\".daterange4\").on('cancel.daterangepicker', function(ev, picker) {
                \$(this).val('');
            });

        });

    </script>


{% endblock %}
", "LocalBundle:Local:louer.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/LocalBundle/Resources/views/Local/louer.html.twig");
    }
}
