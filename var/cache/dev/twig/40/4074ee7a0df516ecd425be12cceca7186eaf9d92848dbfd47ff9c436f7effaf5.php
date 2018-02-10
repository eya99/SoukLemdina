<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e52524aa315a4a122ffd032a8b197baf9cf86728985ee890c7c58e3dd25119a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b48c1a931abc619f3fd60828d0dfa7c15297ac472c81b3f6055addab5a9e943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b48c1a931abc619f3fd60828d0dfa7c15297ac472c81b3f6055addab5a9e943->enter($__internal_2b48c1a931abc619f3fd60828d0dfa7c15297ac472c81b3f6055addab5a9e943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_c182a930ece632c3c42f6b2bbd86fe6d53b4c9cb40c3660660d4d5519162c7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c182a930ece632c3c42f6b2bbd86fe6d53b4c9cb40c3660660d4d5519162c7d6->enter($__internal_c182a930ece632c3c42f6b2bbd86fe6d53b4c9cb40c3660660d4d5519162c7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2b48c1a931abc619f3fd60828d0dfa7c15297ac472c81b3f6055addab5a9e943->leave($__internal_2b48c1a931abc619f3fd60828d0dfa7c15297ac472c81b3f6055addab5a9e943_prof);

        
        $__internal_c182a930ece632c3c42f6b2bbd86fe6d53b4c9cb40c3660660d4d5519162c7d6->leave($__internal_c182a930ece632c3c42f6b2bbd86fe6d53b4c9cb40c3660660d4d5519162c7d6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_80bd1c314da8c686254f96acf190ad01bcf59582c8a36c72798987ba289efcda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80bd1c314da8c686254f96acf190ad01bcf59582c8a36c72798987ba289efcda->enter($__internal_80bd1c314da8c686254f96acf190ad01bcf59582c8a36c72798987ba289efcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c752c99ca35945dd5bb13a283bb87d7485b35305c90c7b8d0afc93951293d706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c752c99ca35945dd5bb13a283bb87d7485b35305c90c7b8d0afc93951293d706->enter($__internal_c752c99ca35945dd5bb13a283bb87d7485b35305c90c7b8d0afc93951293d706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c752c99ca35945dd5bb13a283bb87d7485b35305c90c7b8d0afc93951293d706->leave($__internal_c752c99ca35945dd5bb13a283bb87d7485b35305c90c7b8d0afc93951293d706_prof);

        
        $__internal_80bd1c314da8c686254f96acf190ad01bcf59582c8a36c72798987ba289efcda->leave($__internal_80bd1c314da8c686254f96acf190ad01bcf59582c8a36c72798987ba289efcda_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_3cf8e1fdefb3a74bd1a3fb5448e5136de2237f3ffdd6fad310ccf19aca8632e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cf8e1fdefb3a74bd1a3fb5448e5136de2237f3ffdd6fad310ccf19aca8632e3->enter($__internal_3cf8e1fdefb3a74bd1a3fb5448e5136de2237f3ffdd6fad310ccf19aca8632e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_613c811030e88ba6d9fa608e921bcedfcfb7d912d5530eb94ec523260eed9f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613c811030e88ba6d9fa608e921bcedfcfb7d912d5530eb94ec523260eed9f5d->enter($__internal_613c811030e88ba6d9fa608e921bcedfcfb7d912d5530eb94ec523260eed9f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_613c811030e88ba6d9fa608e921bcedfcfb7d912d5530eb94ec523260eed9f5d->leave($__internal_613c811030e88ba6d9fa608e921bcedfcfb7d912d5530eb94ec523260eed9f5d_prof);

        
        $__internal_3cf8e1fdefb3a74bd1a3fb5448e5136de2237f3ffdd6fad310ccf19aca8632e3->leave($__internal_3cf8e1fdefb3a74bd1a3fb5448e5136de2237f3ffdd6fad310ccf19aca8632e3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_57e4af8815b7872007977fe1e462be4f7ddf290b82514cc54bc3f72555a7a3e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e4af8815b7872007977fe1e462be4f7ddf290b82514cc54bc3f72555a7a3e4->enter($__internal_57e4af8815b7872007977fe1e462be4f7ddf290b82514cc54bc3f72555a7a3e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_307104a50ec0f86cec0923459225af895abfe72edb842eb001d186d67cf30e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307104a50ec0f86cec0923459225af895abfe72edb842eb001d186d67cf30e0f->enter($__internal_307104a50ec0f86cec0923459225af895abfe72edb842eb001d186d67cf30e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_307104a50ec0f86cec0923459225af895abfe72edb842eb001d186d67cf30e0f->leave($__internal_307104a50ec0f86cec0923459225af895abfe72edb842eb001d186d67cf30e0f_prof);

        
        $__internal_57e4af8815b7872007977fe1e462be4f7ddf290b82514cc54bc3f72555a7a3e4->leave($__internal_57e4af8815b7872007977fe1e462be4f7ddf290b82514cc54bc3f72555a7a3e4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
