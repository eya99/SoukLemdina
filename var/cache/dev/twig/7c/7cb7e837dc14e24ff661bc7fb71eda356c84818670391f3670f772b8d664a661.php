<?php

/* FOSMessageBundle:Message:sent.html.twig */
class __TwigTemplate_e11bfcd2fb78312c5920b016302bdad13f6c65ca690c1e2a8767823a1952b975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:sent.html.twig", 1);
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
        $__internal_eeb9840ce70c1912ea0dddbf3bce6a321eefe4870f2f91fc20a986a7fe6a1ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeb9840ce70c1912ea0dddbf3bce6a321eefe4870f2f91fc20a986a7fe6a1ca5->enter($__internal_eeb9840ce70c1912ea0dddbf3bce6a321eefe4870f2f91fc20a986a7fe6a1ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $__internal_37234a7857ff438ae7b91e439bef8e929e4b3e147c56472243de776b2c0a9e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37234a7857ff438ae7b91e439bef8e929e4b3e147c56472243de776b2c0a9e58->enter($__internal_37234a7857ff438ae7b91e439bef8e929e4b3e147c56472243de776b2c0a9e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:sent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eeb9840ce70c1912ea0dddbf3bce6a321eefe4870f2f91fc20a986a7fe6a1ca5->leave($__internal_eeb9840ce70c1912ea0dddbf3bce6a321eefe4870f2f91fc20a986a7fe6a1ca5_prof);

        
        $__internal_37234a7857ff438ae7b91e439bef8e929e4b3e147c56472243de776b2c0a9e58->leave($__internal_37234a7857ff438ae7b91e439bef8e929e4b3e147c56472243de776b2c0a9e58_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_fdb00d9229712b2402f4bceec530254f31dd063a62e1feefe90e4bbb9ab52754 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb00d9229712b2402f4bceec530254f31dd063a62e1feefe90e4bbb9ab52754->enter($__internal_fdb00d9229712b2402f4bceec530254f31dd063a62e1feefe90e4bbb9ab52754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_b7a0eacbca2c84d3a000a3c9377aa52030c4cc2c6c9a7f5a5c702d62a31ceee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a0eacbca2c84d3a000a3c9377aa52030c4cc2c6c9a7f5a5c702d62a31ceee3->enter($__internal_b7a0eacbca2c84d3a000a3c9377aa52030c4cc2c6c9a7f5a5c702d62a31ceee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2 align=\"center\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Envoyés", array(), "FOSMessageBundle");
        echo "</h2>

";
        // line 7
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:sent.html.twig", 7)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 8
        echo "
";
        
        $__internal_b7a0eacbca2c84d3a000a3c9377aa52030c4cc2c6c9a7f5a5c702d62a31ceee3->leave($__internal_b7a0eacbca2c84d3a000a3c9377aa52030c4cc2c6c9a7f5a5c702d62a31ceee3_prof);

        
        $__internal_fdb00d9229712b2402f4bceec530254f31dd063a62e1feefe90e4bbb9ab52754->leave($__internal_fdb00d9229712b2402f4bceec530254f31dd063a62e1feefe90e4bbb9ab52754_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:sent.html.twig";
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

<h2 align=\"center\">{% trans from 'FOSMessageBundle' %}Envoyés{% endtrans %}</h2>

{% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}

{% endblock %}
", "FOSMessageBundle:Message:sent.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/sent.html.twig");
    }
}
