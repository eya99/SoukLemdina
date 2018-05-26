<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_9d6e396ac26e577a9e50b739f534af2870b1c4f9567ec4ccc7988383caedffab extends Twig_Template
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
        $__internal_48a44ed7a8271f23192a18b419a9a01987af2af1b6bc10820a2da855f9baee3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a44ed7a8271f23192a18b419a9a01987af2af1b6bc10820a2da855f9baee3b->enter($__internal_48a44ed7a8271f23192a18b419a9a01987af2af1b6bc10820a2da855f9baee3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a44ed7a8271f23192a18b419a9a01987af2af1b6bc10820a2da855f9baee3b->leave($__internal_48a44ed7a8271f23192a18b419a9a01987af2af1b6bc10820a2da855f9baee3b_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_f71500710d5a4d31edc59a41988e1fd947ccd760ed7918f01775061c05484397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71500710d5a4d31edc59a41988e1fd947ccd760ed7918f01775061c05484397->enter($__internal_f71500710d5a4d31edc59a41988e1fd947ccd760ed7918f01775061c05484397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_f71500710d5a4d31edc59a41988e1fd947ccd760ed7918f01775061c05484397->leave($__internal_f71500710d5a4d31edc59a41988e1fd947ccd760ed7918f01775061c05484397_prof);

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
