<?php

/* EasyAdminBundle:default:field_decimal.html.twig */
class __TwigTemplate_1232ba7d6f478b12b0e8594fcb055e2637adb9561221cf35483dcd42c063446c extends Twig_Template
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
        $__internal_9890acb4b0268b5ef4275904b73e924be29735cc3020755d6c877e840afb2f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9890acb4b0268b5ef4275904b73e924be29735cc3020755d6c877e840afb2f9c->enter($__internal_9890acb4b0268b5ef4275904b73e924be29735cc3020755d6c877e840afb2f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

        $__internal_0b553267599948fdd318100d7d9a0870aae79a41e0401955f48100980ba0ce2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b553267599948fdd318100d7d9a0870aae79a41e0401955f48100980ba0ce2e->enter($__internal_0b553267599948fdd318100d7d9a0870aae79a41e0401955f48100980ba0ce2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_decimal.html.twig"));

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
        
        $__internal_9890acb4b0268b5ef4275904b73e924be29735cc3020755d6c877e840afb2f9c->leave($__internal_9890acb4b0268b5ef4275904b73e924be29735cc3020755d6c877e840afb2f9c_prof);

        
        $__internal_0b553267599948fdd318100d7d9a0870aae79a41e0401955f48100980ba0ce2e->leave($__internal_0b553267599948fdd318100d7d9a0870aae79a41e0401955f48100980ba0ce2e_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_decimal.html.twig";
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
", "EasyAdminBundle:default:field_decimal.html.twig", "/opt/lampp/htdocs/SoukLemdina/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_decimal.html.twig");
    }
}
