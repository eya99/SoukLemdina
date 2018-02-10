<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9b47d939361a5630786fe82794605660882c8e779b9d5027f07020090148c4d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd2c8c856a4dfd6123f27a6c9d457b79bec94ecd80090b7972059ad7bd6ae7a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2c8c856a4dfd6123f27a6c9d457b79bec94ecd80090b7972059ad7bd6ae7a5->enter($__internal_bd2c8c856a4dfd6123f27a6c9d457b79bec94ecd80090b7972059ad7bd6ae7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_12858745e1d240fda56536a85a20122a9a8ba71951b6c31d00e096fd74a8226e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12858745e1d240fda56536a85a20122a9a8ba71951b6c31d00e096fd74a8226e->enter($__internal_12858745e1d240fda56536a85a20122a9a8ba71951b6c31d00e096fd74a8226e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bd2c8c856a4dfd6123f27a6c9d457b79bec94ecd80090b7972059ad7bd6ae7a5->leave($__internal_bd2c8c856a4dfd6123f27a6c9d457b79bec94ecd80090b7972059ad7bd6ae7a5_prof);

        
        $__internal_12858745e1d240fda56536a85a20122a9a8ba71951b6c31d00e096fd74a8226e->leave($__internal_12858745e1d240fda56536a85a20122a9a8ba71951b6c31d00e096fd74a8226e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0651985a7362093683f41d0a6197061951c0f8234b08b643c487cfcb36b86b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0651985a7362093683f41d0a6197061951c0f8234b08b643c487cfcb36b86b68->enter($__internal_0651985a7362093683f41d0a6197061951c0f8234b08b643c487cfcb36b86b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4b2a48ea88502a109c9a32816c91a08a0e3a97245c619c67611f8be91710e621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b2a48ea88502a109c9a32816c91a08a0e3a97245c619c67611f8be91710e621->enter($__internal_4b2a48ea88502a109c9a32816c91a08a0e3a97245c619c67611f8be91710e621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b2a48ea88502a109c9a32816c91a08a0e3a97245c619c67611f8be91710e621->leave($__internal_4b2a48ea88502a109c9a32816c91a08a0e3a97245c619c67611f8be91710e621_prof);

        
        $__internal_0651985a7362093683f41d0a6197061951c0f8234b08b643c487cfcb36b86b68->leave($__internal_0651985a7362093683f41d0a6197061951c0f8234b08b643c487cfcb36b86b68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
