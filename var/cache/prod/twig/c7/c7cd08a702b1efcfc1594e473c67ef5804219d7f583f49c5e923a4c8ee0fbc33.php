<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_824e5f708d7418007a514fc2505766387e2722a2ce00b9f0f00fd79bf42df70e extends Twig_Template
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
        $__internal_691dad05ff17bfcf025291598bda1b52ffb866d767213e698e51e130003d9697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_691dad05ff17bfcf025291598bda1b52ffb866d767213e698e51e130003d9697->enter($__internal_691dad05ff17bfcf025291598bda1b52ffb866d767213e698e51e130003d9697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_691dad05ff17bfcf025291598bda1b52ffb866d767213e698e51e130003d9697->leave($__internal_691dad05ff17bfcf025291598bda1b52ffb866d767213e698e51e130003d9697_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_3e663f11b28ec0df0b3027063a8f8d2b99cc406b04f7f73a80370f63e5cc980f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e663f11b28ec0df0b3027063a8f8d2b99cc406b04f7f73a80370f63e5cc980f->enter($__internal_3e663f11b28ec0df0b3027063a8f8d2b99cc406b04f7f73a80370f63e5cc980f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_3e663f11b28ec0df0b3027063a8f8d2b99cc406b04f7f73a80370f63e5cc980f->leave($__internal_3e663f11b28ec0df0b3027063a8f8d2b99cc406b04f7f73a80370f63e5cc980f_prof);

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
