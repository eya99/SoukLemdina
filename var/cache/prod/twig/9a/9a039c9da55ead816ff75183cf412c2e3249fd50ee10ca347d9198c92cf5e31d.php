<?php

/* @EasyAdmin/default/field_datetime.html.twig */
class __TwigTemplate_10e7010bfa79dc98d1434dc7550dd1e153edfd69d885c37e4fbf400920a3b509 extends Twig_Template
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
        $__internal_8b4a6e28150996775e3b751f4c36081880b73089e9e827a1dc41420bd53f183e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4a6e28150996775e3b751f4c36081880b73089e9e827a1dc41420bd53f183e->enter($__internal_8b4a6e28150996775e3b751f4c36081880b73089e9e827a1dc41420bd53f183e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/field_datetime.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["field_options"]) ? $context["field_options"] : $this->getContext($context, "field_options")), "format", array())), "html", null, true);
        echo "
";
        
        $__internal_8b4a6e28150996775e3b751f4c36081880b73089e9e827a1dc41420bd53f183e->leave($__internal_8b4a6e28150996775e3b751f4c36081880b73089e9e827a1dc41420bd53f183e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/field_datetime.html.twig";
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
", "@EasyAdmin/default/field_datetime.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_datetime.html.twig");
    }
}
