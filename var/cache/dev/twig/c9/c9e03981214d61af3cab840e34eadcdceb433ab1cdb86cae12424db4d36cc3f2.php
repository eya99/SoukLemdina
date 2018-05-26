<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_ae631e95cab3e21d763661c97f6d18412cdf465445a1735cd3595908521b2eab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
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
        $__internal_df2416406bcb9663fee4f5d811b609da86c590c9d45564f72ff5e5c7bca5c4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df2416406bcb9663fee4f5d811b609da86c590c9d45564f72ff5e5c7bca5c4ab->enter($__internal_df2416406bcb9663fee4f5d811b609da86c590c9d45564f72ff5e5c7bca5c4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $__internal_9ce9aeb959106e98926426f10fab4c8821d2d678b5f08e2d6c5c140c912425fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce9aeb959106e98926426f10fab4c8821d2d678b5f08e2d6c5c140c912425fe->enter($__internal_9ce9aeb959106e98926426f10fab4c8821d2d678b5f08e2d6c5c140c912425fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df2416406bcb9663fee4f5d811b609da86c590c9d45564f72ff5e5c7bca5c4ab->leave($__internal_df2416406bcb9663fee4f5d811b609da86c590c9d45564f72ff5e5c7bca5c4ab_prof);

        
        $__internal_9ce9aeb959106e98926426f10fab4c8821d2d678b5f08e2d6c5c140c912425fe->leave($__internal_9ce9aeb959106e98926426f10fab4c8821d2d678b5f08e2d6c5c140c912425fe_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_368455d5c8d8d4c35fd166d3169ae04900151a94475ca9bf9883d69d274753b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368455d5c8d8d4c35fd166d3169ae04900151a94475ca9bf9883d69d274753b9->enter($__internal_368455d5c8d8d4c35fd166d3169ae04900151a94475ca9bf9883d69d274753b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_e43a3d9474f1bc4a62dbb2f58a1b82123130806a43851678490f5dd1b05b9a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e43a3d9474f1bc4a62dbb2f58a1b82123130806a43851678490f5dd1b05b9a12->enter($__internal_e43a3d9474f1bc4a62dbb2f58a1b82123130806a43851678490f5dd1b05b9a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "
<h2 align=\"center\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "subject", array()), "html", null, true);
        echo "</h2>

";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "<br>
";
            // line 9
            if (($this->getAttribute($context["message"], "sender", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))) {
                // line 10
                echo "<div class=\"messenger_thread_message\" align=\"right\">
    ";
            } else {
                // line 12
                echo "    <div class=\"messenger_thread_message\">
        ";
            }
            // line 14
            echo "        <div class=\"messenger_thread_message_info\">
            <strong>
                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "firstname", array()), "html", null, true);
            echo "
            </strong>
        </div>

        <div class=\"messenger_thread_message_body\" id=\"message_";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
            echo "\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", array()), "html", null, true);
            echo "
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
        <div class=\"tab-content clearfix\" id=\"tab-register\">
            <br><br>
            <form action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : $this->getContext($context, "thread")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <br>
                <input value=\"Répondre\" type=\"submit\" class=\"button button-3d button-black\"/>
            </form>
            <br><br>
        </div>
    </div>
    ";
        
        $__internal_e43a3d9474f1bc4a62dbb2f58a1b82123130806a43851678490f5dd1b05b9a12->leave($__internal_e43a3d9474f1bc4a62dbb2f58a1b82123130806a43851678490f5dd1b05b9a12_prof);

        
        $__internal_368455d5c8d8d4c35fd166d3169ae04900151a94475ca9bf9883d69d274753b9->leave($__internal_368455d5c8d8d4c35fd166d3169ae04900151a94475ca9bf9883d69d274753b9_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 30,  105 => 29,  99 => 25,  89 => 21,  85 => 20,  78 => 16,  74 => 14,  70 => 12,  66 => 10,  64 => 9,  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

<h2 align=\"center\">{{ thread.subject }}</h2>

{% for message in thread.messages %}
<br>
{% if message.sender == app.user.username %}
<div class=\"messenger_thread_message\" align=\"right\">
    {% else %}
    <div class=\"messenger_thread_message\">
        {% endif %}
        <div class=\"messenger_thread_message_info\">
            <strong>
                {{ message.sender.firstname }}
            </strong>
        </div>

        <div class=\"messenger_thread_message_body\" id=\"message_{{ message.id }}\">
            {{ message.body }}
        </div>
    </div>
    {% endfor %}

    <div class=\"tabs divcenter nobottommargin clearfix\" id=\"tab-login-register\" style=\"max-width: 500px;\">
        <div class=\"tab-content clearfix\" id=\"tab-register\">
            <br><br>
            <form action=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" method=\"post\">
                {{ form_widget(form) }}
                <br>
                <input value=\"Répondre\" type=\"submit\" class=\"button button-3d button-black\"/>
            </form>
            <br><br>
        </div>
    </div>
    {% endblock %}
", "FOSMessageBundle:Message:thread.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/thread.html.twig");
    }
}
