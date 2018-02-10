<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_48517192bd64975284510359f253a9290b2638908af076108dd2f177cfe740f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11c4c486153b8e725d2a663fd7be40a08ea70519aba2e09d63f4bf51c676e30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11c4c486153b8e725d2a663fd7be40a08ea70519aba2e09d63f4bf51c676e30e->enter($__internal_11c4c486153b8e725d2a663fd7be40a08ea70519aba2e09d63f4bf51c676e30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_219bf63ca54f42c2195c430dff72d313f19c8f57eb1571ad66d82499fcd76d22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219bf63ca54f42c2195c430dff72d313f19c8f57eb1571ad66d82499fcd76d22->enter($__internal_219bf63ca54f42c2195c430dff72d313f19c8f57eb1571ad66d82499fcd76d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11c4c486153b8e725d2a663fd7be40a08ea70519aba2e09d63f4bf51c676e30e->leave($__internal_11c4c486153b8e725d2a663fd7be40a08ea70519aba2e09d63f4bf51c676e30e_prof);

        
        $__internal_219bf63ca54f42c2195c430dff72d313f19c8f57eb1571ad66d82499fcd76d22->leave($__internal_219bf63ca54f42c2195c430dff72d313f19c8f57eb1571ad66d82499fcd76d22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a606d833d6d7a5896f31d437b26ce06c35dd91388fbd04c0992ce08daf946c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a606d833d6d7a5896f31d437b26ce06c35dd91388fbd04c0992ce08daf946c1->enter($__internal_4a606d833d6d7a5896f31d437b26ce06c35dd91388fbd04c0992ce08daf946c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_034b01680dc0241ed2946a9df38a983b6e5321d198bd03d6469c7b2c50f482af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_034b01680dc0241ed2946a9df38a983b6e5321d198bd03d6469c7b2c50f482af->enter($__internal_034b01680dc0241ed2946a9df38a983b6e5321d198bd03d6469c7b2c50f482af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_034b01680dc0241ed2946a9df38a983b6e5321d198bd03d6469c7b2c50f482af->leave($__internal_034b01680dc0241ed2946a9df38a983b6e5321d198bd03d6469c7b2c50f482af_prof);

        
        $__internal_4a606d833d6d7a5896f31d437b26ce06c35dd91388fbd04c0992ce08daf946c1->leave($__internal_4a606d833d6d7a5896f31d437b26ce06c35dd91388fbd04c0992ce08daf946c1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
