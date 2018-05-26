<?php

/* FOSMessageBundle:Message:newThread2.html.twig */
class __TwigTemplate_3aae52db978a8093b52b909f9f0c8fcdf4fe78b0c9063d46bd5e61eec36fc6cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:newThread2.html.twig", 1);
        $this->blocks = array(
            'fos_message_content' => array($this, 'block_fos_message_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf12eab9daa84f985010ba00e6223cc9b34ffea2802586454901e891ce615b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf12eab9daa84f985010ba00e6223cc9b34ffea2802586454901e891ce615b4b->enter($__internal_bf12eab9daa84f985010ba00e6223cc9b34ffea2802586454901e891ce615b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread2.html.twig"));

        $__internal_9eb739464121199d3240ecaad4687373f5654da563fc805efc48abe2b78952d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb739464121199d3240ecaad4687373f5654da563fc805efc48abe2b78952d1->enter($__internal_9eb739464121199d3240ecaad4687373f5654da563fc805efc48abe2b78952d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf12eab9daa84f985010ba00e6223cc9b34ffea2802586454901e891ce615b4b->leave($__internal_bf12eab9daa84f985010ba00e6223cc9b34ffea2802586454901e891ce615b4b_prof);

        
        $__internal_9eb739464121199d3240ecaad4687373f5654da563fc805efc48abe2b78952d1->leave($__internal_9eb739464121199d3240ecaad4687373f5654da563fc805efc48abe2b78952d1_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_919d30c27067ef47846c595688d0ba6fff110c86420c43e2ee7fc48b94148083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_919d30c27067ef47846c595688d0ba6fff110c86420c43e2ee7fc48b94148083->enter($__internal_919d30c27067ef47846c595688d0ba6fff110c86420c43e2ee7fc48b94148083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_802daf75f0088b43c835a70b5cbbaf06d5059e326b2037594feffcd4093162b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802daf75f0088b43c835a70b5cbbaf06d5059e326b2037594feffcd4093162b4->enter($__internal_802daf75f0088b43c835a70b5cbbaf06d5059e326b2037594feffcd4093162b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
    <h2 align=\"center\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Nouveau Message", array(), "FOSMessageBundle");
        echo "</h2>
    <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
        <div class=\"tab-content clearfix\" id=\"tab-register\">
            <br><br>
            <form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_new");
        echo "\" method=\"post\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <br>
                <input value=\"Envoyer\" type=\"submit\" class=\"button button-3d button-black\"/>
            </form>
            <br><br>
        </div>
    </div>
";
        
        $__internal_802daf75f0088b43c835a70b5cbbaf06d5059e326b2037594feffcd4093162b4->leave($__internal_802daf75f0088b43c835a70b5cbbaf06d5059e326b2037594feffcd4093162b4_prof);

        
        $__internal_919d30c27067ef47846c595688d0ba6fff110c86420c43e2ee7fc48b94148083->leave($__internal_919d30c27067ef47846c595688d0ba6fff110c86420c43e2ee7fc48b94148083_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2a4660ccb5c26b1652248fd7b2adee68d51ca3243d80fae4966390cf0b4ea11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2a4660ccb5c26b1652248fd7b2adee68d51ca3243d80fae4966390cf0b4ea11->enter($__internal_f2a4660ccb5c26b1652248fd7b2adee68d51ca3243d80fae4966390cf0b4ea11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_360757ded7de4f66b17569bf7bead398f0918bb0d8bce220218b16cab54c089f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360757ded7de4f66b17569bf7bead398f0918bb0d8bce220218b16cab54c089f->enter($__internal_360757ded7de4f66b17569bf7bead398f0918bb0d8bce220218b16cab54c089f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "    <script type=\"text/javascript\">
        jQuery(window).load(function(){
            console.log('jawi behy');
            jQuery('#message_recipient').val('";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "');
        });
    </script>
";
        
        $__internal_360757ded7de4f66b17569bf7bead398f0918bb0d8bce220218b16cab54c089f->leave($__internal_360757ded7de4f66b17569bf7bead398f0918bb0d8bce220218b16cab54c089f_prof);

        
        $__internal_f2a4660ccb5c26b1652248fd7b2adee68d51ca3243d80fae4966390cf0b4ea11->leave($__internal_f2a4660ccb5c26b1652248fd7b2adee68d51ca3243d80fae4966390cf0b4ea11_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:newThread2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  91 => 19,  82 => 18,  64 => 10,  60 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

    <h2 align=\"center\">{% trans from 'FOSMessageBundle' %}Nouveau Message{% endtrans %}</h2>
    <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
        <div class=\"tab-content clearfix\" id=\"tab-register\">
            <br><br>
            <form action=\"{{ url('fos_message_thread_new') }}\" method=\"post\">
                {{ form_widget(form) }}
                <br>
                <input value=\"Envoyer\" type=\"submit\" class=\"button button-3d button-black\"/>
            </form>
            <br><br>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    <script type=\"text/javascript\">
        jQuery(window).load(function(){
            console.log('jawi behy');
            jQuery('#message_recipient').val('{{ username }}');
        });
    </script>
{% endblock %}
", "FOSMessageBundle:Message:newThread2.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/newThread2.html.twig");
    }
}
