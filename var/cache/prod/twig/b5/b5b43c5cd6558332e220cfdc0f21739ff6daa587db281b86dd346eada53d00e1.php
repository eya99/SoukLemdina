<?php

/* StockBundle::layout.html.twig */
class __TwigTemplate_73f21e17a89137ddc39ffc6ab0493bb80f897e8a2d862d46252c5ed662496fef extends Twig_Template
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
        $__internal_7b59637a492ef07d66ac93f19be75a8e8b38a6928c98afd8ead259e89234abc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b59637a492ef07d66ac93f19be75a8e8b38a6928c98afd8ead259e89234abc9->enter($__internal_7b59637a492ef07d66ac93f19be75a8e8b38a6928c98afd8ead259e89234abc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b59637a492ef07d66ac93f19be75a8e8b38a6928c98afd8ead259e89234abc9->leave($__internal_7b59637a492ef07d66ac93f19be75a8e8b38a6928c98afd8ead259e89234abc9_prof);

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
