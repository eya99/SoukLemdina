<?php

/* @EasyAdmin/default/field_date.html.twig */
class __TwigTemplate_d7220043c32e9ee7cba77005c66567150d41770b80251e98f01dba8afc1ebc8c extends Twig_Template
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
        $__internal_4760c63236b2c0067960093f84d8d51fa96c131d7daa0fc98c153f50306a63a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4760c63236b2c0067960093f84d8d51fa96c131d7daa0fc98c153f50306a63a9->enter($__internal_4760c63236b2c0067960093f84d8d51fa96c131d7daa0fc98c153f50306a63a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_date.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_4760c63236b2c0067960093f84d8d51fa96c131d7daa0fc98c153f50306a63a9->leave($__internal_4760c63236b2c0067960093f84d8d51fa96c131d7daa0fc98c153f50306a63a9_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|date(field_options.format) }}
", "@EasyAdmin/default/field_date.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_date.html.twig");
    }
}
