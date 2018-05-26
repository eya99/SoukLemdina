<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_557dd931d8e2acbab7cd5a8dc949a14249a478818c5c69395f01cb648f3335a3 extends Twig_Template
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
        $__internal_5091e283371c9a7c72de4c4b901f0370caf7043c59c0750c6a193b722c28b5e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5091e283371c9a7c72de4c4b901f0370caf7043c59c0750c6a193b722c28b5e9->enter($__internal_5091e283371c9a7c72de4c4b901f0370caf7043c59c0750c6a193b722c28b5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_c009b390fea33f657a22eab21a456231523938241816ee5bdda09c12cd939f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c009b390fea33f657a22eab21a456231523938241816ee5bdda09c12cd939f99->enter($__internal_c009b390fea33f657a22eab21a456231523938241816ee5bdda09c12cd939f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5091e283371c9a7c72de4c4b901f0370caf7043c59c0750c6a193b722c28b5e9->leave($__internal_5091e283371c9a7c72de4c4b901f0370caf7043c59c0750c6a193b722c28b5e9_prof);

        
        $__internal_c009b390fea33f657a22eab21a456231523938241816ee5bdda09c12cd939f99->leave($__internal_c009b390fea33f657a22eab21a456231523938241816ee5bdda09c12cd939f99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24fae2b271e1db2746e1f6805c6cffc8a7c446b21f842ab8533ed2c7a662c142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24fae2b271e1db2746e1f6805c6cffc8a7c446b21f842ab8533ed2c7a662c142->enter($__internal_24fae2b271e1db2746e1f6805c6cffc8a7c446b21f842ab8533ed2c7a662c142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_16705ada723097fd217ddd61630f5ca643bab479ba91c99629943fdfc091d153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16705ada723097fd217ddd61630f5ca643bab479ba91c99629943fdfc091d153->enter($__internal_16705ada723097fd217ddd61630f5ca643bab479ba91c99629943fdfc091d153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_16705ada723097fd217ddd61630f5ca643bab479ba91c99629943fdfc091d153->leave($__internal_16705ada723097fd217ddd61630f5ca643bab479ba91c99629943fdfc091d153_prof);

        
        $__internal_24fae2b271e1db2746e1f6805c6cffc8a7c446b21f842ab8533ed2c7a662c142->leave($__internal_24fae2b271e1db2746e1f6805c6cffc8a7c446b21f842ab8533ed2c7a662c142_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/opt/lampp/htdocs/SoukLemdina/src/SUserBundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
