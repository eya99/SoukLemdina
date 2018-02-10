<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3a9faa40b042510b6d8bdc1f0db95b04584d05a23b4b7d33c47707bd2474e60a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39e65d566f5fdd43abcf957dd620d2284389d5e7422c3914921344e44dc20b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39e65d566f5fdd43abcf957dd620d2284389d5e7422c3914921344e44dc20b47->enter($__internal_39e65d566f5fdd43abcf957dd620d2284389d5e7422c3914921344e44dc20b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_f657ac0c6c0ce37172d43c15827a593fa30684d647cd6f108b09327a41ae9c49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f657ac0c6c0ce37172d43c15827a593fa30684d647cd6f108b09327a41ae9c49->enter($__internal_f657ac0c6c0ce37172d43c15827a593fa30684d647cd6f108b09327a41ae9c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39e65d566f5fdd43abcf957dd620d2284389d5e7422c3914921344e44dc20b47->leave($__internal_39e65d566f5fdd43abcf957dd620d2284389d5e7422c3914921344e44dc20b47_prof);

        
        $__internal_f657ac0c6c0ce37172d43c15827a593fa30684d647cd6f108b09327a41ae9c49->leave($__internal_f657ac0c6c0ce37172d43c15827a593fa30684d647cd6f108b09327a41ae9c49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e96dfbcdbd793861cf9d9bac22687b75e30aa1422366f67b6bf109fbce942a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e96dfbcdbd793861cf9d9bac22687b75e30aa1422366f67b6bf109fbce942a7->enter($__internal_6e96dfbcdbd793861cf9d9bac22687b75e30aa1422366f67b6bf109fbce942a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ded6db7989f5230203306beb7fe88d3a0b288d96409716579f7995b32dbcd3e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ded6db7989f5230203306beb7fe88d3a0b288d96409716579f7995b32dbcd3e4->enter($__internal_ded6db7989f5230203306beb7fe88d3a0b288d96409716579f7995b32dbcd3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ded6db7989f5230203306beb7fe88d3a0b288d96409716579f7995b32dbcd3e4->leave($__internal_ded6db7989f5230203306beb7fe88d3a0b288d96409716579f7995b32dbcd3e4_prof);

        
        $__internal_6e96dfbcdbd793861cf9d9bac22687b75e30aa1422366f67b6bf109fbce942a7->leave($__internal_6e96dfbcdbd793861cf9d9bac22687b75e30aa1422366f67b6bf109fbce942a7_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a216c85bc4ce290364aff8d6718a82b8548820b818c990e5a35a974a21245806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a216c85bc4ce290364aff8d6718a82b8548820b818c990e5a35a974a21245806->enter($__internal_a216c85bc4ce290364aff8d6718a82b8548820b818c990e5a35a974a21245806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_25d497a864118dc0f2dbf108e65732231345730036df9e02bd488dc808d20bd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25d497a864118dc0f2dbf108e65732231345730036df9e02bd488dc808d20bd1->enter($__internal_25d497a864118dc0f2dbf108e65732231345730036df9e02bd488dc808d20bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_25d497a864118dc0f2dbf108e65732231345730036df9e02bd488dc808d20bd1->leave($__internal_25d497a864118dc0f2dbf108e65732231345730036df9e02bd488dc808d20bd1_prof);

        
        $__internal_a216c85bc4ce290364aff8d6718a82b8548820b818c990e5a35a974a21245806->leave($__internal_a216c85bc4ce290364aff8d6718a82b8548820b818c990e5a35a974a21245806_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a97f6a35011e13e27e0839c73a271adcd6af27fcb8a2f96c7c670507a258f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a97f6a35011e13e27e0839c73a271adcd6af27fcb8a2f96c7c670507a258f0e->enter($__internal_6a97f6a35011e13e27e0839c73a271adcd6af27fcb8a2f96c7c670507a258f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fe58dcb4cdc8bbaed08af392bad01a669958cbd7b7e082ffaabc00ebc43bdbb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe58dcb4cdc8bbaed08af392bad01a669958cbd7b7e082ffaabc00ebc43bdbb6->enter($__internal_fe58dcb4cdc8bbaed08af392bad01a669958cbd7b7e082ffaabc00ebc43bdbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_fe58dcb4cdc8bbaed08af392bad01a669958cbd7b7e082ffaabc00ebc43bdbb6->leave($__internal_fe58dcb4cdc8bbaed08af392bad01a669958cbd7b7e082ffaabc00ebc43bdbb6_prof);

        
        $__internal_6a97f6a35011e13e27e0839c73a271adcd6af27fcb8a2f96c7c670507a258f0e->leave($__internal_6a97f6a35011e13e27e0839c73a271adcd6af27fcb8a2f96c7c670507a258f0e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
