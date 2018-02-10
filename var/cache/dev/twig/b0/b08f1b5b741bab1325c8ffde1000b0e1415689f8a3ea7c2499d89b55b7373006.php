<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_60ac8b7ff6df7f75ffc310b14d057c3485168b3b8f24dfadbb24c9a015f6c03a extends Twig_Template
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
        $__internal_6951c7d556e2d767bc5e5841243fe4efda7f0a0a336559885749d9038cb8c0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6951c7d556e2d767bc5e5841243fe4efda7f0a0a336559885749d9038cb8c0c4->enter($__internal_6951c7d556e2d767bc5e5841243fe4efda7f0a0a336559885749d9038cb8c0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_ce8a4431c262bc544d1e793143d8e553e807963285f132ba6cf375c0b2bb5b1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8a4431c262bc544d1e793143d8e553e807963285f132ba6cf375c0b2bb5b1f->enter($__internal_ce8a4431c262bc544d1e793143d8e553e807963285f132ba6cf375c0b2bb5b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_6951c7d556e2d767bc5e5841243fe4efda7f0a0a336559885749d9038cb8c0c4->leave($__internal_6951c7d556e2d767bc5e5841243fe4efda7f0a0a336559885749d9038cb8c0c4_prof);

        
        $__internal_ce8a4431c262bc544d1e793143d8e553e807963285f132ba6cf375c0b2bb5b1f->leave($__internal_ce8a4431c262bc544d1e793143d8e553e807963285f132ba6cf375c0b2bb5b1f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
