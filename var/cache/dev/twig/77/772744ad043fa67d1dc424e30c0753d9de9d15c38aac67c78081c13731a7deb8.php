<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_e82d79d6e83d1e48a7a552afba108fe69c134c28bafb641c0cf9cf1086d88b79 extends Twig_Template
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
        $__internal_1d056147e13a7b54d71baf4b2991878f68b042091687c777fca48447146c4197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d056147e13a7b54d71baf4b2991878f68b042091687c777fca48447146c4197->enter($__internal_1d056147e13a7b54d71baf4b2991878f68b042091687c777fca48447146c4197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_b2aef67d2b0fb4bff4d1613a5c6f9f0ea28b2b79c251be9768ade32b3413686d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2aef67d2b0fb4bff4d1613a5c6f9f0ea28b2b79c251be9768ade32b3413686d->enter($__internal_b2aef67d2b0fb4bff4d1613a5c6f9f0ea28b2b79c251be9768ade32b3413686d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1d056147e13a7b54d71baf4b2991878f68b042091687c777fca48447146c4197->leave($__internal_1d056147e13a7b54d71baf4b2991878f68b042091687c777fca48447146c4197_prof);

        
        $__internal_b2aef67d2b0fb4bff4d1613a5c6f9f0ea28b2b79c251be9768ade32b3413686d->leave($__internal_b2aef67d2b0fb4bff4d1613a5c6f9f0ea28b2b79c251be9768ade32b3413686d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_18646d05009eceea0e87c2a5bbaa636461f40ff6d6f4189f7c6a9151c1c163be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18646d05009eceea0e87c2a5bbaa636461f40ff6d6f4189f7c6a9151c1c163be->enter($__internal_18646d05009eceea0e87c2a5bbaa636461f40ff6d6f4189f7c6a9151c1c163be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8224b8d02c1907dda4aa3c3641fffdc71638e278732724ae4071667041845d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8224b8d02c1907dda4aa3c3641fffdc71638e278732724ae4071667041845d7f->enter($__internal_8224b8d02c1907dda4aa3c3641fffdc71638e278732724ae4071667041845d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_8224b8d02c1907dda4aa3c3641fffdc71638e278732724ae4071667041845d7f->leave($__internal_8224b8d02c1907dda4aa3c3641fffdc71638e278732724ae4071667041845d7f_prof);

        
        $__internal_18646d05009eceea0e87c2a5bbaa636461f40ff6d6f4189f7c6a9151c1c163be->leave($__internal_18646d05009eceea0e87c2a5bbaa636461f40ff6d6f4189f7c6a9151c1c163be_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2608506b9dd8effeb3798a741260791e165bf795512e7ed584efca26a457d7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2608506b9dd8effeb3798a741260791e165bf795512e7ed584efca26a457d7bb->enter($__internal_2608506b9dd8effeb3798a741260791e165bf795512e7ed584efca26a457d7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2495d05b9be11925ca4fb5a4d3a934da3e809a087b522b3c8527e6914e7a3746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2495d05b9be11925ca4fb5a4d3a934da3e809a087b522b3c8527e6914e7a3746->enter($__internal_2495d05b9be11925ca4fb5a4d3a934da3e809a087b522b3c8527e6914e7a3746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2495d05b9be11925ca4fb5a4d3a934da3e809a087b522b3c8527e6914e7a3746->leave($__internal_2495d05b9be11925ca4fb5a4d3a934da3e809a087b522b3c8527e6914e7a3746_prof);

        
        $__internal_2608506b9dd8effeb3798a741260791e165bf795512e7ed584efca26a457d7bb->leave($__internal_2608506b9dd8effeb3798a741260791e165bf795512e7ed584efca26a457d7bb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_31f8eb3d26a3bbf1d7276e44e85e9c9bede06393aa741718a0cc79225fed8c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f8eb3d26a3bbf1d7276e44e85e9c9bede06393aa741718a0cc79225fed8c1d->enter($__internal_31f8eb3d26a3bbf1d7276e44e85e9c9bede06393aa741718a0cc79225fed8c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3b62ced93da862c7554461c2d72732fbf1e15706cea214198676196d65fc9ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b62ced93da862c7554461c2d72732fbf1e15706cea214198676196d65fc9ba2->enter($__internal_3b62ced93da862c7554461c2d72732fbf1e15706cea214198676196d65fc9ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3b62ced93da862c7554461c2d72732fbf1e15706cea214198676196d65fc9ba2->leave($__internal_3b62ced93da862c7554461c2d72732fbf1e15706cea214198676196d65fc9ba2_prof);

        
        $__internal_31f8eb3d26a3bbf1d7276e44e85e9c9bede06393aa741718a0cc79225fed8c1d->leave($__internal_31f8eb3d26a3bbf1d7276e44e85e9c9bede06393aa741718a0cc79225fed8c1d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "D:\\xampp\\htdocs\\SoukLemdina\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
