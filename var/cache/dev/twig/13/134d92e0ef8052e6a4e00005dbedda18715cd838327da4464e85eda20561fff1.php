<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_2a308bf5c7ef6b76e7635dc34be67136a3a45492e5d2e6b9a50359e93e7d5480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_768775bf5a522072db7d39e360bd3c05d32e97a87767586fcc673838271b615f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_768775bf5a522072db7d39e360bd3c05d32e97a87767586fcc673838271b615f->enter($__internal_768775bf5a522072db7d39e360bd3c05d32e97a87767586fcc673838271b615f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_3e4b3e86e4ca07a755a11aec94296d58d81489a1ae2b05f281e3da751580c63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4b3e86e4ca07a755a11aec94296d58d81489a1ae2b05f281e3da751580c63b->enter($__internal_3e4b3e86e4ca07a755a11aec94296d58d81489a1ae2b05f281e3da751580c63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_768775bf5a522072db7d39e360bd3c05d32e97a87767586fcc673838271b615f->leave($__internal_768775bf5a522072db7d39e360bd3c05d32e97a87767586fcc673838271b615f_prof);

        
        $__internal_3e4b3e86e4ca07a755a11aec94296d58d81489a1ae2b05f281e3da751580c63b->leave($__internal_3e4b3e86e4ca07a755a11aec94296d58d81489a1ae2b05f281e3da751580c63b_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_176d5b7e12bb7a4a647df165fdeffc69f825766766946e3009293be073a827c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_176d5b7e12bb7a4a647df165fdeffc69f825766766946e3009293be073a827c4->enter($__internal_176d5b7e12bb7a4a647df165fdeffc69f825766766946e3009293be073a827c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_78cc5e8c8eeeee58713e799b202fe857aa9603f8efd60dff8bb8703c169cf379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cc5e8c8eeeee58713e799b202fe857aa9603f8efd60dff8bb8703c169cf379->enter($__internal_78cc5e8c8eeeee58713e799b202fe857aa9603f8efd60dff8bb8703c169cf379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_78cc5e8c8eeeee58713e799b202fe857aa9603f8efd60dff8bb8703c169cf379->leave($__internal_78cc5e8c8eeeee58713e799b202fe857aa9603f8efd60dff8bb8703c169cf379_prof);

        
        $__internal_176d5b7e12bb7a4a647df165fdeffc69f825766766946e3009293be073a827c4->leave($__internal_176d5b7e12bb7a4a647df165fdeffc69f825766766946e3009293be073a827c4_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec857d06e754a1f7b6b9dbe8b644fc7b33cadfd64c72fa233a7f54208ddd75dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec857d06e754a1f7b6b9dbe8b644fc7b33cadfd64c72fa233a7f54208ddd75dc->enter($__internal_ec857d06e754a1f7b6b9dbe8b644fc7b33cadfd64c72fa233a7f54208ddd75dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bdfcf492e06753f09daf1d2eef5220e9a044cf30b093bf2d1d12569a0b714bc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdfcf492e06753f09daf1d2eef5220e9a044cf30b093bf2d1d12569a0b714bc3->enter($__internal_bdfcf492e06753f09daf1d2eef5220e9a044cf30b093bf2d1d12569a0b714bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_bdfcf492e06753f09daf1d2eef5220e9a044cf30b093bf2d1d12569a0b714bc3->leave($__internal_bdfcf492e06753f09daf1d2eef5220e9a044cf30b093bf2d1d12569a0b714bc3_prof);

        
        $__internal_ec857d06e754a1f7b6b9dbe8b644fc7b33cadfd64c72fa233a7f54208ddd75dc->leave($__internal_ec857d06e754a1f7b6b9dbe8b644fc7b33cadfd64c72fa233a7f54208ddd75dc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
