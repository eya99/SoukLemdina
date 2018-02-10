<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_b9f6515aa6fad78c726647043e6b18870a55a3fd69ccb1d664a1e3dc05b74034 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_58f6eadbd4a8829af3b269f6432b4858063ddcf2a5ddedadc4272c77d0a234bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58f6eadbd4a8829af3b269f6432b4858063ddcf2a5ddedadc4272c77d0a234bf->enter($__internal_58f6eadbd4a8829af3b269f6432b4858063ddcf2a5ddedadc4272c77d0a234bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f4d9eb67c100b111925ce57d91a25b7ffebe890912ee2d26b8b678462dfaa9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d9eb67c100b111925ce57d91a25b7ffebe890912ee2d26b8b678462dfaa9f2->enter($__internal_f4d9eb67c100b111925ce57d91a25b7ffebe890912ee2d26b8b678462dfaa9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58f6eadbd4a8829af3b269f6432b4858063ddcf2a5ddedadc4272c77d0a234bf->leave($__internal_58f6eadbd4a8829af3b269f6432b4858063ddcf2a5ddedadc4272c77d0a234bf_prof);

        
        $__internal_f4d9eb67c100b111925ce57d91a25b7ffebe890912ee2d26b8b678462dfaa9f2->leave($__internal_f4d9eb67c100b111925ce57d91a25b7ffebe890912ee2d26b8b678462dfaa9f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23e18320920f7fbbb847cd9e721caecca593f18ae2edaa1f288cd0d24fe8fb12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23e18320920f7fbbb847cd9e721caecca593f18ae2edaa1f288cd0d24fe8fb12->enter($__internal_23e18320920f7fbbb847cd9e721caecca593f18ae2edaa1f288cd0d24fe8fb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a4465724aac37ab5cf31540173f7dab137f80d4cad8f3430c0b4ea55d189a2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4465724aac37ab5cf31540173f7dab137f80d4cad8f3430c0b4ea55d189a2c5->enter($__internal_a4465724aac37ab5cf31540173f7dab137f80d4cad8f3430c0b4ea55d189a2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a4465724aac37ab5cf31540173f7dab137f80d4cad8f3430c0b4ea55d189a2c5->leave($__internal_a4465724aac37ab5cf31540173f7dab137f80d4cad8f3430c0b4ea55d189a2c5_prof);

        
        $__internal_23e18320920f7fbbb847cd9e721caecca593f18ae2edaa1f288cd0d24fe8fb12->leave($__internal_23e18320920f7fbbb847cd9e721caecca593f18ae2edaa1f288cd0d24fe8fb12_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
