<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_888dcd3a9a9ca3b1e5182861e1acf71e83fd8785b02301ae03c07b08137d6c82 extends Twig_Template
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
        $__internal_0dffe5eba435413b0a5d308ec628c9d8a74732029d16a272c5d1fe9653cf48a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dffe5eba435413b0a5d308ec628c9d8a74732029d16a272c5d1fe9653cf48a9->enter($__internal_0dffe5eba435413b0a5d308ec628c9d8a74732029d16a272c5d1fe9653cf48a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_b9e2efc60f2836559c6bbc2bf4cc45850d5660169d466b6daefb6d6c5821c688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e2efc60f2836559c6bbc2bf4cc45850d5660169d466b6daefb6d6c5821c688->enter($__internal_b9e2efc60f2836559c6bbc2bf4cc45850d5660169d466b6daefb6d6c5821c688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dffe5eba435413b0a5d308ec628c9d8a74732029d16a272c5d1fe9653cf48a9->leave($__internal_0dffe5eba435413b0a5d308ec628c9d8a74732029d16a272c5d1fe9653cf48a9_prof);

        
        $__internal_b9e2efc60f2836559c6bbc2bf4cc45850d5660169d466b6daefb6d6c5821c688->leave($__internal_b9e2efc60f2836559c6bbc2bf4cc45850d5660169d466b6daefb6d6c5821c688_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b370fdf113a098d3e5edb3bf24f1e8732af1cde80a6a3022a9991d8166aa299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b370fdf113a098d3e5edb3bf24f1e8732af1cde80a6a3022a9991d8166aa299->enter($__internal_1b370fdf113a098d3e5edb3bf24f1e8732af1cde80a6a3022a9991d8166aa299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e79c6e22c90f23d854924be225ae99568011641f4f62fa2e817c8d33dbb5cde2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e79c6e22c90f23d854924be225ae99568011641f4f62fa2e817c8d33dbb5cde2->enter($__internal_e79c6e22c90f23d854924be225ae99568011641f4f62fa2e817c8d33dbb5cde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e79c6e22c90f23d854924be225ae99568011641f4f62fa2e817c8d33dbb5cde2->leave($__internal_e79c6e22c90f23d854924be225ae99568011641f4f62fa2e817c8d33dbb5cde2_prof);

        
        $__internal_1b370fdf113a098d3e5edb3bf24f1e8732af1cde80a6a3022a9991d8166aa299->leave($__internal_1b370fdf113a098d3e5edb3bf24f1e8732af1cde80a6a3022a9991d8166aa299_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67a7719071188f7b63907146bea11ee471379f1f42a44d9b3432446ced87b4c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67a7719071188f7b63907146bea11ee471379f1f42a44d9b3432446ced87b4c4->enter($__internal_67a7719071188f7b63907146bea11ee471379f1f42a44d9b3432446ced87b4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1ce61a58531b768431507cf6dd4a19393a91f0f47e167dff29934c39b243b5a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ce61a58531b768431507cf6dd4a19393a91f0f47e167dff29934c39b243b5a6->enter($__internal_1ce61a58531b768431507cf6dd4a19393a91f0f47e167dff29934c39b243b5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_1ce61a58531b768431507cf6dd4a19393a91f0f47e167dff29934c39b243b5a6->leave($__internal_1ce61a58531b768431507cf6dd4a19393a91f0f47e167dff29934c39b243b5a6_prof);

        
        $__internal_67a7719071188f7b63907146bea11ee471379f1f42a44d9b3432446ced87b4c4->leave($__internal_67a7719071188f7b63907146bea11ee471379f1f42a44d9b3432446ced87b4c4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_049af9623f35bcdeae7e04c43f68b65ad2948b1b04baa09ac3a05aa54cd38618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_049af9623f35bcdeae7e04c43f68b65ad2948b1b04baa09ac3a05aa54cd38618->enter($__internal_049af9623f35bcdeae7e04c43f68b65ad2948b1b04baa09ac3a05aa54cd38618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4344247419280c08e092b6869a98c7e3a35050f5a338d7d018aa6a1d866228e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4344247419280c08e092b6869a98c7e3a35050f5a338d7d018aa6a1d866228e1->enter($__internal_4344247419280c08e092b6869a98c7e3a35050f5a338d7d018aa6a1d866228e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_4344247419280c08e092b6869a98c7e3a35050f5a338d7d018aa6a1d866228e1->leave($__internal_4344247419280c08e092b6869a98c7e3a35050f5a338d7d018aa6a1d866228e1_prof);

        
        $__internal_049af9623f35bcdeae7e04c43f68b65ad2948b1b04baa09ac3a05aa54cd38618->leave($__internal_049af9623f35bcdeae7e04c43f68b65ad2948b1b04baa09ac3a05aa54cd38618_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
