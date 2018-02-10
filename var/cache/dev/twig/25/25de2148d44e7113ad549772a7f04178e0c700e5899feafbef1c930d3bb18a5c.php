<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_04f387cf3dcbebb424beca1bc37c3428ed98dc462a734be5ba3df092f29c6544 extends Twig_Template
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
        $__internal_7f2a8597934e0402b32ffc50868abfdaa0752db3b2af7e383f1378f7c8865d2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f2a8597934e0402b32ffc50868abfdaa0752db3b2af7e383f1378f7c8865d2e->enter($__internal_7f2a8597934e0402b32ffc50868abfdaa0752db3b2af7e383f1378f7c8865d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_b1f930f602322c44c8b9816c219139c56b0306b9dc7b2bd811a9b7f346b5f004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1f930f602322c44c8b9816c219139c56b0306b9dc7b2bd811a9b7f346b5f004->enter($__internal_b1f930f602322c44c8b9816c219139c56b0306b9dc7b2bd811a9b7f346b5f004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_7f2a8597934e0402b32ffc50868abfdaa0752db3b2af7e383f1378f7c8865d2e->leave($__internal_7f2a8597934e0402b32ffc50868abfdaa0752db3b2af7e383f1378f7c8865d2e_prof);

        
        $__internal_b1f930f602322c44c8b9816c219139c56b0306b9dc7b2bd811a9b7f346b5f004->leave($__internal_b1f930f602322c44c8b9816c219139c56b0306b9dc7b2bd811a9b7f346b5f004_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
