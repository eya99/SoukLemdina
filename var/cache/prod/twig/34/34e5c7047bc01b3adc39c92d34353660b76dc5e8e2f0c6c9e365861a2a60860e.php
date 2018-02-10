<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_60f5e664be6edde9131910335ffe6ca2b4792846961b33f57d1c724449cc4f37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_3c0893724c58452afbf1af960669e471570109a72e836e51c55e4744ce7c5378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0893724c58452afbf1af960669e471570109a72e836e51c55e4744ce7c5378->enter($__internal_3c0893724c58452afbf1af960669e471570109a72e836e51c55e4744ce7c5378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c0893724c58452afbf1af960669e471570109a72e836e51c55e4744ce7c5378->leave($__internal_3c0893724c58452afbf1af960669e471570109a72e836e51c55e4744ce7c5378_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3b261799a77440da0b2ac7ec8ba987646023fb3265dc9a57a287cbba754c5596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b261799a77440da0b2ac7ec8ba987646023fb3265dc9a57a287cbba754c5596->enter($__internal_3b261799a77440da0b2ac7ec8ba987646023fb3265dc9a57a287cbba754c5596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_3b261799a77440da0b2ac7ec8ba987646023fb3265dc9a57a287cbba754c5596->leave($__internal_3b261799a77440da0b2ac7ec8ba987646023fb3265dc9a57a287cbba754c5596_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
