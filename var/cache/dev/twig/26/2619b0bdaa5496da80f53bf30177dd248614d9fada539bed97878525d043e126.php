<?php

/* StockBundle::ajouter.html.twig */
class __TwigTemplate_293306b6369d3f4e20c916d0db5c6a9ba0650720c08d7471653debe2f33af496 extends Twig_Template
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
        $__internal_6f56374c10b368215e23cb45c412abda5fcb6b3464677fcf0b2411667639edd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f56374c10b368215e23cb45c412abda5fcb6b3464677fcf0b2411667639edd1->enter($__internal_6f56374c10b368215e23cb45c412abda5fcb6b3464677fcf0b2411667639edd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::ajouter.html.twig"));

        $__internal_eeae6fe35cdb3825ad8e9191e81769e79bfdd414b8cc02e7bd2561e86ca41501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeae6fe35cdb3825ad8e9191e81769e79bfdd414b8cc02e7bd2561e86ca41501->enter($__internal_eeae6fe35cdb3825ad8e9191e81769e79bfdd414b8cc02e7bd2561e86ca41501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::ajouter.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f56374c10b368215e23cb45c412abda5fcb6b3464677fcf0b2411667639edd1->leave($__internal_6f56374c10b368215e23cb45c412abda5fcb6b3464677fcf0b2411667639edd1_prof);

        
        $__internal_eeae6fe35cdb3825ad8e9191e81769e79bfdd414b8cc02e7bd2561e86ca41501->leave($__internal_eeae6fe35cdb3825ad8e9191e81769e79bfdd414b8cc02e7bd2561e86ca41501_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_440a32fc2903aa05c24e6c6547d1f7cda6aa6798c53ead7bb560df143c341f96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440a32fc2903aa05c24e6c6547d1f7cda6aa6798c53ead7bb560df143c341f96->enter($__internal_440a32fc2903aa05c24e6c6547d1f7cda6aa6798c53ead7bb560df143c341f96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba508390ce720b52cb6c200c6fd70531bc5789c982c9fc4bcec5013243ffd3b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba508390ce720b52cb6c200c6fd70531bc5789c982c9fc4bcec5013243ffd3b7->enter($__internal_ba508390ce720b52cb6c200c6fd70531bc5789c982c9fc4bcec5013243ffd3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "<title>Ajouter un produit</title>

";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo " ";
        
        $__internal_ba508390ce720b52cb6c200c6fd70531bc5789c982c9fc4bcec5013243ffd3b7->leave($__internal_ba508390ce720b52cb6c200c6fd70531bc5789c982c9fc4bcec5013243ffd3b7_prof);

        
        $__internal_440a32fc2903aa05c24e6c6547d1f7cda6aa6798c53ead7bb560df143c341f96->leave($__internal_440a32fc2903aa05c24e6c6547d1f7cda6aa6798c53ead7bb560df143c341f96_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec18768a23b933183b465de86637ceefc3795928e8bac4774e1a13c23a0ea665 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec18768a23b933183b465de86637ceefc3795928e8bac4774e1a13c23a0ea665->enter($__internal_ec18768a23b933183b465de86637ceefc3795928e8bac4774e1a13c23a0ea665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ff058996539ff074112719b5c2e5fe3f085596b73cc67d979ebbdbaa6dcbb455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff058996539ff074112719b5c2e5fe3f085596b73cc67d979ebbdbaa6dcbb455->enter($__internal_ff058996539ff074112719b5c2e5fe3f085596b73cc67d979ebbdbaa6dcbb455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_ff058996539ff074112719b5c2e5fe3f085596b73cc67d979ebbdbaa6dcbb455->leave($__internal_ff058996539ff074112719b5c2e5fe3f085596b73cc67d979ebbdbaa6dcbb455_prof);

        
        $__internal_ec18768a23b933183b465de86637ceefc3795928e8bac4774e1a13c23a0ea665->leave($__internal_ec18768a23b933183b465de86637ceefc3795928e8bac4774e1a13c23a0ea665_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_0550ff38ea901e89dc3b58f716cb731935b6676df4e211f19909fc1b259a2982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0550ff38ea901e89dc3b58f716cb731935b6676df4e211f19909fc1b259a2982->enter($__internal_0550ff38ea901e89dc3b58f716cb731935b6676df4e211f19909fc1b259a2982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_067eee15c3cafe3a4fe5e98db608562db2f58ab6a5c570081b19332b18338c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_067eee15c3cafe3a4fe5e98db608562db2f58ab6a5c570081b19332b18338c05->enter($__internal_067eee15c3cafe3a4fe5e98db608562db2f58ab6a5c570081b19332b18338c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_067eee15c3cafe3a4fe5e98db608562db2f58ab6a5c570081b19332b18338c05->leave($__internal_067eee15c3cafe3a4fe5e98db608562db2f58ab6a5c570081b19332b18338c05_prof);

        
        $__internal_0550ff38ea901e89dc3b58f716cb731935b6676df4e211f19909fc1b259a2982->leave($__internal_0550ff38ea901e89dc3b58f716cb731935b6676df4e211f19909fc1b259a2982_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8adc66f975b50bd34902f76b78eaf02bb5fc7115849687a65cbf4d92e642ae55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8adc66f975b50bd34902f76b78eaf02bb5fc7115849687a65cbf4d92e642ae55->enter($__internal_8adc66f975b50bd34902f76b78eaf02bb5fc7115849687a65cbf4d92e642ae55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4994a49ac7670d6d485782b0542208bd71903681b8989b7a902ca31317a07728 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4994a49ac7670d6d485782b0542208bd71903681b8989b7a902ca31317a07728->enter($__internal_4994a49ac7670d6d485782b0542208bd71903681b8989b7a902ca31317a07728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4994a49ac7670d6d485782b0542208bd71903681b8989b7a902ca31317a07728->leave($__internal_4994a49ac7670d6d485782b0542208bd71903681b8989b7a902ca31317a07728_prof);

        
        $__internal_8adc66f975b50bd34902f76b78eaf02bb5fc7115849687a65cbf4d92e642ae55->leave($__internal_8adc66f975b50bd34902f76b78eaf02bb5fc7115849687a65cbf4d92e642ae55_prof);

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
        return array (  180 => 54,  175 => 53,  166 => 52,  147 => 42,  141 => 38,  137 => 36,  126 => 28,  112 => 16,  103 => 15,  89 => 10,  84 => 8,  80 => 7,  76 => 5,  67 => 4,  57 => 14,  55 => 4,  43 => 2,  11 => 1,);
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
