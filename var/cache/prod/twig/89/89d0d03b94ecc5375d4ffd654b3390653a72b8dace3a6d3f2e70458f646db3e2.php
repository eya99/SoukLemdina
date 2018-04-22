<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_ac7001900c631a9b70ed00b269e504fb77c2a3936155dad780e6b9d13985b7fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 1);
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
        $__internal_2a32d248f993473493a1efd568dc10fe57f7f3f21207f4fa79ebe1c6b25d4095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a32d248f993473493a1efd568dc10fe57f7f3f21207f4fa79ebe1c6b25d4095->enter($__internal_2a32d248f993473493a1efd568dc10fe57f7f3f21207f4fa79ebe1c6b25d4095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a32d248f993473493a1efd568dc10fe57f7f3f21207f4fa79ebe1c6b25d4095->leave($__internal_2a32d248f993473493a1efd568dc10fe57f7f3f21207f4fa79ebe1c6b25d4095_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_15ac42609d64923f6413e8aae88d56e55d4199d28eab216a573bf8b18f7cddc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15ac42609d64923f6413e8aae88d56e55d4199d28eab216a573bf8b18f7cddc2->enter($__internal_15ac42609d64923f6413e8aae88d56e55d4199d28eab216a573bf8b18f7cddc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
    <h2 align=\"center\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Reçus", array(), "FOSMessageBundle");
        echo "</h2>
    <div align=\"center\">
        <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\"
           class=\"button button-3d button-black divider-right\">";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Nouveau
            message", array(), "FOSMessageBundle");
        // line 9
        echo "</a>
    </div>
    <br>
    ";
        // line 12
        $this->loadTemplate("FOSMessageBundle:Message:threads_list.html.twig", "FOSMessageBundle:Message:inbox.html.twig", 12)->display(array_merge($context, array("threads" => (isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")))));
        // line 13
        echo "    <br><br>
";
        
        $__internal_15ac42609d64923f6413e8aae88d56e55d4199d28eab216a573bf8b18f7cddc2->leave($__internal_15ac42609d64923f6413e8aae88d56e55d4199d28eab216a573bf8b18f7cddc2_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:inbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 13,  60 => 12,  55 => 9,  52 => 8,  48 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

    <h2 align=\"center\">{% trans from 'FOSMessageBundle' %}Reçus{% endtrans %}</h2>
    <div align=\"center\">
        <a href=\"{{ url('fos_message_thread_new' ) }}\"
           class=\"button button-3d button-black divider-right\">{% trans from 'FOSMessageBundle' %}Nouveau
            message{% endtrans %}</a>
    </div>
    <br>
    {% include 'FOSMessageBundle:Message:threads_list.html.twig' with {'threads': threads} %}
    <br><br>
{% endblock %}
", "FOSMessageBundle:Message:inbox.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/inbox.html.twig");
    }
}
