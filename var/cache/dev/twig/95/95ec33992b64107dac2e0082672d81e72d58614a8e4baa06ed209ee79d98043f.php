<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_6ccacd2fbd5425f25db915cc09e7d7560501a3b2473f2a3785d1dfaf48c59d68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1bea926d6120ac8c3aea66b0e404dcd6e0c62ee9a72b7d8f6baca3bd3ab5a68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1bea926d6120ac8c3aea66b0e404dcd6e0c62ee9a72b7d8f6baca3bd3ab5a68->enter($__internal_a1bea926d6120ac8c3aea66b0e404dcd6e0c62ee9a72b7d8f6baca3bd3ab5a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8fd53fd7595f1dcc1eac8039610bee14e34b0433da8619ea7f3a0bd2c6a9f39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd53fd7595f1dcc1eac8039610bee14e34b0433da8619ea7f3a0bd2c6a9f39a->enter($__internal_8fd53fd7595f1dcc1eac8039610bee14e34b0433da8619ea7f3a0bd2c6a9f39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1bea926d6120ac8c3aea66b0e404dcd6e0c62ee9a72b7d8f6baca3bd3ab5a68->leave($__internal_a1bea926d6120ac8c3aea66b0e404dcd6e0c62ee9a72b7d8f6baca3bd3ab5a68_prof);

        
        $__internal_8fd53fd7595f1dcc1eac8039610bee14e34b0433da8619ea7f3a0bd2c6a9f39a->leave($__internal_8fd53fd7595f1dcc1eac8039610bee14e34b0433da8619ea7f3a0bd2c6a9f39a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_10b6d6da1ab3371699f1093557f5630c82e31bbbf5a0b42cf3fd8dc76becfca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10b6d6da1ab3371699f1093557f5630c82e31bbbf5a0b42cf3fd8dc76becfca0->enter($__internal_10b6d6da1ab3371699f1093557f5630c82e31bbbf5a0b42cf3fd8dc76becfca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1fc18a528f7dfe0eec1831747354d7333e1349dfc073b347b0b24c4ccb359adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fc18a528f7dfe0eec1831747354d7333e1349dfc073b347b0b24c4ccb359adb->enter($__internal_1fc18a528f7dfe0eec1831747354d7333e1349dfc073b347b0b24c4ccb359adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1fc18a528f7dfe0eec1831747354d7333e1349dfc073b347b0b24c4ccb359adb->leave($__internal_1fc18a528f7dfe0eec1831747354d7333e1349dfc073b347b0b24c4ccb359adb_prof);

        
        $__internal_10b6d6da1ab3371699f1093557f5630c82e31bbbf5a0b42cf3fd8dc76becfca0->leave($__internal_10b6d6da1ab3371699f1093557f5630c82e31bbbf5a0b42cf3fd8dc76becfca0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_659fb9dbe6829ce5587e291b89084b475ac02de1ed36e72a5b6f00dc7625c8a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_659fb9dbe6829ce5587e291b89084b475ac02de1ed36e72a5b6f00dc7625c8a3->enter($__internal_659fb9dbe6829ce5587e291b89084b475ac02de1ed36e72a5b6f00dc7625c8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f69f88faf977826113f6a839057455774efb34898fe969d8fed3a59e0954932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f69f88faf977826113f6a839057455774efb34898fe969d8fed3a59e0954932->enter($__internal_7f69f88faf977826113f6a839057455774efb34898fe969d8fed3a59e0954932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_7f69f88faf977826113f6a839057455774efb34898fe969d8fed3a59e0954932->leave($__internal_7f69f88faf977826113f6a839057455774efb34898fe969d8fed3a59e0954932_prof);

        
        $__internal_659fb9dbe6829ce5587e291b89084b475ac02de1ed36e72a5b6f00dc7625c8a3->leave($__internal_659fb9dbe6829ce5587e291b89084b475ac02de1ed36e72a5b6f00dc7625c8a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
