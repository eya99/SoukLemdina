<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ef88fadc688161ad1c2d6fe0d74b690acf769e0b8fada078f18de3775ff5f6ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_445a09ea161eb33ca8f50791b6134bfa15c94655fb33d18a26c5c488cd673efa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445a09ea161eb33ca8f50791b6134bfa15c94655fb33d18a26c5c488cd673efa->enter($__internal_445a09ea161eb33ca8f50791b6134bfa15c94655fb33d18a26c5c488cd673efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_440d82b21367942596f2ac403bed82cdad50c7c98ded7903071f069c8b0e9068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_440d82b21367942596f2ac403bed82cdad50c7c98ded7903071f069c8b0e9068->enter($__internal_440d82b21367942596f2ac403bed82cdad50c7c98ded7903071f069c8b0e9068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445a09ea161eb33ca8f50791b6134bfa15c94655fb33d18a26c5c488cd673efa->leave($__internal_445a09ea161eb33ca8f50791b6134bfa15c94655fb33d18a26c5c488cd673efa_prof);

        
        $__internal_440d82b21367942596f2ac403bed82cdad50c7c98ded7903071f069c8b0e9068->leave($__internal_440d82b21367942596f2ac403bed82cdad50c7c98ded7903071f069c8b0e9068_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a31c6f10e591677a467dff08c6e43e35e1896f17ba41fa343aa1fed21cfe88a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a31c6f10e591677a467dff08c6e43e35e1896f17ba41fa343aa1fed21cfe88a6->enter($__internal_a31c6f10e591677a467dff08c6e43e35e1896f17ba41fa343aa1fed21cfe88a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_792b85639084c1146941513688f1b625d150336578011cc09d11e54f1ee08098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792b85639084c1146941513688f1b625d150336578011cc09d11e54f1ee08098->enter($__internal_792b85639084c1146941513688f1b625d150336578011cc09d11e54f1ee08098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_792b85639084c1146941513688f1b625d150336578011cc09d11e54f1ee08098->leave($__internal_792b85639084c1146941513688f1b625d150336578011cc09d11e54f1ee08098_prof);

        
        $__internal_a31c6f10e591677a467dff08c6e43e35e1896f17ba41fa343aa1fed21cfe88a6->leave($__internal_a31c6f10e591677a467dff08c6e43e35e1896f17ba41fa343aa1fed21cfe88a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f552739065de2a19f551c977fbb8b2d73eed32858ee8a992ae73445784d669fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f552739065de2a19f551c977fbb8b2d73eed32858ee8a992ae73445784d669fc->enter($__internal_f552739065de2a19f551c977fbb8b2d73eed32858ee8a992ae73445784d669fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_35730191d67bc418ae298834ade8c43d304c7db9c95f57b867552525c18ccdc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35730191d67bc418ae298834ade8c43d304c7db9c95f57b867552525c18ccdc8->enter($__internal_35730191d67bc418ae298834ade8c43d304c7db9c95f57b867552525c18ccdc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35730191d67bc418ae298834ade8c43d304c7db9c95f57b867552525c18ccdc8->leave($__internal_35730191d67bc418ae298834ade8c43d304c7db9c95f57b867552525c18ccdc8_prof);

        
        $__internal_f552739065de2a19f551c977fbb8b2d73eed32858ee8a992ae73445784d669fc->leave($__internal_f552739065de2a19f551c977fbb8b2d73eed32858ee8a992ae73445784d669fc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e865034a4e3718a2de19f3127fc5b1d04f98e351f9e4cd4dc2e7b5298be0e8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e865034a4e3718a2de19f3127fc5b1d04f98e351f9e4cd4dc2e7b5298be0e8ff->enter($__internal_e865034a4e3718a2de19f3127fc5b1d04f98e351f9e4cd4dc2e7b5298be0e8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_009eb616d4e7bfdcee67c0ffa4cc3241fa09e9e0f9f80d3d08aae86b55cb54e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009eb616d4e7bfdcee67c0ffa4cc3241fa09e9e0f9f80d3d08aae86b55cb54e6->enter($__internal_009eb616d4e7bfdcee67c0ffa4cc3241fa09e9e0f9f80d3d08aae86b55cb54e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_009eb616d4e7bfdcee67c0ffa4cc3241fa09e9e0f9f80d3d08aae86b55cb54e6->leave($__internal_009eb616d4e7bfdcee67c0ffa4cc3241fa09e9e0f9f80d3d08aae86b55cb54e6_prof);

        
        $__internal_e865034a4e3718a2de19f3127fc5b1d04f98e351f9e4cd4dc2e7b5298be0e8ff->leave($__internal_e865034a4e3718a2de19f3127fc5b1d04f98e351f9e4cd4dc2e7b5298be0e8ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
