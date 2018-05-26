<?php

/* WorkshopBundle:Default:index.html.twig */
class __TwigTemplate_45f1bd9bf8a41465d32091aa58d9c76f1946a40a173d80ef44b5f35ae0b16762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bc4e8c9f4da8a730e305fb55ed3e23b5070c1629af7b66476c226531ec3a75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc4e8c9f4da8a730e305fb55ed3e23b5070c1629af7b66476c226531ec3a75a->enter($__internal_8bc4e8c9f4da8a730e305fb55ed3e23b5070c1629af7b66476c226531ec3a75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Default:index.html.twig"));

        // line 1
        echo "<html>
<head></head>
<body>
<div id=\"div_chart\"></div>
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Template/js/loader.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    ";
        // line 7
        echo $this->env->getExtension('CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension')->gcDraw((isset($context["piechart"]) ? $context["piechart"] : $this->getContext($context, "piechart")), "div_chart");
        echo "
</script>
</body>
</html>

";
        
        $__internal_8bc4e8c9f4da8a730e305fb55ed3e23b5070c1629af7b66476c226531ec3a75a->leave($__internal_8bc4e8c9f4da8a730e305fb55ed3e23b5070c1629af7b66476c226531ec3a75a_prof);

    }

    public function getTemplateName()
    {
        return "WorkshopBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
<head></head>
<body>
<div id=\"div_chart\"></div>
<script type=\"text/javascript\" src=\"{{ asset('Template/js/loader.js') }}\"></script>
<script type=\"text/javascript\">
    {{ gc_draw(piechart, 'div_chart') }}
</script>
</body>
</html>

", "WorkshopBundle:Default:index.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/WorkshopBundle/Resources/views/Default/index.html.twig");
    }
}
