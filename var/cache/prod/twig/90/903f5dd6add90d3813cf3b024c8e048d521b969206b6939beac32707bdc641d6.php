<?php

/* @EasyAdmin/default/field_float.html.twig */
class __TwigTemplate_431c3630bc4a7525563c40dd7d50194fefee165db8ab976886074f745f380fab extends Twig_Template
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
        $__internal_0c01bdf370b23ea01d4025b80c3dd9abb5bd7bc609ae8270d8f8a14ab2e18912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c01bdf370b23ea01d4025b80c3dd9abb5bd7bc609ae8270d8f8a14ab2e18912->enter($__internal_0c01bdf370b23ea01d4025b80c3dd9abb5bd7bc609ae8270d8f8a14ab2e18912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_float.html.twig"));

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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2), "html", null, true);
            echo "
";
        }
        
        $__internal_0c01bdf370b23ea01d4025b80c3dd9abb5bd7bc609ae8270d8f8a14ab2e18912->leave($__internal_0c01bdf370b23ea01d4025b80c3dd9abb5bd7bc609ae8270d8f8a14ab2e18912_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_float.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  24 => 2,  22 => 1,);
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
    {{ value|number_format(2) }}
{% endif %}
", "@EasyAdmin/default/field_float.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_float.html.twig");
    }
}
