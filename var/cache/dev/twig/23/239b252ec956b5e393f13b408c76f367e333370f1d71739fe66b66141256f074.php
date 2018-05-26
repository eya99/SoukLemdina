<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_01b0550aad13f35c1260dcf768b08e9d06b2ca0ccb76df5116a225292e618d0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_b1a98b45cb65764651d28166f0ae21f382d68605fa69c049150dbdf79edf7265 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1a98b45cb65764651d28166f0ae21f382d68605fa69c049150dbdf79edf7265->enter($__internal_b1a98b45cb65764651d28166f0ae21f382d68605fa69c049150dbdf79edf7265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_46bab8762b3b5144fa7a6ad57344f8ac61188f2e6171cf0e9a85afd5bb10c28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bab8762b3b5144fa7a6ad57344f8ac61188f2e6171cf0e9a85afd5bb10c28d->enter($__internal_46bab8762b3b5144fa7a6ad57344f8ac61188f2e6171cf0e9a85afd5bb10c28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1a98b45cb65764651d28166f0ae21f382d68605fa69c049150dbdf79edf7265->leave($__internal_b1a98b45cb65764651d28166f0ae21f382d68605fa69c049150dbdf79edf7265_prof);

        
        $__internal_46bab8762b3b5144fa7a6ad57344f8ac61188f2e6171cf0e9a85afd5bb10c28d->leave($__internal_46bab8762b3b5144fa7a6ad57344f8ac61188f2e6171cf0e9a85afd5bb10c28d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_989ebccab56f30e841f1643d6c91666da65e1f6ace9493dce4fd45863c9b20ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989ebccab56f30e841f1643d6c91666da65e1f6ace9493dce4fd45863c9b20ca->enter($__internal_989ebccab56f30e841f1643d6c91666da65e1f6ace9493dce4fd45863c9b20ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f2c8ec316acacdbbeaf2f028eee0f28841ba37f4ed1b45279334b7614d427e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c8ec316acacdbbeaf2f028eee0f28841ba37f4ed1b45279334b7614d427e5b->enter($__internal_f2c8ec316acacdbbeaf2f028eee0f28841ba37f4ed1b45279334b7614d427e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f2c8ec316acacdbbeaf2f028eee0f28841ba37f4ed1b45279334b7614d427e5b->leave($__internal_f2c8ec316acacdbbeaf2f028eee0f28841ba37f4ed1b45279334b7614d427e5b_prof);

        
        $__internal_989ebccab56f30e841f1643d6c91666da65e1f6ace9493dce4fd45863c9b20ca->leave($__internal_989ebccab56f30e841f1643d6c91666da65e1f6ace9493dce4fd45863c9b20ca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
