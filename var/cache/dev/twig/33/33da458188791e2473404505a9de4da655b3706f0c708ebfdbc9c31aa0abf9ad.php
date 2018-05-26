<?php

/* EasyAdminBundle:default:field_float.html.twig */
class __TwigTemplate_0bd9545e6973160ea121a95b438e00f1c8fe1b904fd7a5292253d1bdc9542f6a extends Twig_Template
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
        $__internal_387609a54908ab5a240e4f8cc4d98f89dd8af398e6dc753eee986ee58bef80f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387609a54908ab5a240e4f8cc4d98f89dd8af398e6dc753eee986ee58bef80f2->enter($__internal_387609a54908ab5a240e4f8cc4d98f89dd8af398e6dc753eee986ee58bef80f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

        $__internal_7e49141242233344933741ce8c6e6a000bb57c78f67527fd4f42c3fc31a1950a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e49141242233344933741ce8c6e6a000bb57c78f67527fd4f42c3fc31a1950a->enter($__internal_7e49141242233344933741ce8c6e6a000bb57c78f67527fd4f42c3fc31a1950a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_float.html.twig"));

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
        
        $__internal_387609a54908ab5a240e4f8cc4d98f89dd8af398e6dc753eee986ee58bef80f2->leave($__internal_387609a54908ab5a240e4f8cc4d98f89dd8af398e6dc753eee986ee58bef80f2_prof);

        
        $__internal_7e49141242233344933741ce8c6e6a000bb57c78f67527fd4f42c3fc31a1950a->leave($__internal_7e49141242233344933741ce8c6e6a000bb57c78f67527fd4f42c3fc31a1950a_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_float.html.twig";
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
    {{ value|number_format(2) }}
{% endif %}
", "EasyAdminBundle:default:field_float.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_float.html.twig");
    }
}
