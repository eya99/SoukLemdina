<?php

/* FOSMessageBundle:Message:search.html.twig */
class __TwigTemplate_3fac3e57162514787c915d00caf891cfab634a049447d7b12663a65b47f0c66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:search.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15f9ea831749e4a6d3406befc656ef08c7d142510a805976364324027712133d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f9ea831749e4a6d3406befc656ef08c7d142510a805976364324027712133d->enter($__internal_15f9ea831749e4a6d3406befc656ef08c7d142510a805976364324027712133d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $__internal_c8b3070820c3c8d42a7f0105749e7ed4cf0d025cb26c6e4e4c50ae79a004fb54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b3070820c3c8d42a7f0105749e7ed4cf0d025cb26c6e4e4c50ae79a004fb54->enter($__internal_c8b3070820c3c8d42a7f0105749e7ed4cf0d025cb26c6e4e4c50ae79a004fb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f9ea831749e4a6d3406befc656ef08c7d142510a805976364324027712133d->leave($__internal_15f9ea831749e4a6d3406befc656ef08c7d142510a805976364324027712133d_prof);

        
        $__internal_c8b3070820c3c8d42a7f0105749e7ed4cf0d025cb26c6e4e4c50ae79a004fb54->leave($__internal_c8b3070820c3c8d42a7f0105749e7ed4cf0d025cb26c6e4e4c50ae79a004fb54_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_45cb834b1a901738a15d6b7f7d94d39b81a155dc9fe9804ee6391013c6216a16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45cb834b1a901738a15d6b7f7d94d39b81a155dc9fe9804ee6391013c6216a16->enter($__internal_45cb834b1a901738a15d6b7f7d94d39b81a155dc9fe9804ee6391013c6216a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_bc8e2e3b1d7abf387911ba0d5c41c00ce6a6f2b1a856ac390c1497ef63bd8fdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8e2e3b1d7abf387911ba0d5c41c00ce6a6f2b1a856ac390c1497ef63bd8fdd->enter($__internal_bc8e2e3b1d7abf387911ba0d5c41c00ce6a6f2b1a856ac390c1497ef63bd8fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2 align=\"center\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Recherche", array(), "FOSMessageBundle");
        echo "</h2>

<p>";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("threads_found", twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads"))), array("%num%" => twig_length_filter($this->env, (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))), "FOSMessageBundle");
        // line 9
        echo "</p>

";
        // line 11
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:search.html.twig", 11)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 12
        echo "
";
        
        $__internal_bc8e2e3b1d7abf387911ba0d5c41c00ce6a6f2b1a856ac390c1497ef63bd8fdd->leave($__internal_bc8e2e3b1d7abf387911ba0d5c41c00ce6a6f2b1a856ac390c1497ef63bd8fdd_prof);

        
        $__internal_45cb834b1a901738a15d6b7f7d94d39b81a155dc9fe9804ee6391013c6216a16->leave($__internal_45cb834b1a901738a15d6b7f7d94d39b81a155dc9fe9804ee6391013c6216a16_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 12,  63 => 11,  59 => 9,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FOSMessageBundle::layout.html.twig' %}

{% block fos_message_content %}

<h2 align=\"center\">{% trans from 'FOSMessageBundle' %}Recherche{% endtrans %}</h2>

<p>{% transchoice threads|length with {'%num%': threads|length } from 'FOSMessageBundle' %}
    threads_found
{% endtranschoice %}</p>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:search.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/search.html.twig");
    }
}
