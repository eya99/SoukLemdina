<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8a5bcd21c561efc20f770312b0fbe1312ee1b53b7ae7584a22d348c3a788dbbd extends Twig_Template
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
        $__internal_af9171b47c819f6204d565351ba6387381779b7a957610d27b921671e4adeed3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af9171b47c819f6204d565351ba6387381779b7a957610d27b921671e4adeed3->enter($__internal_af9171b47c819f6204d565351ba6387381779b7a957610d27b921671e4adeed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_44a789299555b6f8be5c54cf2b6bdd911c88c8e9b05891d0db31f4c2acc25184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a789299555b6f8be5c54cf2b6bdd911c88c8e9b05891d0db31f4c2acc25184->enter($__internal_44a789299555b6f8be5c54cf2b6bdd911c88c8e9b05891d0db31f4c2acc25184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af9171b47c819f6204d565351ba6387381779b7a957610d27b921671e4adeed3->leave($__internal_af9171b47c819f6204d565351ba6387381779b7a957610d27b921671e4adeed3_prof);

        
        $__internal_44a789299555b6f8be5c54cf2b6bdd911c88c8e9b05891d0db31f4c2acc25184->leave($__internal_44a789299555b6f8be5c54cf2b6bdd911c88c8e9b05891d0db31f4c2acc25184_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_2e3672db3565d6f1241938129c973a968fbabda13765ea1606e349f2144911a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3672db3565d6f1241938129c973a968fbabda13765ea1606e349f2144911a5->enter($__internal_2e3672db3565d6f1241938129c973a968fbabda13765ea1606e349f2144911a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_42d12cd2163435b8e8dddc7532dc4fdfadcbc561785a29deed0684ab7bbd262a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d12cd2163435b8e8dddc7532dc4fdfadcbc561785a29deed0684ab7bbd262a->enter($__internal_42d12cd2163435b8e8dddc7532dc4fdfadcbc561785a29deed0684ab7bbd262a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_42d12cd2163435b8e8dddc7532dc4fdfadcbc561785a29deed0684ab7bbd262a->leave($__internal_42d12cd2163435b8e8dddc7532dc4fdfadcbc561785a29deed0684ab7bbd262a_prof);

        
        $__internal_2e3672db3565d6f1241938129c973a968fbabda13765ea1606e349f2144911a5->leave($__internal_2e3672db3565d6f1241938129c973a968fbabda13765ea1606e349f2144911a5_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99abfe7c290f68a188705602a67f312470fb12da4e165be6aedde3c250594aec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99abfe7c290f68a188705602a67f312470fb12da4e165be6aedde3c250594aec->enter($__internal_99abfe7c290f68a188705602a67f312470fb12da4e165be6aedde3c250594aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8f7022c7650a23cecbf248e3b246d9a09962770ff80697c5eafcce7b23ab9486 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f7022c7650a23cecbf248e3b246d9a09962770ff80697c5eafcce7b23ab9486->enter($__internal_8f7022c7650a23cecbf248e3b246d9a09962770ff80697c5eafcce7b23ab9486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8f7022c7650a23cecbf248e3b246d9a09962770ff80697c5eafcce7b23ab9486->leave($__internal_8f7022c7650a23cecbf248e3b246d9a09962770ff80697c5eafcce7b23ab9486_prof);

        
        $__internal_99abfe7c290f68a188705602a67f312470fb12da4e165be6aedde3c250594aec->leave($__internal_99abfe7c290f68a188705602a67f312470fb12da4e165be6aedde3c250594aec_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
