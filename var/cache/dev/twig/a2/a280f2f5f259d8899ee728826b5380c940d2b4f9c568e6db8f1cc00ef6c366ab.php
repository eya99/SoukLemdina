<?php

/* WorkshopBundle:Default:index.html.twig */
class __TwigTemplate_df018654e957353f55dff31904199bf8177ba255c081095bd0f36c8f6c38c58b extends Twig_Template
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
        $__internal_595f8313f577fdb140fab1b6cf86968b8b5bfce65caa5f362df45bd7cd9d8285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_595f8313f577fdb140fab1b6cf86968b8b5bfce65caa5f362df45bd7cd9d8285->enter($__internal_595f8313f577fdb140fab1b6cf86968b8b5bfce65caa5f362df45bd7cd9d8285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Default:index.html.twig"));

        $__internal_56cbc2c9db144c5e3cafa5e25de84c45b24f4c2991b62dd1a14e6107fe0d3e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56cbc2c9db144c5e3cafa5e25de84c45b24f4c2991b62dd1a14e6107fe0d3e49->enter($__internal_56cbc2c9db144c5e3cafa5e25de84c45b24f4c2991b62dd1a14e6107fe0d3e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WorkshopBundle:Default:index.html.twig"));

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
        
        $__internal_595f8313f577fdb140fab1b6cf86968b8b5bfce65caa5f362df45bd7cd9d8285->leave($__internal_595f8313f577fdb140fab1b6cf86968b8b5bfce65caa5f362df45bd7cd9d8285_prof);

        
        $__internal_56cbc2c9db144c5e3cafa5e25de84c45b24f4c2991b62dd1a14e6107fe0d3e49->leave($__internal_56cbc2c9db144c5e3cafa5e25de84c45b24f4c2991b62dd1a14e6107fe0d3e49_prof);

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
        return array (  36 => 7,  31 => 5,  25 => 1,);
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
