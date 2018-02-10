<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_05ef413ef486e6f84bc2014c1b7dd1dad896cde3bf53711c5286de37c59b61ae extends Twig_Template
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
        $__internal_4033f5bd9b8963eddf5c82c90bad4e54b2b0d013b9239fc2f15c19764ec0e38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4033f5bd9b8963eddf5c82c90bad4e54b2b0d013b9239fc2f15c19764ec0e38a->enter($__internal_4033f5bd9b8963eddf5c82c90bad4e54b2b0d013b9239fc2f15c19764ec0e38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_960d0ea1beee0cce93ee1b521aca0600ea5832939058b2b77f74ea757d639eb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_960d0ea1beee0cce93ee1b521aca0600ea5832939058b2b77f74ea757d639eb6->enter($__internal_960d0ea1beee0cce93ee1b521aca0600ea5832939058b2b77f74ea757d639eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4033f5bd9b8963eddf5c82c90bad4e54b2b0d013b9239fc2f15c19764ec0e38a->leave($__internal_4033f5bd9b8963eddf5c82c90bad4e54b2b0d013b9239fc2f15c19764ec0e38a_prof);

        
        $__internal_960d0ea1beee0cce93ee1b521aca0600ea5832939058b2b77f74ea757d639eb6->leave($__internal_960d0ea1beee0cce93ee1b521aca0600ea5832939058b2b77f74ea757d639eb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e8e957711fb4ce21d784ca4710e3337e5229272b448162b24684fd41f868fba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8e957711fb4ce21d784ca4710e3337e5229272b448162b24684fd41f868fba->enter($__internal_8e8e957711fb4ce21d784ca4710e3337e5229272b448162b24684fd41f868fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c6c5a5b7f35167652aa9ba93c0528fe034bc54ff3f0b2040c2e7189f15ae1d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c5a5b7f35167652aa9ba93c0528fe034bc54ff3f0b2040c2e7189f15ae1d52->enter($__internal_c6c5a5b7f35167652aa9ba93c0528fe034bc54ff3f0b2040c2e7189f15ae1d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c6c5a5b7f35167652aa9ba93c0528fe034bc54ff3f0b2040c2e7189f15ae1d52->leave($__internal_c6c5a5b7f35167652aa9ba93c0528fe034bc54ff3f0b2040c2e7189f15ae1d52_prof);

        
        $__internal_8e8e957711fb4ce21d784ca4710e3337e5229272b448162b24684fd41f868fba->leave($__internal_8e8e957711fb4ce21d784ca4710e3337e5229272b448162b24684fd41f868fba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c454a17e97757090e1b3703ea0467cb1098bad8a6f00a35a68c2d23724d73c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c454a17e97757090e1b3703ea0467cb1098bad8a6f00a35a68c2d23724d73c41->enter($__internal_c454a17e97757090e1b3703ea0467cb1098bad8a6f00a35a68c2d23724d73c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d34dee6aaa14dee3a03ec39ae7572e0519277327bd884bec741e9bb1d7c2033e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34dee6aaa14dee3a03ec39ae7572e0519277327bd884bec741e9bb1d7c2033e->enter($__internal_d34dee6aaa14dee3a03ec39ae7572e0519277327bd884bec741e9bb1d7c2033e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d34dee6aaa14dee3a03ec39ae7572e0519277327bd884bec741e9bb1d7c2033e->leave($__internal_d34dee6aaa14dee3a03ec39ae7572e0519277327bd884bec741e9bb1d7c2033e_prof);

        
        $__internal_c454a17e97757090e1b3703ea0467cb1098bad8a6f00a35a68c2d23724d73c41->leave($__internal_c454a17e97757090e1b3703ea0467cb1098bad8a6f00a35a68c2d23724d73c41_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f8a6801fa7bf4ff65287666740c4b1224fe3beb2118938bacce53d5043b658d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8a6801fa7bf4ff65287666740c4b1224fe3beb2118938bacce53d5043b658d6->enter($__internal_f8a6801fa7bf4ff65287666740c4b1224fe3beb2118938bacce53d5043b658d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4ad8b72c8e04f9d95e8214246dedd82a43d33c88330c91f78abb0bcbb241ba9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ad8b72c8e04f9d95e8214246dedd82a43d33c88330c91f78abb0bcbb241ba9f->enter($__internal_4ad8b72c8e04f9d95e8214246dedd82a43d33c88330c91f78abb0bcbb241ba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ad8b72c8e04f9d95e8214246dedd82a43d33c88330c91f78abb0bcbb241ba9f->leave($__internal_4ad8b72c8e04f9d95e8214246dedd82a43d33c88330c91f78abb0bcbb241ba9f_prof);

        
        $__internal_f8a6801fa7bf4ff65287666740c4b1224fe3beb2118938bacce53d5043b658d6->leave($__internal_f8a6801fa7bf4ff65287666740c4b1224fe3beb2118938bacce53d5043b658d6_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
