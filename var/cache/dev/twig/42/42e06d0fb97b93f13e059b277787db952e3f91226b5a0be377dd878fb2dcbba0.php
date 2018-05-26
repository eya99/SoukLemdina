<?php

/* StockBundle::layout.html.twig */
class __TwigTemplate_4eb0b4614082f4bae4e8dc3b71931241642852148d64204ec82655ebb6a63389 extends Twig_Template
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
        $__internal_9f5d58ae002e02c16ef9bce01d132f7ff4ed2d0801fc20b9fa231fa3e15a1317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5d58ae002e02c16ef9bce01d132f7ff4ed2d0801fc20b9fa231fa3e15a1317->enter($__internal_9f5d58ae002e02c16ef9bce01d132f7ff4ed2d0801fc20b9fa231fa3e15a1317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::layout.html.twig"));

        $__internal_752e62df9a15b146247c15e822b7c08f14bf63e5c24d4c888b06cd2f9fc8b278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752e62df9a15b146247c15e822b7c08f14bf63e5c24d4c888b06cd2f9fc8b278->enter($__internal_752e62df9a15b146247c15e822b7c08f14bf63e5c24d4c888b06cd2f9fc8b278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StockBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5d58ae002e02c16ef9bce01d132f7ff4ed2d0801fc20b9fa231fa3e15a1317->leave($__internal_9f5d58ae002e02c16ef9bce01d132f7ff4ed2d0801fc20b9fa231fa3e15a1317_prof);

        
        $__internal_752e62df9a15b146247c15e822b7c08f14bf63e5c24d4c888b06cd2f9fc8b278->leave($__internal_752e62df9a15b146247c15e822b7c08f14bf63e5c24d4c888b06cd2f9fc8b278_prof);

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
