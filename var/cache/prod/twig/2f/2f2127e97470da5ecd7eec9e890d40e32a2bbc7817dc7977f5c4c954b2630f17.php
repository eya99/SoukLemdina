<?php

/* StockBundle::layout.html.twig */
class __TwigTemplate_81e26b5391c5d74b1a068bbee7fdc9acadaf71a200afe97e65b81595b19576c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "StockBundle::layout.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab3d7f85a12c0b541b70c3724be5c7cffbab20a66b62e8326c30849018d1dfad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3d7f85a12c0b541b70c3724be5c7cffbab20a66b62e8326c30849018d1dfad->enter($__internal_ab3d7f85a12c0b541b70c3724be5c7cffbab20a66b62e8326c30849018d1dfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab3d7f85a12c0b541b70c3724be5c7cffbab20a66b62e8326c30849018d1dfad->leave($__internal_ab3d7f85a12c0b541b70c3724be5c7cffbab20a66b62e8326c30849018d1dfad_prof);

    }

    public function getTemplateName()
    {
        return "StockBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SUserBundle::layout.html.twig\" %}", "StockBundle::layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/StockBundle/Resources/views/layout.html.twig");
    }
}
