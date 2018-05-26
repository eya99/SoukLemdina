<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_87502d3b622a9dbef0f05f996a28c7c296ccaf0331fb959188a9731184403479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f0c31044089bbe9e31c1f842c5cf07c7b50f99de4c8f561320a65658d89a87e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f0c31044089bbe9e31c1f842c5cf07c7b50f99de4c8f561320a65658d89a87e->enter($__internal_9f0c31044089bbe9e31c1f842c5cf07c7b50f99de4c8f561320a65658d89a87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_effc04e1975c5da886d427316c054992766e368c66e023968fb6fbd6739c6f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_effc04e1975c5da886d427316c054992766e368c66e023968fb6fbd6739c6f35->enter($__internal_effc04e1975c5da886d427316c054992766e368c66e023968fb6fbd6739c6f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f0c31044089bbe9e31c1f842c5cf07c7b50f99de4c8f561320a65658d89a87e->leave($__internal_9f0c31044089bbe9e31c1f842c5cf07c7b50f99de4c8f561320a65658d89a87e_prof);

        
        $__internal_effc04e1975c5da886d427316c054992766e368c66e023968fb6fbd6739c6f35->leave($__internal_effc04e1975c5da886d427316c054992766e368c66e023968fb6fbd6739c6f35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9893f2c39d5fc060e4dea43e0f2e97d887db8be71b3e8086ae460e75b5ccb8fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9893f2c39d5fc060e4dea43e0f2e97d887db8be71b3e8086ae460e75b5ccb8fe->enter($__internal_9893f2c39d5fc060e4dea43e0f2e97d887db8be71b3e8086ae460e75b5ccb8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3dd26decee78d7dda240e34e8a8920fd2d2797996b3b123d61cd9260a9c32767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dd26decee78d7dda240e34e8a8920fd2d2797996b3b123d61cd9260a9c32767->enter($__internal_3dd26decee78d7dda240e34e8a8920fd2d2797996b3b123d61cd9260a9c32767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3dd26decee78d7dda240e34e8a8920fd2d2797996b3b123d61cd9260a9c32767->leave($__internal_3dd26decee78d7dda240e34e8a8920fd2d2797996b3b123d61cd9260a9c32767_prof);

        
        $__internal_9893f2c39d5fc060e4dea43e0f2e97d887db8be71b3e8086ae460e75b5ccb8fe->leave($__internal_9893f2c39d5fc060e4dea43e0f2e97d887db8be71b3e8086ae460e75b5ccb8fe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/Profile/edit.html.twig");
    }
}
