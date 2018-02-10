<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_64466c9d8ab246c8e95abb8e009ea94da2f8931228246be834c161ca9b1b437f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b78f0697f102df757f49b0e819f1530f5dfe4a4b127bc94dd9e1fac8496d75bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78f0697f102df757f49b0e819f1530f5dfe4a4b127bc94dd9e1fac8496d75bc->enter($__internal_b78f0697f102df757f49b0e819f1530f5dfe4a4b127bc94dd9e1fac8496d75bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6fd3a1f576141be1bd02f3ba1552fad7d95ba63fa7d89535ed33147f71a4f51e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd3a1f576141be1bd02f3ba1552fad7d95ba63fa7d89535ed33147f71a4f51e->enter($__internal_6fd3a1f576141be1bd02f3ba1552fad7d95ba63fa7d89535ed33147f71a4f51e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b78f0697f102df757f49b0e819f1530f5dfe4a4b127bc94dd9e1fac8496d75bc->leave($__internal_b78f0697f102df757f49b0e819f1530f5dfe4a4b127bc94dd9e1fac8496d75bc_prof);

        
        $__internal_6fd3a1f576141be1bd02f3ba1552fad7d95ba63fa7d89535ed33147f71a4f51e->leave($__internal_6fd3a1f576141be1bd02f3ba1552fad7d95ba63fa7d89535ed33147f71a4f51e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a98a0de3b975bc51b31445505aaf58f2b097eac037cadd9f771560b0a6ed5523 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a98a0de3b975bc51b31445505aaf58f2b097eac037cadd9f771560b0a6ed5523->enter($__internal_a98a0de3b975bc51b31445505aaf58f2b097eac037cadd9f771560b0a6ed5523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_574e56462d096fe2fc11cf9ea08fe454476721be65baedafed6afc127fdc84f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_574e56462d096fe2fc11cf9ea08fe454476721be65baedafed6afc127fdc84f9->enter($__internal_574e56462d096fe2fc11cf9ea08fe454476721be65baedafed6afc127fdc84f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_574e56462d096fe2fc11cf9ea08fe454476721be65baedafed6afc127fdc84f9->leave($__internal_574e56462d096fe2fc11cf9ea08fe454476721be65baedafed6afc127fdc84f9_prof);

        
        $__internal_a98a0de3b975bc51b31445505aaf58f2b097eac037cadd9f771560b0a6ed5523->leave($__internal_a98a0de3b975bc51b31445505aaf58f2b097eac037cadd9f771560b0a6ed5523_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
