<?php

/* FOSMessageBundle:Message:newThread.html.twig */
class __TwigTemplate_3eb1c3f4c4ae2660d2fd89589895c49f9a9db7355bd81ddf510504774fc4d0f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:newThread.html.twig", 1);
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
        $__internal_61190cb05e84139c6bd04ad9d4272edba5739d58668695c5e1980083273d2631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61190cb05e84139c6bd04ad9d4272edba5739d58668695c5e1980083273d2631->enter($__internal_61190cb05e84139c6bd04ad9d4272edba5739d58668695c5e1980083273d2631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $__internal_20a3c18b49467ea0245c0ae4e73faf64d6b1bebfe650a0111311c829151893a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a3c18b49467ea0245c0ae4e73faf64d6b1bebfe650a0111311c829151893a6->enter($__internal_20a3c18b49467ea0245c0ae4e73faf64d6b1bebfe650a0111311c829151893a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:newThread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61190cb05e84139c6bd04ad9d4272edba5739d58668695c5e1980083273d2631->leave($__internal_61190cb05e84139c6bd04ad9d4272edba5739d58668695c5e1980083273d2631_prof);

        
        $__internal_20a3c18b49467ea0245c0ae4e73faf64d6b1bebfe650a0111311c829151893a6->leave($__internal_20a3c18b49467ea0245c0ae4e73faf64d6b1bebfe650a0111311c829151893a6_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_3637aba76133a73c451e9a019dc106e59411bbfed217f2d2fa94de553d27c9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3637aba76133a73c451e9a019dc106e59411bbfed217f2d2fa94de553d27c9d8->enter($__internal_3637aba76133a73c451e9a019dc106e59411bbfed217f2d2fa94de553d27c9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_0d1f18ea289b539180ec1ebcb0ab7391451cf042da5deafd1a726dd835760f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1f18ea289b539180ec1ebcb0ab7391451cf042da5deafd1a726dd835760f2e->enter($__internal_0d1f18ea289b539180ec1ebcb0ab7391451cf042da5deafd1a726dd835760f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                <br>
                <input value=\"Envoyer\" type=\"submit\" class=\"button button-3d button-black\"/>
            </form>
            <br><br>
        </div>
    </div>
";
        
        $__internal_0d1f18ea289b539180ec1ebcb0ab7391451cf042da5deafd1a726dd835760f2e->leave($__internal_0d1f18ea289b539180ec1ebcb0ab7391451cf042da5deafd1a726dd835760f2e_prof);

        
        $__internal_3637aba76133a73c451e9a019dc106e59411bbfed217f2d2fa94de553d27c9d8->leave($__internal_3637aba76133a73c451e9a019dc106e59411bbfed217f2d2fa94de553d27c9d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:newThread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  59 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
", "FOSMessageBundle:Message:newThread.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/Message/newThread.html.twig");
    }
}
