<?php

/* EasyAdminBundle:default:field_integer.html.twig */
class __TwigTemplate_505677056319d5fa80f0dbdc54844f94dedf64908d10ef020e68074ce5fb3bec extends Twig_Template
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
        $__internal_d1678187e23c9d1b8686f7940d660f5bc6bb07976e78764e5f0a77454827362a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1678187e23c9d1b8686f7940d660f5bc6bb07976e78764e5f0a77454827362a->enter($__internal_d1678187e23c9d1b8686f7940d660f5bc6bb07976e78764e5f0a77454827362a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        $__internal_3be23498532b3119224a80d8a47c5a198ae2f3b34d976694eb4e30cc5082eb2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be23498532b3119224a80d8a47c5a198ae2f3b34d976694eb4e30cc5082eb2c->enter($__internal_3be23498532b3119224a80d8a47c5a198ae2f3b34d976694eb4e30cc5082eb2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_integer.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, sprintf($this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
            echo "
";
        }
        
        $__internal_d1678187e23c9d1b8686f7940d660f5bc6bb07976e78764e5f0a77454827362a->leave($__internal_d1678187e23c9d1b8686f7940d660f5bc6bb07976e78764e5f0a77454827362a_prof);

        
        $__internal_3be23498532b3119224a80d8a47c5a198ae2f3b34d976694eb4e30cc5082eb2c->leave($__internal_3be23498532b3119224a80d8a47c5a198ae2f3b34d976694eb4e30cc5082eb2c_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if field_options.format %}
    {{ field_options.format|format(value) }}
{% else %}
    {{ value|number_format }}
{% endif %}
", "EasyAdminBundle:default:field_integer.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_integer.html.twig");
    }
}
