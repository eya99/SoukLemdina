<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_0f466e54338706954ab69bf281d2f631a0e488ad1a148a7d9da3b22aba1dfadf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_3d57840bfdcda74521e4abd43a5a5a98b4c0bd48756378376f271f3919a2838a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d57840bfdcda74521e4abd43a5a5a98b4c0bd48756378376f271f3919a2838a->enter($__internal_3d57840bfdcda74521e4abd43a5a5a98b4c0bd48756378376f271f3919a2838a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_b72e2f9222cd9c6d56fcfe3dca0964ae6cb64da901679394f8c8d849f367bdcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b72e2f9222cd9c6d56fcfe3dca0964ae6cb64da901679394f8c8d849f367bdcf->enter($__internal_b72e2f9222cd9c6d56fcfe3dca0964ae6cb64da901679394f8c8d849f367bdcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d57840bfdcda74521e4abd43a5a5a98b4c0bd48756378376f271f3919a2838a->leave($__internal_3d57840bfdcda74521e4abd43a5a5a98b4c0bd48756378376f271f3919a2838a_prof);

        
        $__internal_b72e2f9222cd9c6d56fcfe3dca0964ae6cb64da901679394f8c8d849f367bdcf->leave($__internal_b72e2f9222cd9c6d56fcfe3dca0964ae6cb64da901679394f8c8d849f367bdcf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1786ea286b6b023b3163dfa579392838a11ac9fb93632b82204db75a5d9adf1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1786ea286b6b023b3163dfa579392838a11ac9fb93632b82204db75a5d9adf1e->enter($__internal_1786ea286b6b023b3163dfa579392838a11ac9fb93632b82204db75a5d9adf1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_62e6d4b86b4df061c5824c1b49a8d8f9120b1828612441636f63569cb1a8bc21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e6d4b86b4df061c5824c1b49a8d8f9120b1828612441636f63569cb1a8bc21->enter($__internal_62e6d4b86b4df061c5824c1b49a8d8f9120b1828612441636f63569cb1a8bc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_62e6d4b86b4df061c5824c1b49a8d8f9120b1828612441636f63569cb1a8bc21->leave($__internal_62e6d4b86b4df061c5824c1b49a8d8f9120b1828612441636f63569cb1a8bc21_prof);

        
        $__internal_1786ea286b6b023b3163dfa579392838a11ac9fb93632b82204db75a5d9adf1e->leave($__internal_1786ea286b6b023b3163dfa579392838a11ac9fb93632b82204db75a5d9adf1e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f209dd8097d554742202561120a2870cc1f1801ccc4bf08e3fcbd947d9d07f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f209dd8097d554742202561120a2870cc1f1801ccc4bf08e3fcbd947d9d07f8->enter($__internal_0f209dd8097d554742202561120a2870cc1f1801ccc4bf08e3fcbd947d9d07f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd18b45b7c598e66fa6e7543e97b03843fa61d9c7ae7448836026d4d0bf66041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd18b45b7c598e66fa6e7543e97b03843fa61d9c7ae7448836026d4d0bf66041->enter($__internal_fd18b45b7c598e66fa6e7543e97b03843fa61d9c7ae7448836026d4d0bf66041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fd18b45b7c598e66fa6e7543e97b03843fa61d9c7ae7448836026d4d0bf66041->leave($__internal_fd18b45b7c598e66fa6e7543e97b03843fa61d9c7ae7448836026d4d0bf66041_prof);

        
        $__internal_0f209dd8097d554742202561120a2870cc1f1801ccc4bf08e3fcbd947d9d07f8->leave($__internal_0f209dd8097d554742202561120a2870cc1f1801ccc4bf08e3fcbd947d9d07f8_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
