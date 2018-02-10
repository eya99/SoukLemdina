<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_3d3ea420fdf5575c6ae73ae7a176a9a0bba43fe059950e8c22c1290e138f020c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_892f780d8d3af6e06188566608a236a404801a9c1bf4bc877c09c0351b0a79fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_892f780d8d3af6e06188566608a236a404801a9c1bf4bc877c09c0351b0a79fe->enter($__internal_892f780d8d3af6e06188566608a236a404801a9c1bf4bc877c09c0351b0a79fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_aaa21643be2eb1b3a276542b58d696d479afa4f2eeecbebb395de089e544e492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaa21643be2eb1b3a276542b58d696d479afa4f2eeecbebb395de089e544e492->enter($__internal_aaa21643be2eb1b3a276542b58d696d479afa4f2eeecbebb395de089e544e492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_892f780d8d3af6e06188566608a236a404801a9c1bf4bc877c09c0351b0a79fe->leave($__internal_892f780d8d3af6e06188566608a236a404801a9c1bf4bc877c09c0351b0a79fe_prof);

        
        $__internal_aaa21643be2eb1b3a276542b58d696d479afa4f2eeecbebb395de089e544e492->leave($__internal_aaa21643be2eb1b3a276542b58d696d479afa4f2eeecbebb395de089e544e492_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a17a1322ebcf78bd0c2c9f8933b007a069745141946de60c4cc3e649605c0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a17a1322ebcf78bd0c2c9f8933b007a069745141946de60c4cc3e649605c0f3->enter($__internal_4a17a1322ebcf78bd0c2c9f8933b007a069745141946de60c4cc3e649605c0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5fcc796fa28de651f6d8b920bc516e9b299bca28fb3db9c75a95e2b75f5b150a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fcc796fa28de651f6d8b920bc516e9b299bca28fb3db9c75a95e2b75f5b150a->enter($__internal_5fcc796fa28de651f6d8b920bc516e9b299bca28fb3db9c75a95e2b75f5b150a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_5fcc796fa28de651f6d8b920bc516e9b299bca28fb3db9c75a95e2b75f5b150a->leave($__internal_5fcc796fa28de651f6d8b920bc516e9b299bca28fb3db9c75a95e2b75f5b150a_prof);

        
        $__internal_4a17a1322ebcf78bd0c2c9f8933b007a069745141946de60c4cc3e649605c0f3->leave($__internal_4a17a1322ebcf78bd0c2c9f8933b007a069745141946de60c4cc3e649605c0f3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
