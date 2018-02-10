<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_c43355c770256d790fabf4835ec6298e36a9e78ff2a871a15826d8027860312e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_684f009de4ec0190e754034515c5c14bd6ff1e2763a4f21574998abfaad455b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684f009de4ec0190e754034515c5c14bd6ff1e2763a4f21574998abfaad455b1->enter($__internal_684f009de4ec0190e754034515c5c14bd6ff1e2763a4f21574998abfaad455b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_93071f6a8de95ab465570706065226214dff8478e6a187b2203a0bf1c4041845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93071f6a8de95ab465570706065226214dff8478e6a187b2203a0bf1c4041845->enter($__internal_93071f6a8de95ab465570706065226214dff8478e6a187b2203a0bf1c4041845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_684f009de4ec0190e754034515c5c14bd6ff1e2763a4f21574998abfaad455b1->leave($__internal_684f009de4ec0190e754034515c5c14bd6ff1e2763a4f21574998abfaad455b1_prof);

        
        $__internal_93071f6a8de95ab465570706065226214dff8478e6a187b2203a0bf1c4041845->leave($__internal_93071f6a8de95ab465570706065226214dff8478e6a187b2203a0bf1c4041845_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2cffcfb363ffbccf9ac72280bc238f86387d7738ce21eb2f9218262cb71ea2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cffcfb363ffbccf9ac72280bc238f86387d7738ce21eb2f9218262cb71ea2f9->enter($__internal_2cffcfb363ffbccf9ac72280bc238f86387d7738ce21eb2f9218262cb71ea2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_891065a892bac8e099e3a02190bb5d3f8b6136693a1b08565f165860227d5265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891065a892bac8e099e3a02190bb5d3f8b6136693a1b08565f165860227d5265->enter($__internal_891065a892bac8e099e3a02190bb5d3f8b6136693a1b08565f165860227d5265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_891065a892bac8e099e3a02190bb5d3f8b6136693a1b08565f165860227d5265->leave($__internal_891065a892bac8e099e3a02190bb5d3f8b6136693a1b08565f165860227d5265_prof);

        
        $__internal_2cffcfb363ffbccf9ac72280bc238f86387d7738ce21eb2f9218262cb71ea2f9->leave($__internal_2cffcfb363ffbccf9ac72280bc238f86387d7738ce21eb2f9218262cb71ea2f9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
