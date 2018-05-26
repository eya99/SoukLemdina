<?php

/* EasyAdminBundle:default:field_smallint.html.twig */
class __TwigTemplate_5a0cef82a95432631230ce08e2142213cc672afabb1407a783f1d99fd9f5c67a extends Twig_Template
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
        $__internal_8941aed614ef3e70db6b03eccdd4312dbe6d24ef1f4411dd77250213575433c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8941aed614ef3e70db6b03eccdd4312dbe6d24ef1f4411dd77250213575433c5->enter($__internal_8941aed614ef3e70db6b03eccdd4312dbe6d24ef1f4411dd77250213575433c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

        $__internal_a020d175eaa870c13d1b7d42debdeda62aac8f122dd3e4d2009767f193f503a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a020d175eaa870c13d1b7d42debdeda62aac8f122dd3e4d2009767f193f503a8->enter($__internal_a020d175eaa870c13d1b7d42debdeda62aac8f122dd3e4d2009767f193f503a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_smallint.html.twig"));

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
        
        $__internal_8941aed614ef3e70db6b03eccdd4312dbe6d24ef1f4411dd77250213575433c5->leave($__internal_8941aed614ef3e70db6b03eccdd4312dbe6d24ef1f4411dd77250213575433c5_prof);

        
        $__internal_a020d175eaa870c13d1b7d42debdeda62aac8f122dd3e4d2009767f193f503a8->leave($__internal_a020d175eaa870c13d1b7d42debdeda62aac8f122dd3e4d2009767f193f503a8_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_smallint.html.twig";
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
", "EasyAdminBundle:default:field_smallint.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_smallint.html.twig");
    }
}
