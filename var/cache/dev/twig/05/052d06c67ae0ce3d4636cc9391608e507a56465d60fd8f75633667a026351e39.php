<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_539c93c5d34c4a7e8e7399cae3478a2ce59d1b20063b41cb6d8db39368fd80e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3862ba2369aceac2ac042909e7456c7af191b90b78b184f1cabee20be6a175fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3862ba2369aceac2ac042909e7456c7af191b90b78b184f1cabee20be6a175fa->enter($__internal_3862ba2369aceac2ac042909e7456c7af191b90b78b184f1cabee20be6a175fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e3ebd5d8dff443956cb42a57496de32d34f04ff7cd77864fc138b42eafb6f614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3ebd5d8dff443956cb42a57496de32d34f04ff7cd77864fc138b42eafb6f614->enter($__internal_e3ebd5d8dff443956cb42a57496de32d34f04ff7cd77864fc138b42eafb6f614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3862ba2369aceac2ac042909e7456c7af191b90b78b184f1cabee20be6a175fa->leave($__internal_3862ba2369aceac2ac042909e7456c7af191b90b78b184f1cabee20be6a175fa_prof);

        
        $__internal_e3ebd5d8dff443956cb42a57496de32d34f04ff7cd77864fc138b42eafb6f614->leave($__internal_e3ebd5d8dff443956cb42a57496de32d34f04ff7cd77864fc138b42eafb6f614_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_acaac165eb7a31a2d9278ff54455800da9b4ae84cc4e11521c985c20673d9043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acaac165eb7a31a2d9278ff54455800da9b4ae84cc4e11521c985c20673d9043->enter($__internal_acaac165eb7a31a2d9278ff54455800da9b4ae84cc4e11521c985c20673d9043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5a8be9e12f7e097f558f145a620d2bd8179d8d4c15e3ebacd989c5bcf7ef8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5a8be9e12f7e097f558f145a620d2bd8179d8d4c15e3ebacd989c5bcf7ef8df->enter($__internal_c5a8be9e12f7e097f558f145a620d2bd8179d8d4c15e3ebacd989c5bcf7ef8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c5a8be9e12f7e097f558f145a620d2bd8179d8d4c15e3ebacd989c5bcf7ef8df->leave($__internal_c5a8be9e12f7e097f558f145a620d2bd8179d8d4c15e3ebacd989c5bcf7ef8df_prof);

        
        $__internal_acaac165eb7a31a2d9278ff54455800da9b4ae84cc4e11521c985c20673d9043->leave($__internal_acaac165eb7a31a2d9278ff54455800da9b4ae84cc4e11521c985c20673d9043_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f60c8e4dfe5c671fe78ffa151c45a3874e7ef31ba9485141653f84eb650b3167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f60c8e4dfe5c671fe78ffa151c45a3874e7ef31ba9485141653f84eb650b3167->enter($__internal_f60c8e4dfe5c671fe78ffa151c45a3874e7ef31ba9485141653f84eb650b3167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa211b2844100d3a2979a505cde70afb3375806a58b56c4e907f2281d88ae943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa211b2844100d3a2979a505cde70afb3375806a58b56c4e907f2281d88ae943->enter($__internal_fa211b2844100d3a2979a505cde70afb3375806a58b56c4e907f2281d88ae943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_fa211b2844100d3a2979a505cde70afb3375806a58b56c4e907f2281d88ae943->leave($__internal_fa211b2844100d3a2979a505cde70afb3375806a58b56c4e907f2281d88ae943_prof);

        
        $__internal_f60c8e4dfe5c671fe78ffa151c45a3874e7ef31ba9485141653f84eb650b3167->leave($__internal_f60c8e4dfe5c671fe78ffa151c45a3874e7ef31ba9485141653f84eb650b3167_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
