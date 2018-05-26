<?php

/* EasyAdminBundle:default:field_boolean.html.twig */
class __TwigTemplate_1c177f843bea3a0225320990525ac610a0aea6aaf3baa33d5b6b5481f7002f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_643c9068eb7d799f17419f958a983c1d5fadee9838be0a3c3a32fec29c6e8104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_643c9068eb7d799f17419f958a983c1d5fadee9838be0a3c3a32fec29c6e8104->enter($__internal_643c9068eb7d799f17419f958a983c1d5fadee9838be0a3c3a32fec29c6e8104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        $__internal_9b9e0971e423e7148128e9ce962f3101a34498941a45f5057016f2a0ab13c26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9e0971e423e7148128e9ce962f3101a34498941a45f5057016f2a0ab13c26e->enter($__internal_9b9e0971e423e7148128e9ce962f3101a34498941a45f5057016f2a0ab13c26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_boolean.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) == true)) {
            // line 4
            echo "    <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.true", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        } else {
            // line 6
            echo "    <span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.false", array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
";
        }
        
        $__internal_643c9068eb7d799f17419f958a983c1d5fadee9838be0a3c3a32fec29c6e8104->leave($__internal_643c9068eb7d799f17419f958a983c1d5fadee9838be0a3c3a32fec29c6e8104_prof);

        
        $__internal_9b9e0971e423e7148128e9ce962f3101a34498941a45f5057016f2a0ab13c26e->leave($__internal_9b9e0971e423e7148128e9ce962f3101a34498941a45f5057016f2a0ab13c26e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'EasyAdminBundle' %}

{% if value == true %}
    <span class=\"label label-success\">{{ 'label.true'|trans }}</span>
{% else %}
    <span class=\"label label-danger\">{{ 'label.false'|trans }}</span>
{% endif %}
", "EasyAdminBundle:default:field_boolean.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_boolean.html.twig");
    }
}
