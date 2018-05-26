<?php

/* FOSMessageBundle:Message:inbox.html.twig */
class __TwigTemplate_e3c4e0aea19867c66a12d766074f6350705f8524b5b74b557a3e48ecf50d7e9d extends Twig_Template
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
        $__internal_a69897876700927643790ae1611dc29fc79e53d4c352ca9f1ba5befe88799068 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a69897876700927643790ae1611dc29fc79e53d4c352ca9f1ba5befe88799068->enter($__internal_a69897876700927643790ae1611dc29fc79e53d4c352ca9f1ba5befe88799068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $__internal_df66004b8c10a40d78577ac6ba9aa138dc3717f028eb809b0ad51bd5204df1ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df66004b8c10a40d78577ac6ba9aa138dc3717f028eb809b0ad51bd5204df1ca->enter($__internal_df66004b8c10a40d78577ac6ba9aa138dc3717f028eb809b0ad51bd5204df1ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:inbox.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a69897876700927643790ae1611dc29fc79e53d4c352ca9f1ba5befe88799068->leave($__internal_a69897876700927643790ae1611dc29fc79e53d4c352ca9f1ba5befe88799068_prof);

        
        $__internal_df66004b8c10a40d78577ac6ba9aa138dc3717f028eb809b0ad51bd5204df1ca->leave($__internal_df66004b8c10a40d78577ac6ba9aa138dc3717f028eb809b0ad51bd5204df1ca_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_712f280ebd317adbbe7bd7ff72075c0d009e75cd5d8a7d79d11259bd77cbba07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_712f280ebd317adbbe7bd7ff72075c0d009e75cd5d8a7d79d11259bd77cbba07->enter($__internal_712f280ebd317adbbe7bd7ff72075c0d009e75cd5d8a7d79d11259bd77cbba07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_4dd6f1ddf5834bb4ed55071b60ba1b5a5e8c78fb4cf72ab60d092f65dabbd8ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd6f1ddf5834bb4ed55071b60ba1b5a5e8c78fb4cf72ab60d092f65dabbd8ad->enter($__internal_4dd6f1ddf5834bb4ed55071b60ba1b5a5e8c78fb4cf72ab60d092f65dabbd8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

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
        
        $__internal_4dd6f1ddf5834bb4ed55071b60ba1b5a5e8c78fb4cf72ab60d092f65dabbd8ad->leave($__internal_4dd6f1ddf5834bb4ed55071b60ba1b5a5e8c78fb4cf72ab60d092f65dabbd8ad_prof);

        
        $__internal_712f280ebd317adbbe7bd7ff72075c0d009e75cd5d8a7d79d11259bd77cbba07->leave($__internal_712f280ebd317adbbe7bd7ff72075c0d009e75cd5d8a7d79d11259bd77cbba07_prof);

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
        return array (  71 => 13,  69 => 12,  64 => 9,  61 => 8,  57 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
