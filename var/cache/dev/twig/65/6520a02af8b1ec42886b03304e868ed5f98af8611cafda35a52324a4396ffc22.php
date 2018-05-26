<?php

/* StockBundle::modif.html.twig */
class __TwigTemplate_c74b580a467ee79251904fc5bd6bc1f18e327f13f41f21cf2b0bfef2c7c9906e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StockBundle::layout.html.twig", "StockBundle::modif.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StockBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bb01e0827d5160d4ed8eb41a8b2fc76781303a850cff029239d8a880ef04b74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb01e0827d5160d4ed8eb41a8b2fc76781303a850cff029239d8a880ef04b74->enter($__internal_8bb01e0827d5160d4ed8eb41a8b2fc76781303a850cff029239d8a880ef04b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::modif.html.twig"));

        $__internal_6658b8ffe7600d1dfd7e1e970cedee5e27b817d05aa5e436ba8c5a2ff6f32e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6658b8ffe7600d1dfd7e1e970cedee5e27b817d05aa5e436ba8c5a2ff6f32e14->enter($__internal_6658b8ffe7600d1dfd7e1e970cedee5e27b817d05aa5e436ba8c5a2ff6f32e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bb01e0827d5160d4ed8eb41a8b2fc76781303a850cff029239d8a880ef04b74->leave($__internal_8bb01e0827d5160d4ed8eb41a8b2fc76781303a850cff029239d8a880ef04b74_prof);

        
        $__internal_6658b8ffe7600d1dfd7e1e970cedee5e27b817d05aa5e436ba8c5a2ff6f32e14->leave($__internal_6658b8ffe7600d1dfd7e1e970cedee5e27b817d05aa5e436ba8c5a2ff6f32e14_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_43952325a0244256f02353a56c26d219547a1fcbc56cee0481552b6545f2781f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43952325a0244256f02353a56c26d219547a1fcbc56cee0481552b6545f2781f->enter($__internal_43952325a0244256f02353a56c26d219547a1fcbc56cee0481552b6545f2781f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_71fb514ac786f19752a5210beae760c864b9fbcc6aab3a3b8c8492effebd2cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71fb514ac786f19752a5210beae760c864b9fbcc6aab3a3b8c8492effebd2cb7->enter($__internal_71fb514ac786f19752a5210beae760c864b9fbcc6aab3a3b8c8492effebd2cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Ajouter un produit</title>

     ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo " ";
        
        $__internal_71fb514ac786f19752a5210beae760c864b9fbcc6aab3a3b8c8492effebd2cb7->leave($__internal_71fb514ac786f19752a5210beae760c864b9fbcc6aab3a3b8c8492effebd2cb7_prof);

        
        $__internal_43952325a0244256f02353a56c26d219547a1fcbc56cee0481552b6545f2781f->leave($__internal_43952325a0244256f02353a56c26d219547a1fcbc56cee0481552b6545f2781f_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_841b1e93ec1cde73cbe82af884531acd62a55358dde59509e5a20f46109456be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841b1e93ec1cde73cbe82af884531acd62a55358dde59509e5a20f46109456be->enter($__internal_841b1e93ec1cde73cbe82af884531acd62a55358dde59509e5a20f46109456be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3616b477b495c956af961f4240a276624805bd616a656a7923fac583965f06e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3616b477b495c956af961f4240a276624805bd616a656a7923fac583965f06e9->enter($__internal_3616b477b495c956af961f4240a276624805bd616a656a7923fac583965f06e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "

         <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/components/ion.rangeslider.css\" type=\"text/css"), "html", null, true);
        echo "\"/>
         <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/components/ion.rangeslider.css\" type=\"text/css"), "html", null, true);
        echo "\" />

         <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" />


     ";
        
        $__internal_3616b477b495c956af961f4240a276624805bd616a656a7923fac583965f06e9->leave($__internal_3616b477b495c956af961f4240a276624805bd616a656a7923fac583965f06e9_prof);

        
        $__internal_841b1e93ec1cde73cbe82af884531acd62a55358dde59509e5a20f46109456be->leave($__internal_841b1e93ec1cde73cbe82af884531acd62a55358dde59509e5a20f46109456be_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_e64560806fbf0cfab4410cc5f3f47b0d390b42ed7a1056e61cb8408e2e3e9904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64560806fbf0cfab4410cc5f3f47b0d390b42ed7a1056e61cb8408e2e3e9904->enter($__internal_e64560806fbf0cfab4410cc5f3f47b0d390b42ed7a1056e61cb8408e2e3e9904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_88f8c5d398ad27373aa9dbdd6b6c1b57bcf5857c7f3cb5daa8ee10881feb6026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f8c5d398ad27373aa9dbdd6b6c1b57bcf5857c7f3cb5daa8ee10881feb6026->enter($__internal_88f8c5d398ad27373aa9dbdd6b6c1b57bcf5857c7f3cb5daa8ee10881feb6026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "        <section id=\"page-title\">

            <div class=\"container clearfix\">
                <h1>Modifier un produit</h1>
                <span>Vous pouvez ajouter  une promotion</span>

            </div>

        </section><!-- #page-title end -->
        <section id=\"content\">

            <div class=\"content-wrap\">
                <div class=\"section nopadding nomargin\" style=\"width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("souk-tn.jpg"), "html", null, true);
        echo "') center center no-repeat; background-size: cover;\"></div>


                <div class=\"container clearfix\">
                    <div class=\"panel panel-default divcenter noradius noborder\" style=\"max-width: 400px; background-color: rgba(255,255,255,0.93);\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">

                    <!-- Shop
                    ============================================= -->

                    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 40
        echo "                    <!--div class=\"line line-sm\"></div>
                    <div-- class=\"center\">
                        <input type=\"submit\" value=\"Ajouter\" class=\"button button-3d button-black nomargin\"/>
                    </div-->
                    ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

    ";
        
        $__internal_88f8c5d398ad27373aa9dbdd6b6c1b57bcf5857c7f3cb5daa8ee10881feb6026->leave($__internal_88f8c5d398ad27373aa9dbdd6b6c1b57bcf5857c7f3cb5daa8ee10881feb6026_prof);

        
        $__internal_e64560806fbf0cfab4410cc5f3f47b0d390b42ed7a1056e61cb8408e2e3e9904->leave($__internal_e64560806fbf0cfab4410cc5f3f47b0d390b42ed7a1056e61cb8408e2e3e9904_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c14b3e5d3f1e41433a021ecff6d729f7eb871080a94f4f417f3981174ce88c9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14b3e5d3f1e41433a021ecff6d729f7eb871080a94f4f417f3981174ce88c9d->enter($__internal_c14b3e5d3f1e41433a021ecff6d729f7eb871080a94f4f417f3981174ce88c9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9f177b869f69143c1e6ebf4028be5c77e998c18ce268326625bc2130a1a5501f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f177b869f69143c1e6ebf4028be5c77e998c18ce268326625bc2130a1a5501f->enter($__internal_9f177b869f69143c1e6ebf4028be5c77e998c18ce268326625bc2130a1a5501f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/components/rangeslider.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/components/moment.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$(\".range_01\").ionRangeSlider();

            \$(\".range_02\").ionRangeSlider({
                min: 0,
                max: 100,
                from: 00
            });




        });
    </script>
";
        
        $__internal_9f177b869f69143c1e6ebf4028be5c77e998c18ce268326625bc2130a1a5501f->leave($__internal_9f177b869f69143c1e6ebf4028be5c77e998c18ce268326625bc2130a1a5501f_prof);

        
        $__internal_c14b3e5d3f1e41433a021ecff6d729f7eb871080a94f4f417f3981174ce88c9d->leave($__internal_c14b3e5d3f1e41433a021ecff6d729f7eb871080a94f4f417f3981174ce88c9d_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle::modif.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 57,  178 => 56,  169 => 55,  149 => 44,  143 => 40,  139 => 38,  126 => 28,  112 => 16,  103 => 15,  89 => 10,  84 => 8,  80 => 7,  76 => 5,  67 => 4,  57 => 14,  55 => 4,  43 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"StockBundle::layout.html.twig\" %}
 {% block head %}<title>Ajouter un produit</title>

     {% block stylesheets %}


         <link rel=\"stylesheet\" href=\"{{ asset('Template/css/components/ion.rangeslider.css\" type=\"text/css') }}\"/>
         <link rel=\"stylesheet\" href=\"{{ asset('Template/css/components/ion.rangeslider.css\" type=\"text/css') }}\" />

         <link rel=\"stylesheet\" href=\"{{ asset('Template/css/responsive.css') }}\" type=\"text/css\" />


     {% endblock %}
 {% endblock %}
    {% block body %}
        <section id=\"page-title\">

            <div class=\"container clearfix\">
                <h1>Modifier un produit</h1>
                <span>Vous pouvez ajouter  une promotion</span>

            </div>

        </section><!-- #page-title end -->
        <section id=\"content\">

            <div class=\"content-wrap\">
                <div class=\"section nopadding nomargin\" style=\"width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('{{ asset('souk-tn.jpg') }}') center center no-repeat; background-size: cover;\"></div>


                <div class=\"container clearfix\">
                    <div class=\"panel panel-default divcenter noradius noborder\" style=\"max-width: 400px; background-color: rgba(255,255,255,0.93);\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">

                    <!-- Shop
                    ============================================= -->

                    {{ form_start(form) }}
                    {#{ form_widget(form) }#}
                    <!--div class=\"line line-sm\"></div>
                    <div-- class=\"center\">
                        <input type=\"submit\" value=\"Ajouter\" class=\"button button-3d button-black nomargin\"/>
                    </div-->
                    {{ form_end(form) }}

                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

    {% endblock %}

{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/components/rangeslider.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('Template/js/components/moment.js')}}\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {

            \$(\".range_01\").ionRangeSlider();

            \$(\".range_02\").ionRangeSlider({
                min: 0,
                max: 100,
                from: 00
            });




        });
    </script>
{% endblock %}", "StockBundle::modif.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/modif.html.twig");
    }
}
