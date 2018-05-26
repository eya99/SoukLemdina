<?php

/* StockBundle::modif.html.twig */
class __TwigTemplate_19bb115cf4b649a9ca9afb581d917da5864fb8cba6e4f3857b445b301de0f3a3 extends Twig_Template
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
        $__internal_40fb97820c0a4308f6e9eb2bce87b3e9c697ce67d426da47520f2d59cf30eb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fb97820c0a4308f6e9eb2bce87b3e9c697ce67d426da47520f2d59cf30eb94->enter($__internal_40fb97820c0a4308f6e9eb2bce87b3e9c697ce67d426da47520f2d59cf30eb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::modif.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40fb97820c0a4308f6e9eb2bce87b3e9c697ce67d426da47520f2d59cf30eb94->leave($__internal_40fb97820c0a4308f6e9eb2bce87b3e9c697ce67d426da47520f2d59cf30eb94_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_82b27d1ae2e13c19826e7376dc4ba9544440e85a2f5b157ceb69867f5a6f6229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b27d1ae2e13c19826e7376dc4ba9544440e85a2f5b157ceb69867f5a6f6229->enter($__internal_82b27d1ae2e13c19826e7376dc4ba9544440e85a2f5b157ceb69867f5a6f6229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Ajouter un produit</title>

     ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo " ";
        
        $__internal_82b27d1ae2e13c19826e7376dc4ba9544440e85a2f5b157ceb69867f5a6f6229->leave($__internal_82b27d1ae2e13c19826e7376dc4ba9544440e85a2f5b157ceb69867f5a6f6229_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b25d4cf992fb4e7082b83ae605763dc613ab203a57691806ce1f5335089dc648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25d4cf992fb4e7082b83ae605763dc613ab203a57691806ce1f5335089dc648->enter($__internal_b25d4cf992fb4e7082b83ae605763dc613ab203a57691806ce1f5335089dc648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_b25d4cf992fb4e7082b83ae605763dc613ab203a57691806ce1f5335089dc648->leave($__internal_b25d4cf992fb4e7082b83ae605763dc613ab203a57691806ce1f5335089dc648_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_160c690ed5d31b1a0986285782b5611811c3e1e6a92b20998f46b688e78ecb9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_160c690ed5d31b1a0986285782b5611811c3e1e6a92b20998f46b688e78ecb9d->enter($__internal_160c690ed5d31b1a0986285782b5611811c3e1e6a92b20998f46b688e78ecb9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_160c690ed5d31b1a0986285782b5611811c3e1e6a92b20998f46b688e78ecb9d->leave($__internal_160c690ed5d31b1a0986285782b5611811c3e1e6a92b20998f46b688e78ecb9d_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13107f06959660e6265fa49e169636ee864b2eea2bcbb6ea44474e3944a6be34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13107f06959660e6265fa49e169636ee864b2eea2bcbb6ea44474e3944a6be34->enter($__internal_13107f06959660e6265fa49e169636ee864b2eea2bcbb6ea44474e3944a6be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_13107f06959660e6265fa49e169636ee864b2eea2bcbb6ea44474e3944a6be34->leave($__internal_13107f06959660e6265fa49e169636ee864b2eea2bcbb6ea44474e3944a6be34_prof);

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
        return array (  156 => 57,  151 => 56,  145 => 55,  128 => 44,  122 => 40,  118 => 38,  105 => 28,  91 => 16,  85 => 15,  74 => 10,  69 => 8,  65 => 7,  61 => 5,  55 => 4,  48 => 14,  46 => 4,  37 => 2,  11 => 1,);
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
