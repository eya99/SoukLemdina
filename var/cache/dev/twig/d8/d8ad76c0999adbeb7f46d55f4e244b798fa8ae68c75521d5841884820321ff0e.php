<?php

/* FOSMessageBundle:Message:deleted.html.twig */
class __TwigTemplate_2620b9757428636f01aec4d6ce762953ec0e1ccbbf7ce2456c7058c9de9886f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 1);
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
        $__internal_be948f132d38b02be7d1df0ff6f64f6578312448c5080f730b9c644f3ee5f79e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be948f132d38b02be7d1df0ff6f64f6578312448c5080f730b9c644f3ee5f79e->enter($__internal_be948f132d38b02be7d1df0ff6f64f6578312448c5080f730b9c644f3ee5f79e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $__internal_0756da0ca1c13b702dce92fd5539da4379753994c82d919f49284a477355452c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0756da0ca1c13b702dce92fd5539da4379753994c82d919f49284a477355452c->enter($__internal_0756da0ca1c13b702dce92fd5539da4379753994c82d919f49284a477355452c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:deleted.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be948f132d38b02be7d1df0ff6f64f6578312448c5080f730b9c644f3ee5f79e->leave($__internal_be948f132d38b02be7d1df0ff6f64f6578312448c5080f730b9c644f3ee5f79e_prof);

        
        $__internal_0756da0ca1c13b702dce92fd5539da4379753994c82d919f49284a477355452c->leave($__internal_0756da0ca1c13b702dce92fd5539da4379753994c82d919f49284a477355452c_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_dabe2bb0772f0f0aab150ec672d671802b713b932c6e4a934d71ff9c8af7a861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabe2bb0772f0f0aab150ec672d671802b713b932c6e4a934d71ff9c8af7a861->enter($__internal_dabe2bb0772f0f0aab150ec672d671802b713b932c6e4a934d71ff9c8af7a861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_71296d444c71176e27b4a6148e6f5738aeacb7341a9d2f84c7f8ac6145ca32e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71296d444c71176e27b4a6148e6f5738aeacb7341a9d2f84c7f8ac6145ca32e4->enter($__internal_71296d444c71176e27b4a6148e6f5738aeacb7341a9d2f84c7f8ac6145ca32e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2 align=\"center\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Supprimés", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:deleted.html.twig", 7)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_71296d444c71176e27b4a6148e6f5738aeacb7341a9d2f84c7f8ac6145ca32e4->leave($__internal_71296d444c71176e27b4a6148e6f5738aeacb7341a9d2f84c7f8ac6145ca32e4_prof);

        
        $__internal_dabe2bb0772f0f0aab150ec672d671802b713b932c6e4a934d71ff9c8af7a861->leave($__internal_dabe2bb0772f0f0aab150ec672d671802b713b932c6e4a934d71ff9c8af7a861_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:deleted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2 align=\"center\">{% trans from 'FOSMessageBundle' %}Supprimés{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:deleted.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/deleted.html.twig");
    }
}
