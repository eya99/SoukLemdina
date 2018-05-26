<?php

/* FOSMessageBundle::layout.html.twig */
class __TwigTemplate_45eada5b0a22538d2585ea5d02cca4b0fd89509ededf4fc0ea863a4f668bb974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SUserBundle::layout.html.twig", "FOSMessageBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'fos_message_content' => array($this, 'block_fos_message_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_528a1364abcbd217f70b73bed75a7e0b87ba4a9c83c9d1a3b064a89371b0fe09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528a1364abcbd217f70b73bed75a7e0b87ba4a9c83c9d1a3b064a89371b0fe09->enter($__internal_528a1364abcbd217f70b73bed75a7e0b87ba4a9c83c9d1a3b064a89371b0fe09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        $__internal_fac72a338a456de1c631b8951bf274a668b134b83e2b5ecca27e206e5d98700b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac72a338a456de1c631b8951bf274a668b134b83e2b5ecca27e206e5d98700b->enter($__internal_fac72a338a456de1c631b8951bf274a668b134b83e2b5ecca27e206e5d98700b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_528a1364abcbd217f70b73bed75a7e0b87ba4a9c83c9d1a3b064a89371b0fe09->leave($__internal_528a1364abcbd217f70b73bed75a7e0b87ba4a9c83c9d1a3b064a89371b0fe09_prof);

        
        $__internal_fac72a338a456de1c631b8951bf274a668b134b83e2b5ecca27e206e5d98700b->leave($__internal_fac72a338a456de1c631b8951bf274a668b134b83e2b5ecca27e206e5d98700b_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_c66f3ff225098ba790bb7b0bd2144179eb7de1b112eda647143cc932d4af1548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66f3ff225098ba790bb7b0bd2144179eb7de1b112eda647143cc932d4af1548->enter($__internal_c66f3ff225098ba790bb7b0bd2144179eb7de1b112eda647143cc932d4af1548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_197ecba7741cf45c1a85dedb738caf2f334478e382c77512a901aaa741aca36b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197ecba7741cf45c1a85dedb738caf2f334478e382c77512a901aaa741aca36b->enter($__internal_197ecba7741cf45c1a85dedb738caf2f334478e382c77512a901aaa741aca36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\"/>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
        echo " - Messagerie</title>
";
        
        $__internal_197ecba7741cf45c1a85dedb738caf2f334478e382c77512a901aaa741aca36b->leave($__internal_197ecba7741cf45c1a85dedb738caf2f334478e382c77512a901aaa741aca36b_prof);

        
        $__internal_c66f3ff225098ba790bb7b0bd2144179eb7de1b112eda647143cc932d4af1548->leave($__internal_c66f3ff225098ba790bb7b0bd2144179eb7de1b112eda647143cc932d4af1548_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd04ecdfc92c14d9cd3046a814041be6eb6be870e8ffdec0a473f8bcc394f836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd04ecdfc92c14d9cd3046a814041be6eb6be870e8ffdec0a473f8bcc394f836->enter($__internal_bd04ecdfc92c14d9cd3046a814041be6eb6be870e8ffdec0a473f8bcc394f836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75b6a3d27d784d784430e423f5426a3ec1edb3c38006ccb690e911993afd2c89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75b6a3d27d784d784430e423f5426a3ec1edb3c38006ccb690e911993afd2c89->enter($__internal_75b6a3d27d784d784430e423f5426a3ec1edb3c38006ccb690e911993afd2c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"container clearfix\">
                <div class=\"col-md-12\">
                            ";
        // line 11
        echo "
                            <div align=\"center\">
                                <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_inbox");
        echo "\" class=\"button button-3d button-black\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Reçus", array(), "FOSMessageBundle");
        // line 14
        echo "</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_sent");
        echo "\" class=\"button button-3d button-black\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Envoyés", array(), "FOSMessageBundle");
        // line 16
        echo "</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_deleted");
        echo "\" class=\"button button-3d button-black\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Supprimés", array(), "FOSMessageBundle");
        // line 18
        echo "</a>
                            </div>
<br><br>
                            ";
        // line 21
        $this->displayBlock('fos_message_content', $context, $blocks);
        // line 22
        echo "
        </div>
    </div>
";
        
        $__internal_75b6a3d27d784d784430e423f5426a3ec1edb3c38006ccb690e911993afd2c89->leave($__internal_75b6a3d27d784d784430e423f5426a3ec1edb3c38006ccb690e911993afd2c89_prof);

        
        $__internal_bd04ecdfc92c14d9cd3046a814041be6eb6be870e8ffdec0a473f8bcc394f836->leave($__internal_bd04ecdfc92c14d9cd3046a814041be6eb6be870e8ffdec0a473f8bcc394f836_prof);

    }

    // line 21
    public function block_fos_message_content($context, array $blocks = array())
    {
        $__internal_01b3d019439a15dba8266fa0d9d3d7ae35729388085002156d4e166db5b96e87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b3d019439a15dba8266fa0d9d3d7ae35729388085002156d4e166db5b96e87->enter($__internal_01b3d019439a15dba8266fa0d9d3d7ae35729388085002156d4e166db5b96e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_f1478f5dc9bfc380fcd5e7c25c6bdff9f39c936a2e9581a0bb05a876bdc07b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1478f5dc9bfc380fcd5e7c25c6bdff9f39c936a2e9581a0bb05a876bdc07b6a->enter($__internal_f1478f5dc9bfc380fcd5e7c25c6bdff9f39c936a2e9581a0bb05a876bdc07b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        
        $__internal_f1478f5dc9bfc380fcd5e7c25c6bdff9f39c936a2e9581a0bb05a876bdc07b6a->leave($__internal_f1478f5dc9bfc380fcd5e7c25c6bdff9f39c936a2e9581a0bb05a876bdc07b6a_prof);

        
        $__internal_01b3d019439a15dba8266fa0d9d3d7ae35729388085002156d4e166db5b96e87->leave($__internal_01b3d019439a15dba8266fa0d9d3d7ae35729388085002156d4e166db5b96e87_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 21,  112 => 22,  110 => 21,  105 => 18,  101 => 17,  98 => 16,  94 => 15,  91 => 14,  87 => 13,  83 => 11,  79 => 8,  70 => 7,  56 => 4,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SUserBundle::layout.html.twig\" %}
{% block head %}
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset={{ _charset }}\"/>
    <title>{{ app.user.firstname }} {{  app.user.lastname }} - Messagerie</title>
{% endblock %}

{% block body %}
    <div class=\"container clearfix\">
                <div class=\"col-md-12\">
                            {#<h1>{% trans from 'FOSMessageBundle' %}messenger{% endtrans %}</h1>#}

                            <div align=\"center\">
                                <a href=\"{{ url('fos_message_inbox') }}\" class=\"button button-3d button-black\">{% trans from 'FOSMessageBundle' %}
                                        Reçus{% endtrans %}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"{{ url('fos_message_sent') }}\" class=\"button button-3d button-black\">{% trans from 'FOSMessageBundle' %}
                                        Envoyés{% endtrans %}</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href=\"{{ url('fos_message_deleted') }}\" class=\"button button-3d button-black\">{% trans from 'FOSMessageBundle' %}
                                        Supprimés{% endtrans %}</a>
                            </div>
<br><br>
                            {% block fos_message_content %}{% endblock %}

        </div>
    </div>
{% endblock %}", "FOSMessageBundle::layout.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/friendsofsymfony/message-bundle/FOS/MessageBundle/Resources/views/layout.html.twig");
    }
}
