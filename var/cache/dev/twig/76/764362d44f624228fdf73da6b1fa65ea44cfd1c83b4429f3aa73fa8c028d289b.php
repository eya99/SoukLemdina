<?php

/* LocalBundle:Local:louer.html.twig */
class __TwigTemplate_89c1ee3fe41fee76850307efc92032957ad36d96e4b4209b5428cf8f3e3c2ea6 extends Twig_Template
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
        $__internal_6b8b9d9ba875e604bc709bdf22f5bf07dd0fb0b8ec97637bf36d746f087d2fd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8b9d9ba875e604bc709bdf22f5bf07dd0fb0b8ec97637bf36d746f087d2fd9->enter($__internal_6b8b9d9ba875e604bc709bdf22f5bf07dd0fb0b8ec97637bf36d746f087d2fd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:louer.html.twig"));

        $__internal_55ff7205a9f189342ee5899886fad386d9e4bf315d1fc5fcfe711d6e501db999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55ff7205a9f189342ee5899886fad386d9e4bf315d1fc5fcfe711d6e501db999->enter($__internal_55ff7205a9f189342ee5899886fad386d9e4bf315d1fc5fcfe711d6e501db999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LocalBundle:Local:louer.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b8b9d9ba875e604bc709bdf22f5bf07dd0fb0b8ec97637bf36d746f087d2fd9->leave($__internal_6b8b9d9ba875e604bc709bdf22f5bf07dd0fb0b8ec97637bf36d746f087d2fd9_prof);

        
        $__internal_55ff7205a9f189342ee5899886fad386d9e4bf315d1fc5fcfe711d6e501db999->leave($__internal_55ff7205a9f189342ee5899886fad386d9e4bf315d1fc5fcfe711d6e501db999_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8fb3ec10580e3244016855314d98e1ed16e7c0f8d4384546765b33cda7056c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fb3ec10580e3244016855314d98e1ed16e7c0f8d4384546765b33cda7056c6->enter($__internal_d8fb3ec10580e3244016855314d98e1ed16e7c0f8d4384546765b33cda7056c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_befc0e251ac41631cd5c818b95090070e42e5a97b9f25e943f2726ac5ed08c20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_befc0e251ac41631cd5c818b95090070e42e5a97b9f25e943f2726ac5ed08c20->enter($__internal_befc0e251ac41631cd5c818b95090070e42e5a97b9f25e943f2726ac5ed08c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Local";
        
        $__internal_befc0e251ac41631cd5c818b95090070e42e5a97b9f25e943f2726ac5ed08c20->leave($__internal_befc0e251ac41631cd5c818b95090070e42e5a97b9f25e943f2726ac5ed08c20_prof);

        
        $__internal_d8fb3ec10580e3244016855314d98e1ed16e7c0f8d4384546765b33cda7056c6->leave($__internal_d8fb3ec10580e3244016855314d98e1ed16e7c0f8d4384546765b33cda7056c6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8d3978f3744ccb3d1f7a00f2f4c8af0d0a310eec0a6320aa7c6caebe62fb7ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d3978f3744ccb3d1f7a00f2f4c8af0d0a310eec0a6320aa7c6caebe62fb7ad3->enter($__internal_8d3978f3744ccb3d1f7a00f2f4c8af0d0a310eec0a6320aa7c6caebe62fb7ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a560233f8161e7ad3a1bab0467647b8b87940e687a2c3faf047e4ae1206cf704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a560233f8161e7ad3a1bab0467647b8b87940e687a2c3faf047e4ae1206cf704->enter($__internal_a560233f8161e7ad3a1bab0467647b8b87940e687a2c3faf047e4ae1206cf704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "        <link rel=\"stylesheet\" href=\"demos/travel/css/datepicker.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"css/components/timepicker.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"css/components/daterangepicker.css\" type=\"text/css\" />

        <link rel=\"stylesheet\" href=\"css/responsive.css\" type=\"text/css\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\" />
    ";
        
        $__internal_a560233f8161e7ad3a1bab0467647b8b87940e687a2c3faf047e4ae1206cf704->leave($__internal_a560233f8161e7ad3a1bab0467647b8b87940e687a2c3faf047e4ae1206cf704_prof);

        
        $__internal_8d3978f3744ccb3d1f7a00f2f4c8af0d0a310eec0a6320aa7c6caebe62fb7ad3->leave($__internal_8d3978f3744ccb3d1f7a00f2f4c8af0d0a310eec0a6320aa7c6caebe62fb7ad3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_735199008bbf50392156b986c97b5a54d2a95422d5963abb3512f1eb39af9bb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_735199008bbf50392156b986c97b5a54d2a95422d5963abb3512f1eb39af9bb3->enter($__internal_735199008bbf50392156b986c97b5a54d2a95422d5963abb3512f1eb39af9bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a92c9447c8e013e47b6aeece68af272a70670b140b8bd8ea4db021a3083a024d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a92c9447c8e013e47b6aeece68af272a70670b140b8bd8ea4db021a3083a024d->enter($__internal_a92c9447c8e013e47b6aeece68af272a70670b140b8bd8ea4db021a3083a024d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a92c9447c8e013e47b6aeece68af272a70670b140b8bd8ea4db021a3083a024d->leave($__internal_a92c9447c8e013e47b6aeece68af272a70670b140b8bd8ea4db021a3083a024d_prof);

        
        $__internal_735199008bbf50392156b986c97b5a54d2a95422d5963abb3512f1eb39af9bb3->leave($__internal_735199008bbf50392156b986c97b5a54d2a95422d5963abb3512f1eb39af9bb3_prof);

    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a9d4310f2639c4667e6616e4afd60aa886b1047e5b5313de5e10361ac2da6759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9d4310f2639c4667e6616e4afd60aa886b1047e5b5313de5e10361ac2da6759->enter($__internal_a9d4310f2639c4667e6616e4afd60aa886b1047e5b5313de5e10361ac2da6759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_269fbe90190e447b87559eea48a895591ebcaf22a248766f6de8249eb3f7910c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269fbe90190e447b87559eea48a895591ebcaf22a248766f6de8249eb3f7910c->enter($__internal_269fbe90190e447b87559eea48a895591ebcaf22a248766f6de8249eb3f7910c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_269fbe90190e447b87559eea48a895591ebcaf22a248766f6de8249eb3f7910c->leave($__internal_269fbe90190e447b87559eea48a895591ebcaf22a248766f6de8249eb3f7910c_prof);

        
        $__internal_a9d4310f2639c4667e6616e4afd60aa886b1047e5b5313de5e10361ac2da6759->leave($__internal_a9d4310f2639c4667e6616e4afd60aa886b1047e5b5313de5e10361ac2da6759_prof);

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
        return array (  211 => 77,  202 => 76,  185 => 69,  163 => 50,  159 => 49,  155 => 48,  147 => 43,  137 => 35,  127 => 31,  123 => 29,  119 => 28,  115 => 27,  108 => 23,  95 => 12,  86 => 11,  70 => 4,  61 => 3,  43 => 2,  11 => 1,);
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
