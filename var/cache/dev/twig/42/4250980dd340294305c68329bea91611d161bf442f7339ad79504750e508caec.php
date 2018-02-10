<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_942143af46b2d887f1719297d66559827cf1bd840ee9f5bad137eec7f269645d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_053901080ee2f571602ce989379cfdf5e37ac837a15b593a18e26cfe9b2fceb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053901080ee2f571602ce989379cfdf5e37ac837a15b593a18e26cfe9b2fceb2->enter($__internal_053901080ee2f571602ce989379cfdf5e37ac837a15b593a18e26cfe9b2fceb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4369812da23e955d24cfbcdea9395b5f88e518d555efdd33d8fd12959545ac6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4369812da23e955d24cfbcdea9395b5f88e518d555efdd33d8fd12959545ac6c->enter($__internal_4369812da23e955d24cfbcdea9395b5f88e518d555efdd33d8fd12959545ac6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_053901080ee2f571602ce989379cfdf5e37ac837a15b593a18e26cfe9b2fceb2->leave($__internal_053901080ee2f571602ce989379cfdf5e37ac837a15b593a18e26cfe9b2fceb2_prof);

        
        $__internal_4369812da23e955d24cfbcdea9395b5f88e518d555efdd33d8fd12959545ac6c->leave($__internal_4369812da23e955d24cfbcdea9395b5f88e518d555efdd33d8fd12959545ac6c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_022df06dc693175b7d360bc992360abe545940371c4cc304c12696cd37605995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_022df06dc693175b7d360bc992360abe545940371c4cc304c12696cd37605995->enter($__internal_022df06dc693175b7d360bc992360abe545940371c4cc304c12696cd37605995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e4aa9fdc1d59e93fcc5e2a025ff0d7acf623e8e5e2945ab33bafaef8ca5b435a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4aa9fdc1d59e93fcc5e2a025ff0d7acf623e8e5e2945ab33bafaef8ca5b435a->enter($__internal_e4aa9fdc1d59e93fcc5e2a025ff0d7acf623e8e5e2945ab33bafaef8ca5b435a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e4aa9fdc1d59e93fcc5e2a025ff0d7acf623e8e5e2945ab33bafaef8ca5b435a->leave($__internal_e4aa9fdc1d59e93fcc5e2a025ff0d7acf623e8e5e2945ab33bafaef8ca5b435a_prof);

        
        $__internal_022df06dc693175b7d360bc992360abe545940371c4cc304c12696cd37605995->leave($__internal_022df06dc693175b7d360bc992360abe545940371c4cc304c12696cd37605995_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a6881d7c1b5811cebb73a47b95e94fe2dc8f9401d88562a8d4be3411eef907e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6881d7c1b5811cebb73a47b95e94fe2dc8f9401d88562a8d4be3411eef907e1->enter($__internal_a6881d7c1b5811cebb73a47b95e94fe2dc8f9401d88562a8d4be3411eef907e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b05d8400cda35ac430c6374d88a6f5dc9ac52a3d63a864f10761b57af36fd198 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b05d8400cda35ac430c6374d88a6f5dc9ac52a3d63a864f10761b57af36fd198->enter($__internal_b05d8400cda35ac430c6374d88a6f5dc9ac52a3d63a864f10761b57af36fd198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_b05d8400cda35ac430c6374d88a6f5dc9ac52a3d63a864f10761b57af36fd198->leave($__internal_b05d8400cda35ac430c6374d88a6f5dc9ac52a3d63a864f10761b57af36fd198_prof);

        
        $__internal_a6881d7c1b5811cebb73a47b95e94fe2dc8f9401d88562a8d4be3411eef907e1->leave($__internal_a6881d7c1b5811cebb73a47b95e94fe2dc8f9401d88562a8d4be3411eef907e1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a87162abffe472d5c83f9316892092b6c941cec1fada35b42e4a3cbfa78bbf8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87162abffe472d5c83f9316892092b6c941cec1fada35b42e4a3cbfa78bbf8a->enter($__internal_a87162abffe472d5c83f9316892092b6c941cec1fada35b42e4a3cbfa78bbf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_62182a4e8aa5d9bc9aaaa3c72d1c6acafbc48d55e76a628f39f5aef34293979e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62182a4e8aa5d9bc9aaaa3c72d1c6acafbc48d55e76a628f39f5aef34293979e->enter($__internal_62182a4e8aa5d9bc9aaaa3c72d1c6acafbc48d55e76a628f39f5aef34293979e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_62182a4e8aa5d9bc9aaaa3c72d1c6acafbc48d55e76a628f39f5aef34293979e->leave($__internal_62182a4e8aa5d9bc9aaaa3c72d1c6acafbc48d55e76a628f39f5aef34293979e_prof);

        
        $__internal_a87162abffe472d5c83f9316892092b6c941cec1fada35b42e4a3cbfa78bbf8a->leave($__internal_a87162abffe472d5c83f9316892092b6c941cec1fada35b42e4a3cbfa78bbf8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
