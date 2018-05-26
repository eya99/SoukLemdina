<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dcec998190546fbe7c7d99243a5dd571c1c5e6109be54b0d18d4bf4f53c21bf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_92fa8fb6b01052848138a640b32365d0a116d045fab2bd816bda5dbbc588e5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92fa8fb6b01052848138a640b32365d0a116d045fab2bd816bda5dbbc588e5c4->enter($__internal_92fa8fb6b01052848138a640b32365d0a116d045fab2bd816bda5dbbc588e5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_ccc1bbba276b03b0ba8504caf38091a22d800b7e9c3795665a1d378b27a2e2a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc1bbba276b03b0ba8504caf38091a22d800b7e9c3795665a1d378b27a2e2a2->enter($__internal_ccc1bbba276b03b0ba8504caf38091a22d800b7e9c3795665a1d378b27a2e2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92fa8fb6b01052848138a640b32365d0a116d045fab2bd816bda5dbbc588e5c4->leave($__internal_92fa8fb6b01052848138a640b32365d0a116d045fab2bd816bda5dbbc588e5c4_prof);

        
        $__internal_ccc1bbba276b03b0ba8504caf38091a22d800b7e9c3795665a1d378b27a2e2a2->leave($__internal_ccc1bbba276b03b0ba8504caf38091a22d800b7e9c3795665a1d378b27a2e2a2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_64428e749c968e0c3bb0223913a45b3b93444247ed6eaa95dda3b205aecdc69e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64428e749c968e0c3bb0223913a45b3b93444247ed6eaa95dda3b205aecdc69e->enter($__internal_64428e749c968e0c3bb0223913a45b3b93444247ed6eaa95dda3b205aecdc69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10e201a6bf7f6a75f61da91777767d1f6fb86b8671dd198871299be55787e7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e201a6bf7f6a75f61da91777767d1f6fb86b8671dd198871299be55787e7cd->enter($__internal_10e201a6bf7f6a75f61da91777767d1f6fb86b8671dd198871299be55787e7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10e201a6bf7f6a75f61da91777767d1f6fb86b8671dd198871299be55787e7cd->leave($__internal_10e201a6bf7f6a75f61da91777767d1f6fb86b8671dd198871299be55787e7cd_prof);

        
        $__internal_64428e749c968e0c3bb0223913a45b3b93444247ed6eaa95dda3b205aecdc69e->leave($__internal_64428e749c968e0c3bb0223913a45b3b93444247ed6eaa95dda3b205aecdc69e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c28469b97684dc5c199b2c5f45443fe6a536390537c7af48cc78b5ee432e8af1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28469b97684dc5c199b2c5f45443fe6a536390537c7af48cc78b5ee432e8af1->enter($__internal_c28469b97684dc5c199b2c5f45443fe6a536390537c7af48cc78b5ee432e8af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fbcb81e87ab21bac55c7ad200718f2f9f6bf74d59d49944e0ede9e774d2469ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbcb81e87ab21bac55c7ad200718f2f9f6bf74d59d49944e0ede9e774d2469ca->enter($__internal_fbcb81e87ab21bac55c7ad200718f2f9f6bf74d59d49944e0ede9e774d2469ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fbcb81e87ab21bac55c7ad200718f2f9f6bf74d59d49944e0ede9e774d2469ca->leave($__internal_fbcb81e87ab21bac55c7ad200718f2f9f6bf74d59d49944e0ede9e774d2469ca_prof);

        
        $__internal_c28469b97684dc5c199b2c5f45443fe6a536390537c7af48cc78b5ee432e8af1->leave($__internal_c28469b97684dc5c199b2c5f45443fe6a536390537c7af48cc78b5ee432e8af1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_716deb85bd7080920fc721c8ab1ccc946bd29409675572a77c9c9c88882f64d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716deb85bd7080920fc721c8ab1ccc946bd29409675572a77c9c9c88882f64d9->enter($__internal_716deb85bd7080920fc721c8ab1ccc946bd29409675572a77c9c9c88882f64d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_661541df2f0917547ada2afc7a522edb4d3b995ef4666c53d714bc31404dc189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_661541df2f0917547ada2afc7a522edb4d3b995ef4666c53d714bc31404dc189->enter($__internal_661541df2f0917547ada2afc7a522edb4d3b995ef4666c53d714bc31404dc189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_661541df2f0917547ada2afc7a522edb4d3b995ef4666c53d714bc31404dc189->leave($__internal_661541df2f0917547ada2afc7a522edb4d3b995ef4666c53d714bc31404dc189_prof);

        
        $__internal_716deb85bd7080920fc721c8ab1ccc946bd29409675572a77c9c9c88882f64d9->leave($__internal_716deb85bd7080920fc721c8ab1ccc946bd29409675572a77c9c9c88882f64d9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
