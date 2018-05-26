<?php

/* StockBundle::ajouter.html.twig */
class __TwigTemplate_12d6d473b432e3a0a86dd26e6b7c9a43485f97afde52963deb008a218cb9b43e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StockBundle::layout.html.twig", "StockBundle::ajouter.html.twig", 1);
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
        $__internal_5e9b440d7c80ee82372b34ddf219fcb8fd9674e54d104de2e5932caf38764b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9b440d7c80ee82372b34ddf219fcb8fd9674e54d104de2e5932caf38764b82->enter($__internal_5e9b440d7c80ee82372b34ddf219fcb8fd9674e54d104de2e5932caf38764b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e9b440d7c80ee82372b34ddf219fcb8fd9674e54d104de2e5932caf38764b82->leave($__internal_5e9b440d7c80ee82372b34ddf219fcb8fd9674e54d104de2e5932caf38764b82_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_d73d19b46e0792883fd3cf13ecdd30c292df19bed47f0889a99f6923d0d1d75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73d19b46e0792883fd3cf13ecdd30c292df19bed47f0889a99f6923d0d1d75a->enter($__internal_d73d19b46e0792883fd3cf13ecdd30c292df19bed47f0889a99f6923d0d1d75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Ajouter un produit</title>

";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo " ";
        
        $__internal_d73d19b46e0792883fd3cf13ecdd30c292df19bed47f0889a99f6923d0d1d75a->leave($__internal_d73d19b46e0792883fd3cf13ecdd30c292df19bed47f0889a99f6923d0d1d75a_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3dbe14c8e8acb2de6e91ccdc2984f2242645332bd6d2b5579f81dec6c0112c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dbe14c8e8acb2de6e91ccdc2984f2242645332bd6d2b5579f81dec6c0112c5f->enter($__internal_3dbe14c8e8acb2de6e91ccdc2984f2242645332bd6d2b5579f81dec6c0112c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_3dbe14c8e8acb2de6e91ccdc2984f2242645332bd6d2b5579f81dec6c0112c5f->leave($__internal_3dbe14c8e8acb2de6e91ccdc2984f2242645332bd6d2b5579f81dec6c0112c5f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c75534033ad7e00a3cc8aa470bcce9dc9f1a41825d0a05591c2c9c6e78dbbf88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75534033ad7e00a3cc8aa470bcce9dc9f1a41825d0a05591c2c9c6e78dbbf88->enter($__internal_c75534033ad7e00a3cc8aa470bcce9dc9f1a41825d0a05591c2c9c6e78dbbf88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "        <section id=\"page-title\">

            <div class=\"container clearfix\">
                <h1>Ajouter un produit</h1>
                <span>Créez votre boutique en ajoutant des produits</span>

            </div>

        </section><!-- #page-title end -->
        <section id=\"content\">

            <div class=\"content-wrap\">
                <div class=\"section nopadding nomargin\" style=\"width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("o-MARKET-TUNISIA-facebook.jpg"), "html", null, true);
        echo "') center center no-repeat; background-size: cover;\"></div>

                <div class=\"container clearfix\">
                    <div class=\"panel panel-default divcenter noradius noborder\" style=\"max-width: 400px; background-color: rgba(255,255,255,0.93);\">
                        <div class=\"panel-body\" style=\"padding: 40px;\">
                    <!-- Shop
                    ============================================= -->

                    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 38
        echo "                    <!--div class=\"line line-sm\"></div>
                    <div-- class=\"center\">
                        <input type=\"submit\" value=\"Ajouter\" class=\"button button-3d button-black nomargin\"/>
                    </div-->
                    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

    ";
        
        $__internal_c75534033ad7e00a3cc8aa470bcce9dc9f1a41825d0a05591c2c9c6e78dbbf88->leave($__internal_c75534033ad7e00a3cc8aa470bcce9dc9f1a41825d0a05591c2c9c6e78dbbf88_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f7b2bcc5248789cf1fe554a0a53ab646e9f7f4b35a2d78f887c145fc06f926a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7b2bcc5248789cf1fe554a0a53ab646e9f7f4b35a2d78f887c145fc06f926a1->enter($__internal_f7b2bcc5248789cf1fe554a0a53ab646e9f7f4b35a2d78f887c145fc06f926a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/components/rangeslider.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 54
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
        
        $__internal_f7b2bcc5248789cf1fe554a0a53ab646e9f7f4b35a2d78f887c145fc06f926a1->leave($__internal_f7b2bcc5248789cf1fe554a0a53ab646e9f7f4b35a2d78f887c145fc06f926a1_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle::ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 54,  148 => 53,  142 => 52,  126 => 42,  120 => 38,  116 => 36,  105 => 28,  91 => 16,  85 => 15,  74 => 10,  69 => 8,  65 => 7,  61 => 5,  55 => 4,  48 => 14,  46 => 4,  37 => 2,  11 => 1,);
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
                <h1>Ajouter un produit</h1>
                <span>Créez votre boutique en ajoutant des produits</span>

            </div>

        </section><!-- #page-title end -->
        <section id=\"content\">

            <div class=\"content-wrap\">
                <div class=\"section nopadding nomargin\" style=\"width: 100%; height: 100%; position: absolute; left: 0; top: 0; background: url('{{ asset('o-MARKET-TUNISIA-facebook.jpg') }}') center center no-repeat; background-size: cover;\"></div>

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
{% endblock %}", "StockBundle::ajouter.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/ajouter.html.twig");
    }
}
