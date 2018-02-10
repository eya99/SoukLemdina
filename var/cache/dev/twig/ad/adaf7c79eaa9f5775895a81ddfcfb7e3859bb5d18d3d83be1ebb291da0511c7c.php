<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_49b152077208b516ce6b61bce30cf8511705af64acae134294b8294aa2515afc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99c9694327034c73a2e75aa9b2b29b8e115c00d759f43739ff8671713ac8c525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99c9694327034c73a2e75aa9b2b29b8e115c00d759f43739ff8671713ac8c525->enter($__internal_99c9694327034c73a2e75aa9b2b29b8e115c00d759f43739ff8671713ac8c525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_52b32ae80b090061e7176fa783b6eff800d8462115bf0e4a5ee72df45b2ac878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52b32ae80b090061e7176fa783b6eff800d8462115bf0e4a5ee72df45b2ac878->enter($__internal_52b32ae80b090061e7176fa783b6eff800d8462115bf0e4a5ee72df45b2ac878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99c9694327034c73a2e75aa9b2b29b8e115c00d759f43739ff8671713ac8c525->leave($__internal_99c9694327034c73a2e75aa9b2b29b8e115c00d759f43739ff8671713ac8c525_prof);

        
        $__internal_52b32ae80b090061e7176fa783b6eff800d8462115bf0e4a5ee72df45b2ac878->leave($__internal_52b32ae80b090061e7176fa783b6eff800d8462115bf0e4a5ee72df45b2ac878_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_27e2d3f3b4aa269c84e1078a6e708451f7f1899dc116e0fa8ecaf1088a826c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e2d3f3b4aa269c84e1078a6e708451f7f1899dc116e0fa8ecaf1088a826c2c->enter($__internal_27e2d3f3b4aa269c84e1078a6e708451f7f1899dc116e0fa8ecaf1088a826c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cf737abeda12831c7016b84e009aabf9b046d5a8cdca674f6499511dab1047a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf737abeda12831c7016b84e009aabf9b046d5a8cdca674f6499511dab1047a7->enter($__internal_cf737abeda12831c7016b84e009aabf9b046d5a8cdca674f6499511dab1047a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_cf737abeda12831c7016b84e009aabf9b046d5a8cdca674f6499511dab1047a7->leave($__internal_cf737abeda12831c7016b84e009aabf9b046d5a8cdca674f6499511dab1047a7_prof);

        
        $__internal_27e2d3f3b4aa269c84e1078a6e708451f7f1899dc116e0fa8ecaf1088a826c2c->leave($__internal_27e2d3f3b4aa269c84e1078a6e708451f7f1899dc116e0fa8ecaf1088a826c2c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2782f9f77a28676c7049ce78fd49a4bf9a711c58884b032b64623aa578c8a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2782f9f77a28676c7049ce78fd49a4bf9a711c58884b032b64623aa578c8a74->enter($__internal_a2782f9f77a28676c7049ce78fd49a4bf9a711c58884b032b64623aa578c8a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e42a97cdc01b16d631c2587052c0a982be8301ffea7e45743baed34c5fcc6a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e42a97cdc01b16d631c2587052c0a982be8301ffea7e45743baed34c5fcc6a3->enter($__internal_5e42a97cdc01b16d631c2587052c0a982be8301ffea7e45743baed34c5fcc6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5e42a97cdc01b16d631c2587052c0a982be8301ffea7e45743baed34c5fcc6a3->leave($__internal_5e42a97cdc01b16d631c2587052c0a982be8301ffea7e45743baed34c5fcc6a3_prof);

        
        $__internal_a2782f9f77a28676c7049ce78fd49a4bf9a711c58884b032b64623aa578c8a74->leave($__internal_a2782f9f77a28676c7049ce78fd49a4bf9a711c58884b032b64623aa578c8a74_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
