<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5db3997e6e1463468af557752d28b2c93243632cce9f6833f5998826be66157d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_094a8d794e866ede5a2fedae405b58c0e872f83a8b0ad6f2cfe00194fe122d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_094a8d794e866ede5a2fedae405b58c0e872f83a8b0ad6f2cfe00194fe122d48->enter($__internal_094a8d794e866ede5a2fedae405b58c0e872f83a8b0ad6f2cfe00194fe122d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_624fc813205c5177f0059aa3bb3c5efec2b67922ccb1f02678ddb70863c6765e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624fc813205c5177f0059aa3bb3c5efec2b67922ccb1f02678ddb70863c6765e->enter($__internal_624fc813205c5177f0059aa3bb3c5efec2b67922ccb1f02678ddb70863c6765e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_094a8d794e866ede5a2fedae405b58c0e872f83a8b0ad6f2cfe00194fe122d48->leave($__internal_094a8d794e866ede5a2fedae405b58c0e872f83a8b0ad6f2cfe00194fe122d48_prof);

        
        $__internal_624fc813205c5177f0059aa3bb3c5efec2b67922ccb1f02678ddb70863c6765e->leave($__internal_624fc813205c5177f0059aa3bb3c5efec2b67922ccb1f02678ddb70863c6765e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_08372cafd33f253d73813918fa430c2e8c39e59013cc7f8e60f02e2883a525f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08372cafd33f253d73813918fa430c2e8c39e59013cc7f8e60f02e2883a525f3->enter($__internal_08372cafd33f253d73813918fa430c2e8c39e59013cc7f8e60f02e2883a525f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3620415f5aa98f06faca022f516180124ffa0ecd737c7b7679422fe3303a033 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3620415f5aa98f06faca022f516180124ffa0ecd737c7b7679422fe3303a033->enter($__internal_c3620415f5aa98f06faca022f516180124ffa0ecd737c7b7679422fe3303a033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c3620415f5aa98f06faca022f516180124ffa0ecd737c7b7679422fe3303a033->leave($__internal_c3620415f5aa98f06faca022f516180124ffa0ecd737c7b7679422fe3303a033_prof);

        
        $__internal_08372cafd33f253d73813918fa430c2e8c39e59013cc7f8e60f02e2883a525f3->leave($__internal_08372cafd33f253d73813918fa430c2e8c39e59013cc7f8e60f02e2883a525f3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_addf2f28a3bc2bb16c18ac89c78d947c4ad71fae98c198d0c5da7ac4a5c15bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_addf2f28a3bc2bb16c18ac89c78d947c4ad71fae98c198d0c5da7ac4a5c15bd2->enter($__internal_addf2f28a3bc2bb16c18ac89c78d947c4ad71fae98c198d0c5da7ac4a5c15bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3545334928a778b6e5dd46d0c09989b7d52d41cc7a5de52c61f5317cae8a1541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3545334928a778b6e5dd46d0c09989b7d52d41cc7a5de52c61f5317cae8a1541->enter($__internal_3545334928a778b6e5dd46d0c09989b7d52d41cc7a5de52c61f5317cae8a1541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_3545334928a778b6e5dd46d0c09989b7d52d41cc7a5de52c61f5317cae8a1541->leave($__internal_3545334928a778b6e5dd46d0c09989b7d52d41cc7a5de52c61f5317cae8a1541_prof);

        
        $__internal_addf2f28a3bc2bb16c18ac89c78d947c4ad71fae98c198d0c5da7ac4a5c15bd2->leave($__internal_addf2f28a3bc2bb16c18ac89c78d947c4ad71fae98c198d0c5da7ac4a5c15bd2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
