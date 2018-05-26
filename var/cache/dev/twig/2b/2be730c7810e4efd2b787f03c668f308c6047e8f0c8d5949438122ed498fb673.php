<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_f5a905dc894baa69a3efaebbbf373c75ba1d395bcec1b41c183ce3f1613bf706 extends Twig_Template
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
        $__internal_6882e682b964de293974dc9aea86591b8839c47384930aad4bef1d70a4a24200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6882e682b964de293974dc9aea86591b8839c47384930aad4bef1d70a4a24200->enter($__internal_6882e682b964de293974dc9aea86591b8839c47384930aad4bef1d70a4a24200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_61e0cca5bf27226888b24fe805067811f571d6de8e411d8fc614476aa806c659 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61e0cca5bf27226888b24fe805067811f571d6de8e411d8fc614476aa806c659->enter($__internal_61e0cca5bf27226888b24fe805067811f571d6de8e411d8fc614476aa806c659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6882e682b964de293974dc9aea86591b8839c47384930aad4bef1d70a4a24200->leave($__internal_6882e682b964de293974dc9aea86591b8839c47384930aad4bef1d70a4a24200_prof);

        
        $__internal_61e0cca5bf27226888b24fe805067811f571d6de8e411d8fc614476aa806c659->leave($__internal_61e0cca5bf27226888b24fe805067811f571d6de8e411d8fc614476aa806c659_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4456230b675c2c080f01b8c12cb245e888d026ac8a969d27a0af54e643c02f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4456230b675c2c080f01b8c12cb245e888d026ac8a969d27a0af54e643c02f35->enter($__internal_4456230b675c2c080f01b8c12cb245e888d026ac8a969d27a0af54e643c02f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_66431949307aca6eb2312afdab05cb54670d7751e5e34728205150be91796585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66431949307aca6eb2312afdab05cb54670d7751e5e34728205150be91796585->enter($__internal_66431949307aca6eb2312afdab05cb54670d7751e5e34728205150be91796585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_66431949307aca6eb2312afdab05cb54670d7751e5e34728205150be91796585->leave($__internal_66431949307aca6eb2312afdab05cb54670d7751e5e34728205150be91796585_prof);

        
        $__internal_4456230b675c2c080f01b8c12cb245e888d026ac8a969d27a0af54e643c02f35->leave($__internal_4456230b675c2c080f01b8c12cb245e888d026ac8a969d27a0af54e643c02f35_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
